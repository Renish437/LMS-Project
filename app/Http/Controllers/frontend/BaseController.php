<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    //
    public function __construct(Request $request)
    {
         $categories = Category::inRandomOrder()->get();
        $all_categories = Category::with('courses','courses.user')->get();

        View::share(['categories'=>$categories,'all_categories'=>$all_categories]);

    }
}
