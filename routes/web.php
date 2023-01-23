<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // School
    // Route::resource('schools', SchoolController::class)->parameters(['schools' => 'obj'])->names('school');

    // // Employee
    // Route::resource('employees', EmployeeController::class)->parameters(['employees' => 'obj'])->names('employee');

    Route::resource('schools', CrudController::class)->parameters(['schools' => 'obj'])->names('school');
    Route::resource('employees', CrudController::class)->parameters(['employees' => 'obj'])->names('employee');
});

require __DIR__.'/auth.php';
