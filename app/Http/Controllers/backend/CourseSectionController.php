<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseSection;
use Illuminate\Http\Request;

class CourseSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.instructor.course-section.index');
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
    public function store(Request $request)
    {
        //
        $course = Course::findOrFail($request->course_id);
        CourseSection::create([
            'course_id' => $course->id,
            'section_title' => $request->section_title
        ]);

        return redirect()->back()->with('success', 'Course Section created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $course = Course::findOrFail($id);
        $course_wise_lecture = CourseSection::with('lecture')->where('course_id', $course->id)->get();
        return view('backend.instructor.course-section.index', compact('course', 'course_wise_lecture'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        CourseSection::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Course Section deleted successfully');
    }
}
