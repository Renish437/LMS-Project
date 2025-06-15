<?php 

namespace App\Services;

use App\Models\User;
use App\Repositories\CourseRepository;

class CourseService{

    protected $courseRespository;

    public function __construct(CourseRepository $courseRespository)
    {
        $this->courseRespository = $courseRespository;
        
    }
    public function saveCourse(array $data, $image = null, $id = null){
   
     return $this->courseRespository->saveCourse($data,$image,$id);
    }
    public function saveCourseGoals(array $data, $id){

        return $this->courseRespository->saveCourseGoals($data,$id);
    }

}