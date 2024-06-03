<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Log;


class CourseController extends Controller
{
    /**
     * Store a newly created course in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'course_name' => 'required|string|max:255',
            'num_hours' => 'required|integer|min:1',
            'description' => 'required|string',
            // 'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Create the course
        $course = new Course();
        $course->course_name = $validatedData['course_name'];
        $course->num_hours = $validatedData['num_hours'];
        $course->description = $validatedData['description'];
    
        // Save the uploaded photo
        // if ($request->hasFile('photo')) {
        //     $image = $request->file('photo');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/photos', $filename);
        //     $course->img = $filename;
        // }
    
        $course->save();
    
     
        // Redirect or return a response as needed
        // return redirect()->route('staff.dashboard')->with('success', 'Course created successfully!');
        return redirect()->back()->with('success', 'Course created successful!');
    }

    //display data
    public function index()
    {
        $courses = Course::all();
        return view('staff.dashboard', ['courses' => $courses]);
    }

    // Display data in course management page
    public function indexForUsers()
    {
        $courses = Course::all();
        return view('/course-management', ['courses' => $courses]);
    }
    

    //update data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'course_name' => 'required|string|max:255',
            'num_hours' => 'required|integer|min:1',
            'description' => 'required|string',
        ]);

        // Find the user and update their details
        $course = course::findOrFail($id);
        $course->course_name = $validatedData['course_name'];
        $course->num_hours = $validatedData['num_hours'];
        $course->description = $validatedData['description'];
        $course->save();

        return redirect()->back()->with('success', 'course updated successfully!');
    }

    public function destroy(Course $course)
{
    $course->delete();
    
    return redirect()->back()->with('success', 'Course deleted successfully!');
}
}
