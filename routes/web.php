<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/add-course', [StudentController::class, 'addcourse']);

Route::get('/add-student', [StudentController::class, 'addStudent']);
Route::get('/students', [StudentController::class, 'getStudents']);
Route::get('/update-marks', [StudentController::class, 'updateMarks']);
Route::get('/delete-student', [StudentController::class, 'deleteStudent']);
Route::get('/stats', [StudentController::class, 'showStats']);
Route::get('/top-students', [StudentController::class, 'topStudents']);
Route::get('/students-table', [StudentController::class, 'showStudentsTable']);

// Student login
Route::get('/student/login', [App\Http\Controllers\Auth\StudentLoginController::class, 'showLoginForm'])->name('student.login');
Route::post('/student/login', [App\Http\Controllers\Auth\StudentLoginController::class, 'login']);

// Admin login
Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login']);
