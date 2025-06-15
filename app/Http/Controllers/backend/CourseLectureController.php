<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LectureRequest;
use App\Models\CourseLecture;
use App\Services\LectureService;
use Illuminate\Http\Request;

class CourseLectureController extends Controller
{
    protected $lectureService;

    public function __construct(LectureService $lectureService)
    {
        $this->lectureService = $lectureService;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LectureRequest $request)
    {
        //
        $validatedData = $request->validated();
        $this->lectureService->saveLecture($validatedData);
        return redirect()->back()->with('success', 'Course Lecture created successfully');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LectureRequest $request, string $id)
    {
        //
         $validatedData = $request->validated();
        $this->lectureService->saveLecture($validatedData,$id);
        return redirect()->back()->with('success', 'Course Lecture updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $course_lecture = CourseLecture::findOrFail($id);
        $course_lecture->delete();
        return redirect()->back()->with('success', 'Course Lecture deleted successfully');
    }
}
