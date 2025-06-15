<?php 

namespace App\Services;

use App\Models\User;
use App\Repositories\CourseRepository;
use App\Repositories\LectureRepository;

class LectureService{

    protected $lectureRespository;

    public function __construct(LectureRepository $lectureRespository)
    {
        $this->lectureRespository = $lectureRespository;
        
    }
    public function saveLecture(array $data, $id = null){
   
     return $this->lectureRespository->saveLecture($data,$id);
    }
   

}