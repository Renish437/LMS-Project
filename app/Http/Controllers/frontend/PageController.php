<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseLecture;
use App\Models\CourseSection;
use App\Models\InfoBox;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends BaseController
{
    //
    public function index(){
        $sliders = Slider::latest()->get();
        $info_boxes = InfoBox::latest()->get();

        // $categories = Category::inRandomOrder()->get();
        // $all_categories = Category::with('courses','courses.user')->get();
      
        // dd($course_categories);
        
     
        
        return view('frontend.index',compact('sliders','info_boxes'));
    }
    public function courseDetails($slug){
      
        $course = \App\Models\Course::where('course_name_slug',$slug)->with('category','subcategory','user:id,name,email,bio,created_at,updated_at,photo','course_goals')->first();
        $total_no_lecture = CourseLecture::where('course_id', $course->id)->count();
        $course_content = CourseSection::where('course_id', $course->id)->with('lecture')->get();

        

        // Get the authenticated user
        $userId = Auth::id();
        $similar_courses = \App\Models\Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->with('user:id,name,email,bio,created_at')->get();
        $related_courses = \App\Models\Course::where('subcategory_id', $course->subcategory_id)->where('id', '!=', $course->id)->get();
        $total_mins = CourseLecture::where('course_id', $course->id)->sum('video_duration');
        $hours = floor($total_mins/60);
        
        $minutes = round($total_mins%60);
        $seconds = round(($total_mins - floor($total_mins))*60);
        $total_lecture_duration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
        $total_hours = ceil($total_mins/60);
      



        return view('frontend.pages.course_details.index',compact('course','course_content','total_no_lecture','similar_courses','related_courses','total_lecture_duration','total_hours'));
    }
}
