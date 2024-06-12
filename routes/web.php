<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ScoreCardController;
use App\Models\ScoreCard;

//this route will open 1st
Route::get('/', function () {
    return view('login');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/cms', [UserController::class, 'cms'])->name('cms');
    Route::get('/course-management', [UserController::class, 'courseManagement'])->name('course.management');
    Route::get('/applicants', [UserController::class, 'applicants'])->name('applicants');
    Route::get('/users-management', [UserController::class, 'usersManagement'])->name('users.management');
});
Route::middleware('auth')->group(function () {
    Route::get('/cms/home', [UserController::class, 'cmshome'])->name('cms.home');
    Route::get('/cms/programs', [UserController::class, 'cmsprograms'])->name('cms.programs');
    Route::get('/cms/update', [UserController::class, 'cmsupdates'])->name('cms.update');
    // Route::get('/cms/score_card', [UserController::class, 'scorecards'])->name('cms.score_card');
    Route::get('/cms/score_card', [ScoreCardController::class, 'showScoreCard'])->name('cms.score_card');

    Route::get('/cms/partners', [UserController::class, 'partners'])->name('cms.partners');
});


//log in route to open
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

//log out
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// add new user route
Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::post('/register', [UserController::class, 'store'])->name('register'); 

// display all users from tble user
Route::get('/user-management', [UserController::class, 'index'])->name('users.management');

// Update user data
// Route to update an existing user
Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
// Route::post('/pages/update/{id}', [UserController::class, 'update'])->name('users.update');

// delete user data
Route::delete('/user-management/{id}', [UserController::class, 'destroy'])->name('users.destroy');
// Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// add course data
Route::post('/courses', [CourseController::class, 'store'])->name('courses');

// display all data  from tble cousre
Route::get('/staff/dashboard', [CourseController::class, 'index'])->name('staff.dashboard');

//update course
Route::post('/courses/{id}/update', [CourseController::class, 'update'])->name('courses.update');
// Route::post('/staff/update/{id}', [CourseController::class, 'update'])->name('update');

// delete course
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

// display data to view/course_management.blade.php
Route::get('/course-management', [CourseController::class, 'indexForUsers'])->name('course.management');

Route::get('/view-website', function () {
    return view('view-website'); // Ensure you have a 'view-website.blade.php' file in your resources/views directory
})->name('view.website');


Route::post('/update/{id}', [ScoreCardController::class, 'update'])->name('update');

