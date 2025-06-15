<?php 
namespace App\Repositories;

use App\Models\Course;
use App\Models\CourseGoal;
use App\Models\CourseLecture;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;



class LectureRepository
{
    use FileUploadTrait;
  
 public function saveLecture($data,$id = null){

if($id){
    $course = CourseLecture::findOrFail($id);
}else{
    $course = new CourseLecture();
}


 


// $course->name = $data['name'];
// $course->slug = $data['slug'];
// $course->save();

$course->fill($data);
$course->save();
return $course;
 }


}