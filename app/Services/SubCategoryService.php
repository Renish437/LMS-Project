<?php 

namespace App\Services;

use App\Models\User;
use App\Repositories\CategoryRepository;
use App\Repositories\SubCategoryRepository;

class SubCategoryService{

    protected $subCategoryRepository;

    public function __construct(SubCategoryRepository $subCategoryRepository)
    {
        $this->subCategoryRepository = $subCategoryRepository;
        
    }
    public function saveSubCategory(array $data, $id = null){
    
     return $this->subCategoryRepository->saveSubCategory($data,$id);
    }

}