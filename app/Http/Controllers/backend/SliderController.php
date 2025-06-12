<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Services\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $sliderService;

     public function __construct(SliderService $sliderService){
        $this->sliderService=$sliderService;
     }
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('backend.admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('backend.admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        //
        $this->sliderService->saveSlider($request->validated(),$request->file('image'));
        return redirect()->route('admin.slider.index')->with('success','Slider created successfully');

        
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
        $slider = Slider::findOrFail($id);
        return view('backend.admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, string $id)
    {
        //
         $this->sliderService->saveSlider($request->validated(),$request->file('image'),$id);
        return redirect()->route('admin.slider.index')->with('success','Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         $slider= Slider::findOrFail($id);
        if($slider->image){
            $imgPath = public_path(parse_url($slider->image, PHP_URL_PATH));
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('success','Slider deleted successfully');
    }
}
