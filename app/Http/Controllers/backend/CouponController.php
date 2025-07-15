<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyCouponRequest;
use App\Http\Requests\CouponRequest;
use App\Models\Cart;
use App\Models\Coupon;
use App\Services\ApplyCouponService;
use App\Services\CouponService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      protected $couponService;
      protected $applyCouponService;
    public function __construct(CouponService $couponService,ApplyCouponService $applyCouponService)
    {
        $this->couponService = $couponService;
        $this->applyCouponService = $applyCouponService;
    }
    public function index()
    {
        //
        $instructor_id = Auth::user()->id;
        $all_coupon = Coupon::where('instructor_id', $instructor_id)->latest()->get();
        return view('backend.instructor.coupon.index', compact( 'all_coupon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.instructor.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CouponRequest $request)
    {
        //
        $this->couponService->saveCoupon($request->validated());
        return redirect()->route('instructor.coupon.index')->with('success','Coupon created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $coupon = Coupon::findOrFail($id);
        return view('backend.instructor.coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CouponRequest $request, string $id)
    {
        //
         $this->couponService->saveCoupon($request->validated(),$id);
        return redirect()->route('instructor.coupon.index')->with('success','Coupon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return redirect()->route('instructor.coupon.index')->with('success','Coupon deleted successfully');
    }

     public function applyCoupon(ApplyCouponRequest $request)
    {

        // Validate the input
        $validated = $request->validated();

        $couponName = $validated['coupon'];
        $courseIds = $validated['course_id'];
        $instructorIds = $validated['instructor_id'];

        $discounts =  $this->applyCouponService->applyCoupon($couponName, $courseIds, $instructorIds);

        // If no valid coupon found
        if (empty($discounts)) {
            return response()->json([
                'success' => false,
                'message' => 'No valid coupon found for the selected courses.',
            ], 400);
        }

        // Calculate total discount
        $totalDiscount = collect($discounts)->sum('discount');

        // Store total discount in session
        session(['coupon' => $totalDiscount]);


        // Success response
        return response()->json([
            'success' => true,
            'message' => 'Coupon applied successfully!',
            'discounts' => $discounts,
        ]);
    }
       public function applyCheckoutCoupon(ApplyCouponRequest $request)
    {
        // Get validated input
        $validated = $request->validated();
        $couponName = $validated['coupon'];
        $courseIds = $validated['course_id'];
        $instructorIds = $validated['instructor_id'];

        // Get the discounts from your service
        $discounts = $this->applyCouponService->applyCoupon($couponName, $courseIds, $instructorIds);

        // If the coupon is invalid or not applicable
        if (empty($discounts)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid coupon code or not applicable to the items in your cart.',
            ], 422); // Use 422 for a validation-type error
        }

        // Calculate total discount from the service response
        $totalDiscount = collect($discounts)->sum('discount');

        // Get the original cart total before any coupon
        // Replace this with your own logic to get the cart subtotal
        $cartTotal = Cart::totalFloat();

        // Calculate the new total price
        $newTotalPrice = $cartTotal - $totalDiscount;

        // Store coupon details in the session for page reloads
        session()->put('coupon', [
            'name' => $couponName,
            'discount_amount' => $totalDiscount,
        ]);

        // Return a JSON response with all the data the frontend needs
        return response()->json([
            'success'         => true,
            'message'         => 'Coupon applied successfully!',
            'discount_amount' => $totalDiscount,
            'total_price'     => $newTotalPrice,
        ]);
    }

}
