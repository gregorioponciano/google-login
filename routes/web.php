<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleController;

Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::get('/register', [AuthController::class,'showRegister']);

Route::post('/login', [AuthController::class,'login']);
Route::post('/register', [AuthController::class,'register']);
Route::post('/logout', [AuthController::class,'logout']);

Route::get('auth/google', [GoogleController::class,'redirect']);
Route::get('auth/google/callback', [GoogleController::class,'callback']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
