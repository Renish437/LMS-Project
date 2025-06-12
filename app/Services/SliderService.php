<?php 

namespace App\Services;

use App\Models\User;
use App\Repositories\CategoryRepository;
use App\Repositories\SliderRepository;

class SliderService{

    protected $sliderRespository;

    public function __construct(SliderRepository $sliderRespository)
    {
        $this->sliderRespository = $sliderRespository;
        
    }
    public function saveSlider(array $data, $image = null, $id = null){
    
     return $this->sliderRespository->saveSlider($data,$image,$id);
    }

}