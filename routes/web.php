<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('auth.index');
    Route::post('login', 'login')->name('auth.login');
    Route::get('register', 'create')->name('auth.create');
    Route::post('/', 'register')->name('auth.register');
    Route::get('/logout', 'logout')->name('auth.logout');
  });

Route::controller(StudentController::class)->group(function () {
    Route::get('students', 'index')->name('students.index');
    Route::get('students/create', 'create')->name('students.create');
    Route::post('students', 'store')->name('students.store');
    Route::get('students/{student}/edit', 'edit')->name('students.edit');
    Route::put('students/{student}', 'update')->name('students.update');
    Route::delete('students/{student}', 'destroy')->name('students.destroy');
});
