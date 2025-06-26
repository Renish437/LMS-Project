<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\CartService;
use App\Http\Controllers\frontend\BaseController;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    protected $cartService;
    public function __construct(CartService $cartService){
     $this->cartService = $cartService;
    }

        public function index()
    {
        // $all_categories = Category::with('courses','courses.user')->get();
        
        return view('frontend.pages.cart.index');
    }
    
    public function fetchCart(Request $request){
        //Handle the ajax request to get the cart data
        $cartItems = $this->cartService->viewCart($request);

        //Total Amount (discount and selling price)
        $subTotal = $cartItems->sum(function ($item) {
            $price = $item->course->discount_price ?? $item->course->selling_price;
            return $price * $item->quantity;
        });
        $html = view('frontend.pages.cart.partials.main',compact('cartItems','subTotal'))->render();
        return response()->json([
            'status' => 'success',
            'html' => $html
        ]);
    }
    public function addToCart(Request $request){
       
      $validated_data = $request->validate([
          'course_id' => 'required|exists:courses,id',
          'quantity' => 'required|integer|min:1',

      ]);
     $course_id= $validated_data['course_id'];

      return $this->cartService->createCart($course_id,$request);
    }

    public function cartAll(Request $request){
    
    $cart = $this->cartService->viewCart($request);
      $subTotal = $cart->sum(function ($item) {
            $price = $item->course->discount_price ?? $item->course->selling_price;
            return $price * $item->quantity;
        });
       $html = view('frontend.pages.home.partials.cart',compact('cart','subTotal'))->render();
        return response()->json([
            'status' => 'success',
           
            'html' => $html
        ]);
    }

    public function removeCart(Request $request){
      $cartItem = Cart::find($request->id);
     if(!$cartItem){
         return response()->json([
             'status' => 'error',
             'message' => 'Item not found'
         ]);
     }
      $cartItem->delete();
     
       return response()->json([
           'status' => 'success',
           'success' => "Item removed from cart",
       ]);
    }
}
