<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseDetailController extends BaseController
{
    //
    public function courseDetails($slug=null){
        if($slug){
            $course = \App\Models\Course::where('course_name_slug',$slug)->first();
          
        }else{
            $course = null;
        }
        return view('frontend.pages.course_details.index',compact('course'));
    }
}
