<?php 

/**
 * Global Helpers
 */

use App\Models\Category;
use Illuminate\Support\Facades\Route;

if(!function_exists('getCategories')){
    function getCategories(){
        return Category::with('subcategories')->orderBy('name','asc')->get();
    }
}


/**
 * Get Active Route Name
 */
if(!function_exists('setActive')){
    function setActive(array $routes): ?String
    {
        foreach($routes as $route){
            if(Route::is($route)){
                return 'mm-active';
            }
        }
        return null;
    }
}
/*End Get Active Route Name*/ 
