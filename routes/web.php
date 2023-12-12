<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\DashboardController;

// Home Route
Route::view('/', 'home.index')->name('home');

// Auth Routes
Route::group(['middleware' => 'web'], function () {
   Route::get('/login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
   Route::post('/login', [Auth\LoginController::class, 'login']);
   Route::get('/register', [Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
   Route::post('/register', [Auth\RegisterController::class, 'register']);
   Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');
});

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
