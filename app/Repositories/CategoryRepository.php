<?php 
namespace App\Repositories;

use App\Models\Category;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;



class CategoryRepository
{
    use FileUploadTrait;
  
 public function saveCategory($data,$image,$id = null){

if($id){
    $category = Category::findOrFail($id);
}else{
    $category = new Category();
}

if($image){
    $category->image = $this->uploadFile($image,'category',$category->image);
}

$category->name = $data['name'];
$category->slug = $data['slug'];
$category->save();
return $category;
 }
}