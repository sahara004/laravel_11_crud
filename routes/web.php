<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;  
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Product Routes
Route::resource('products', ProductController::class);

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Dashboard Route (Protected by Auth)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

