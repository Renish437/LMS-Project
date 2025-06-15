<?php 
namespace App\Repositories;

use App\Models\Course;
use App\Models\CourseGoal;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;



class CourseRepository
{
    use FileUploadTrait;
  
 public function saveCourse($data,$image,$id = null){

if($id){
    $course = Course::findOrFail($id);
}else{
    $course = new Course();
}


   if ($image) {
    $data['course_image'] = $this->uploadFile($image, 'course', $course->course_image);
}


// $course->name = $data['name'];
// $course->slug = $data['slug'];
// $course->save();

$course->fill($data);
$course->save();
return $course;
 }
public function saveCourseGoals(array $goals, $courseId)
{
     CourseGoal::where('course_id', $courseId)->delete();

    foreach ($goals as $goal) {
        $course_goal = new CourseGoal();
        $course_goal->course_id = $courseId;
        $course_goal->goal_name = $goal;
        $course_goal->save();
    }

    return true;
}

}