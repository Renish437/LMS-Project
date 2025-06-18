<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\InfoBox;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliders = Slider::latest()->get();
        $info_boxes = InfoBox::latest()->get();

        $categories = Category::inRandomOrder()->get();
        $all_categories = Category::with('courses','courses.user')->get();
      
        // dd($course_categories);
        

        
        return view('frontend.pages.home.index',compact('sliders','info_boxes','categories','all_categories'));
    }
}
