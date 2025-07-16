<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $all_courses = Course::latest()->with('user', 'category')->get();
        return view('backend.admin.course.index', compact('all_courses'));
    }
   public function updateStatus(Request $request)
{
    $course = Course::find($request->course_id);

    if (!$course) {
        return response()->json([
            'success' => false,
            'message' => 'Course not found.'
        ], 404);
    }

    $course->status = $request->status;
    $course->save();

    return response()->json([
        'success' => true,
        'message' => 'Course status updated successfully.'
    ]);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $course = Course::where('id', $id)->with('user', 'category')->first();
        return view('backend.admin.course.show', compact('course'));
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
    }
}
