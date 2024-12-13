<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/student-registration', function () {
    return view('student-registration'); // Blade view for the form
});

Route::post('/register', [RegistrationController::class, 'register'])->name('student.register');


// routes/web.php 
Route::get('/register', [StudentRegistrationController::class, 'showForm'])->name('student.register');

// The POST route for handling registration
Route::post('/register', [StudentRegistrationController::class, 'register'])->name('student.register.submit');
