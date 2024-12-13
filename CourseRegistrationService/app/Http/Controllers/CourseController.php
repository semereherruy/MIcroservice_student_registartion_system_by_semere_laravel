<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'student_id' => 'required|integer',
            'course_name' => 'required|string|max:255',
            'credit' => 'required|integer',
        ]);

        // Create a new course registration
        $course = Course::create($validatedData);

        // Return a success response (you can modify this as needed)
        return response()->json(['message' => 'Course registered successfully!', 'course' => $course]);
    }
}
