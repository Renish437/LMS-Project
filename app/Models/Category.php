<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function subcategories(){
        return $this->hasMany(SubCategory::class,'category_id','id');
    }
    public function courses(){
        return $this->hasMany(Course::class,'category_id','id');
    }

}
