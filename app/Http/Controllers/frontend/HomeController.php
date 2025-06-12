<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliders = Slider::latest()->get();
        return view('frontend.pages.home.index',compact('sliders'));
    }
}
