<?php 

namespace App\Services;

use App\Models\User;
use App\Repositories\CategoryRepository;

class CategoryService{

    protected $categoryRespository;

    public function __construct(CategoryRepository $categoryRespository)
    {
        $this->categoryRespository = $categoryRespository;
        
    }
    public function saveCategory(array $data, $image = null, $id = null){
    
     return $this->categoryRespository->saveCategory($data,$image,$id);
    }

}