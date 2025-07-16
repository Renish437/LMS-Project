<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Stripe\StripeClient;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    //
    protected $paymentService;

    public function __construct(PaymentService $paymentService){
        $this->paymentService = $paymentService;
    }
    public function order(OrderRequest $request)
    {
        
       session()->put("stripe_data",$request->validated());
       return $this->paymentService->processPayment($request->validated());
    }
public function success(Request $request)
{
    $sessionId = $request->query('session_id');
    $stripeKey = config('stripe.stripe_sk');

    if (empty($stripeKey)) {
        return redirect()->route('checkout.index')->with('error', 'Payment failed: Stripe secret key is missing.');
    }

    $stripe = new \Stripe\StripeClient($stripeKey);

    try {
        // Retrieve the Stripe checkout session
        $session = $stripe->checkout->sessions->retrieve($sessionId);

        if (!$session || !$session->payment_intent) {
            return redirect()->route('checkout.index')->with('error', 'Payment failed: Invalid session or missing payment intent.');
        }

        $paymentIntent = $stripe->paymentIntents->retrieve($session->payment_intent);

        $stripeData = session()->get('stripe_data');

        if (empty($stripeData)) {
            return redirect()->route('checkout.index')->with('error', 'Payment failed: Stripe session data not found.');
        }

        // Create payment and order
        $this->createPayment($session, $paymentIntent);

        // Clear cart
        $guestToken = $request->cookie('guest_token') ?? \Illuminate\Support\Str::uuid();
        \App\Models\Cart::where('guest_token', $guestToken)->delete();

        // Forget session data
        session()->forget(['coupon', 'stripe_data']);

        return redirect()->route('front.home')->with('success', 'Course purchased successfully');
    } catch (\Exception $e) {
        Log::error('Stripe Payment Success Error: ' . $e->getMessage());

        return redirect()->route('checkout.index')->with('error', 'Payment failed: ' . $e->getMessage());
    }
}

    public function cancel()
    {

        return view('frontend.pages.checkout.stripe.cancel');
    }
   private function createPayment($session, $paymentIntent)
    {

        // Create payment record using metadata from Stripe
        $payment = Payment::create([
            'transaction_id' => $paymentIntent->id,
            'name' => $session->customer_details->name, // Use customer details for name
            'email' => $session->customer_email, // Customer's email from session

            'phone' => $session->customer_phone, // Customer's phone from customer_details
            'address' => $session->customer_address, // Customer's address from customer_details, encoded as JSON if needed

            'city'=>$session->customer_city ?? null,
            'country'=>$session->customer_country ?? null,
            'zip_code'=>$session->customer_zip_code ?? null,

            'total_amount' => $session->amount_total / 100, // Total price from metadata
            'payment_type' => 'stripe', // Payment type (Stripe in this case)
            'invoice_no' => 'INV-' . strtoupper(uniqid()), // Generate a unique invoice number
            'order_date' => now()->toDateString(),
            'order_month' => now()->format('F'),
            'order_year' => now()->year,
            'status' => 'completed', // Payment status
        ]);

         // Use request data for specific fields
         $this->createOrder($payment->id);

    }

    private function createOrder($paymentId){

         // Retrieve the validated data from the session or request
         $stripeData = session('stripe_data'); // Assuming this is where the order data is stored.
         // Create order records for each course
         foreach ($stripeData['course_id'] as $index => $courseId) {
             Order::create([
                 'payment_id' => $paymentId, // Associate with the created payment record
                 'user_id' => Auth::user()->id, // Assuming user is authenticated
                 'course_id' => $courseId,
                 'instructor_id' => $stripeData['instructor_id'][$index], // Add logic to retrieve instructor ID if needed
                 'course_title' => $stripeData['course_name'][$index],
                 'price' => $stripeData['course_price'][$index],
             ]);
         }

    }
}
