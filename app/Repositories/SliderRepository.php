<?php 
namespace App\Repositories;

use App\Models\Category;
use App\Models\Slider;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;



class SliderRepository
{
    use FileUploadTrait;
  
 public function saveSlider($data,$image,$id = null){

if($id){
    $slider = Slider::findOrFail($id);
}else{
    $slider = new Slider();
}

if($image){
    $slider->image = $this->uploadFile($image,'slider',$slider->image);
}

$slider->title = $data['title'];
$slider->short_description = $data['short_description'];
$slider->video_url = $data['video_url'];
$slider->save();
return $slider;
 }
}