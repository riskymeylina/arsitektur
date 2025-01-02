<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UsersController;


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'check'])->name('login.check');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/', [ShowController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/project', [ShowController::class, 'project']);
    Route::resource('images', ImageController::class);
    Route::get('/{project}/project-details', [ShowController::class, 'detail']);
    Route::get('/portofolio', function () {
        return view('portofolio');
    });

    Route::get('/contact', function () {
        return view('contact');
    });
});



Route::get('/about', function () {
    return view('about');
});
