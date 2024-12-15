<?php

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';

Route::get('/', function () {
    return view('home');
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/investors', [HomeController::class, 'investors'])->name('investors');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');


Route::get('/academic-graduate', [AcademicController::class, 'academic_graduate'])->name('academic.graduate');
Route::get('/academic-undergraduate', [AcademicController::class, 'academic_undergraduate'])->name('academic.undergraduate');
Route::get('/admission', [AcademicController::class, 'admission'])->name('admission');

Route::get('/news-events', [NewsEventController::class, 'index'])->name('news-events.index');


Route::get('/activity', [ActivityController::class, 'index'])->name('activity.index');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
Route::get('/courses/anm', [CoursesController::class, 'anm'])->name('courses.anm');
Route::get('/courses/gnm', [CoursesController::class, 'gnm'])->name('courses.gnm');
Route::get('/courses/d-pharma', [CoursesController::class, 'd_pharmacy'])->name('courses.d-pharma');
Route::get('/courses/b-pharma', [CoursesController::class, 'b_pharmacy'])->name('courses.b-pharma');
Route::get('/courses/nurshing', [CoursesController::class, 'nurshing'])->name('courses.nurshing');

Route::resource('/admission-registration', RegistrationController::class);
