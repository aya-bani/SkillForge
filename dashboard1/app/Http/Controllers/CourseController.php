<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $courses = Course::paginate(8);
        return view('course.index',[
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'difficulty' => 'required|string|in:beginner,intermediate,advanced',
            'image' => 'required|string|max:255',
            'video' => 'required|string|max:255',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category, // Corrected spelling here
            'duration' => $request->duration,
            'difficulty' => $request->difficulty,
            'image' => $request->image,
            'video' => $request->video,
        ]);

        return redirect('/course')->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show' , compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    public function edit(Course $course)
    {
        // $course = Course::findOrFail($id);

        return view('course.edit', compact('course'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'duration' => 'required|integer|min:1',
                'difficulty' => 'required|string|in:beginner,intermediate,advanced',
                'image' => 'required|string|max:255',
                'video' => 'required|string|max:255'
            ]);
    
            $course->update([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'duration' => $request->duration,
                'difficulty' => $request->difficulty,
                'image' => $request->image,
                'video' => $request->video
            ]);
    
            return redirect('/course')->with('success', 'Course Updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course ->delete();
        return redirect('/course')->with('success', 'Course deleted successfully');
    }
}
