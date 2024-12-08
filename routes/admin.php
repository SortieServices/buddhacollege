<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\location\CityController;
use App\Http\Controllers\Admin\NewsEventController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\ResetPassword;

/*
|--------------------------------------------------------------------------
| Custome Auth Routes
|--------------------------------------------------------------------------
|
*/

// helper class generating all routes required for user authentication
// (authentication, registration and password resetting)
// Auth::routes(['verify' => true, 'register' => false]);


Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => 'web'], function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class,'login'])->name('login.post');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
        Route::post('/password/confirm', [ConfirmPasswordController::class, 'confirm']);
        Route::post('/password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
        Route::get('/password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
        Route::post('/password/reset', [ForgotPasswordController::class,'reset'])->name('password.update');
        Route::get('/password/password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
        Route::get('/password/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/password/register', [RegisterController::class, 'register']);
    });
});



Route::middleware('auth','web')->prefix('admin')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/cities', CityController::class);
    Route::get('cities/{state_id}', [CityController::class, 'getCity'])->name('cities.state');

    Route::resource('users', UserController::class);
    Route::get('/users/{user}/change-status', [UserController::class, 'changeStatus'])->name('users.change.status');
    Route::get('/profile/{user}', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/security/{user}', [UserController::class, 'changePassword'])->name('users.security');
    Route::get('/notifications/{user}', [UserController::class, 'notifications'])->name('users.notification');

    Route::resource('/enquiry', EnquiryController::class);
    Route::resource('/registration', RegistrationController::class);

    Route::resource('/banners', BannerController::class);
    Route::resource('/newsevents', NewsEventController::class);
    Route::resource('/notifications', NotificationController::class);

});
