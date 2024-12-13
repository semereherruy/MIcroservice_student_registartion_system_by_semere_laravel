<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StudentRegister;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('student_register');  // This is your registration form view
    }
    
    public function register(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'registrationId' => 'required|integer',
            'userId' => 'required|integer',
            'courseId' => 'required|integer',
            'registrationDate' => 'required|date',
            'status' => 'required|in:active,cancelled',
        ]);

        // Create a new registration
        // Create a new registration (no need to specify 'registrationId')
        StudentRegistration::create([
            'userId' => $request->input('userId'),
            'courseId' => $request->input('courseId'),
            'registrationDate' => $request->input('registrationDate'),
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Student Registered Successfully!');
    }
}
