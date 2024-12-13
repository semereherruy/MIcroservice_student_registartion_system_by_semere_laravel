<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/course-registration', [CourseController::class, 'register'])->name('course.registration');



