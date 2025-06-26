<?php

namespace App\Repositories;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;

class CartRepository
{
    /**
     * Add a course to the cart (for guest or logged-in user)
     */
    public function createCart($course_id, $request)
    {
        try {
            $userId = Auth::check() ? Auth::id() : null;
            $guestToken = $request->cookie('guest_token') ?? Str::uuid();

            if (!$request->cookie('guest_token')) {
                Cookie::queue('guest_token', $guestToken, 60 * 24 * 30); // 30 days
            }

            // Check if course already exists
            if ($userId) {
                $existingCart = Cart::where('course_id', $course_id)
                    ->where('user_id', $userId)
                    ->first();
            } else {
                $existingCart = Cart::where('course_id', $course_id)
                    ->where('guest_token', $guestToken)
                    ->first();
            }

            if ($existingCart) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Course already exists in cart'
                ], 400);
            }

            Cart::create([
                'user_id' => $userId,
                'guest_token' => $guestToken,
                'course_id' => $course_id,
                'quantity' => $request->quantity
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Course added to cart successfully'
            ], 200);

        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! ' . $error->getMessage()
            ], 500);
        }
    }

    /**
     * View the cart contents for current user or guest (no `when`)
     */
    public function viewCart($request)
    {
        try {
            $userId = Auth::check() ? Auth::id() : null;
            $guestToken = $request->cookie('guest_token') ?? Str::uuid();

            if ($userId) {
                $cart = Cart::with('course', 'course.user')
                    ->where('user_id', $userId)
                    ->get();
            } else {
                $cart = Cart::with('course', 'course.user')
                    ->where('guest_token', $guestToken)
                    ->get();
            }

            return $cart;

        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! ' . $error->getMessage()
            ], 500);
        }
    }
}
