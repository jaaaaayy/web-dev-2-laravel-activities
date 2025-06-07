<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/', [StudentController::class, 'store'])->name('students.store');
Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/{student}', [StudentController::class, 'update'])->name('students.update');   
Route::delete('/{student}', [StudentController::class, 'destroy'])->name('students.destroy');