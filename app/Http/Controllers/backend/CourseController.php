<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use App\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $courseService;
    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }
    public function index()
    {
        //
        $instructor_id = Auth::user()->id;

        $all_courses = Course::where('instructor_id', $instructor_id)->with('category', 'course_goals','subcategory')->where('status', '1')->latest()->get();

        return view('backend.instructor.course.index', compact('all_courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $all_categories = Category::latest()->get();

        return view('backend.instructor.course.create', compact('all_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        //
        $validatedData = $request->validated();
        $courseGoals = $validatedData['course_goals'] ?? [];
        unset($validatedData['course_goals']);

        $course = $this->courseService->saveCourse($validatedData, $request->file('course_image'));

        // Manage course goals
        if (!empty($courseGoals)) {
            $this->courseService->saveCourseGoals($courseGoals, $course->id);
        }

        return redirect()->route('instructor.course.index')->with('success', 'Course created successfully');
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
        $course = Course::findOrFail($id);
        $all_categories = Category::latest()->get();
        $course_goals = $course->course_goals()->get();
        return view('backend.instructor.course.edit', compact('course', 'all_categories', 'course_goals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, string $id)
    {
        //
        $validatedData = $request->validated();
        $courseGoals = $validatedData['course_goals'] ?? [];
        unset($validatedData['course_goals']);

        $course = $this->courseService->saveCourse($validatedData, $request->file('course_image'), $id);

        // Manage course goals
        if (!empty($courseGoals)) {
            $this->courseService->saveCourseGoals($courseGoals, $course->id);
        }

        return redirect()->route('instructor.course.index')->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $course = Course::findOrFail($id);
        if ($course->course_image) {
            $imgPath = public_path(parse_url($course->course_image, PHP_URL_PATH));
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }
        $course->delete();
        return redirect()->route('instructor.course.index')->with('success', 'Course deleted successfully');
    }
}
