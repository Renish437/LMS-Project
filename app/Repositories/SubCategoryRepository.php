<?php 
namespace App\Repositories;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;



class SubCategoryRepository
{
    // use FileUploadTrait;
  
 public function saveSubCategory($data,$id = null){

if($id){
    $subcategory = SubCategory::findOrFail($id);
}else{
    $subcategory = new SubCategory();
}



$subcategory->name = $data['name'];
$subcategory->slug = $data['slug'];
$subcategory->category_id = $data['category_id'];
$subcategory->save();
return $subcategory;
 }
}