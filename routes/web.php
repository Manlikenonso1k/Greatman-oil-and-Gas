<?php
/**
 * LARAVEL ROUTES
 * Web Routes Configuration
 * 
 * File Location: routes/web.php
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lpg-trust', [HomeController::class, 'lpgTrust'])->name('lpg-trust');
Route::get('/locator', [HomeController::class, 'locator'])->name('locator');
Route::get('/order', [HomeController::class, 'order'])->name('order');

// Auth Routes
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// API Routes for Price Data
Route::get('/api/prices', [PriceController::class, 'index']);
Route::get('/api/prices/{fuelType}', [PriceController::class, 'show']);
