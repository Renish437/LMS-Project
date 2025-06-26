<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    //
  
    public function index(Request $request){

        $guestToken = $request->cookie('guest_token') ?? Str::uuid();
        $carts =Cart::with('course')->where('guest_token', $guestToken)
        ->orWhere('user_id', Auth::id())->get();

        // Calculate total price
        $total = $carts->sum(function ($item) {
            $price = $item->course->discount_price ?? $item->course->selling_price;
            return $price * $item->quantity;
        });
        $user = Auth::user();
        return view('frontend.pages.checkout.index',compact('carts','total','user'));
    }
    public function checkout(Request $request){
        dd($request->all());
    }
}
