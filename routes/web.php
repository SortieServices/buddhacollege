<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';

Route::get('/', function () {
    return view('home');
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/academic', [AcademicController::class, 'index'])->name('academic.index');
Route::get('/activity', [ActivityController::class, 'index'])->name('activity.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
Route::get('/courses/anm', [CoursesController::class, 'anm'])->name('courses.anm');
Route::get('/courses/gnm', [CoursesController::class, 'gnm'])->name('courses.gnm');
Route::get('/courses/pharmacy', [CoursesController::class, 'pharmacy'])->name('courses.pharmacy');
Route::get('/courses/nurshing', [CoursesController::class, 'nurshing'])->name('courses.nurshing');
