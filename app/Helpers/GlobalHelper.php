<?php 

/**
 * Global Helpers
 */

use App\Models\Category;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

if(!function_exists('getCategories')){
    function getCategories(){
        return Category::with('subcategories')->orderBy('name','asc')->get();
    }
}

if(!function_exists('isApprovedUser')){
    function isApprovedUser(){
        
        return User::where('role','instructor')
        ->where('status','1')
        ->where('id',Auth::user()->id)
        ->first();
    }
}

/**
 * Get Active Route Name
 */
if(!function_exists('setActive')){
    function setActive(array $routes): ?String
    {
        foreach($routes as $route){
            if(Route::is($route)){
                return 'mm-active';
            }
        }
        return null;
    }
}
/*End Get Active Route Name*/ 

// Global Auth

/*  wishlist data */
if (!function_exists('getWishlist')) {
    function getWishlist()
    {

        // Check if user is authenticated
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            return Wishlist::where('user_id', $user_id)->with('course', 'course.user')->get();
        }
        // If user is not logged in, return an empty collection or handle as needed
        return collect();
    }
}

if(!function_exists('getAllCategories')) {
    function getAllCategories()
    {
        return Category::with('courses','courses.user')->orderBy('name','asc')->get();
    }
}


//Global Auth Check

function auth_check_json()
{
    if (!Auth::check()) {
        return response()->json([
            'status' => 'error',
            'message' => 'You must be logged in to perform this action.',
        ], 401); // 401 Unauthorized
    }
    return null;
}