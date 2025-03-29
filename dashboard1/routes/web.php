<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ThemeController;



//Auth
Route::get('register', [UserAuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [UserAuthController::class, 'register'])->name('register');

Route::get('login', [UserAuthController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [UserAuthController::class, 'login'])->name('login');

Route::post('logout', [UserAuthController::class, 'logout'])->name('logout');

//dashboard 
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('welcome');
});
//course crud
Route::resource('course',CourseController :: class ); 
//student crud 
Route::resource('student', StudentController::class);
// settings 
Route::get('settings', function () {
    return view('settingsfront');
});
// fonts
Route::post('/update-font', [FontController::class, 'updateFont'])->name('update.font');
// insctructor 
Route::get('/instructor/edit', [InstructorController::class, 'edit'])->name('instructor.edit');
Route::put('/instructor/update', [InstructorController::class, 'update'])->name('instructor.update');
// theme 
Route::post('/update-theme', [ThemeController::class, 'update'])->name('update.theme');
// theming
Route::post('/theme/update', [ThemeController::class, 'update'])->name('theme.update');
// reset the theme
Route::post('/reset-theme', [ThemeController::class, 'reset'])->name('reset.theme');
