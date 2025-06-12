<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\SubCategoryService;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
     protected $subCategoryService;
    public function __construct(SubCategoryService $subCategoryService)
    {
        $this->subCategoryService = $subCategoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subcategories = SubCategory::latest()->orderBy('name','asc')->with('category')->get();
        return view('backend.admin.subcategory.index',compact('subcategories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::latest()->orderBy('name','asc')->get();
        return view('backend.admin.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryRequest $request)
    {
        //
        $this->subCategoryService->saveSubCategory($request->validated());
        return redirect()->route('admin.subcategory.index')->with('success','SubCategory created successfully');
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
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::latest()->orderBy('name','asc')->get();
        return view('backend.admin.subcategory.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryRequest $request, string $id)
    {
        //
        $this->subCategoryService->saveSubCategory($request->validated(),$id);
        return redirect()->route('admin.subcategory.index')->with('success','SubCategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        SubCategory::findOrFail($id)->delete();
        return redirect()->back()->with('success','SubCategory deleted successfully');
    }
}
