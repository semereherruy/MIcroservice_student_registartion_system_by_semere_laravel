<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Main home page
})->name('index'); // Naming the route as 'index'

Route::get('/student-registration', function () {
    return redirect()->to('http://127.0.0.1:8000/student-registration');  // Redirect to Student Registration
})->name('student.registration');

Route::get('/course-registration', function () {
    return redirect()->to('http://127.0.0.1:8002/course-registration'); // Course registration page
})->name('course.registration'); // Define the course registration route

Route::get('/login', function () {
    return view('login'); // Login page
})->name('login');