<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        //
         $categories = Category::latest()->get();
        return view('backend.admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('backend.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //
        $this->categoryService->saveCategory($request->validated(),$request->file('image'));
        return redirect()->route('admin.category.index')->with('success','Category created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::findOrFail($id);
        return view('backend.admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        //
        $this->categoryService->saveCategory($request->validated(),$request->file('image'),$id);
        return redirect()->route('admin.category.index')->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
       $category= Category::findOrFail($id);
        if($category->image){
            $imgPath = public_path(parse_url($category->image, PHP_URL_PATH));
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }
        $category->delete();
        return redirect()->back()->with('success','Category deleted successfully');
    }
    public function getSubcategories($categoryId){
    $subcategories = SubCategory::where('category_id', $categoryId)->get();
    return response()->json($subcategories);
    }
}
