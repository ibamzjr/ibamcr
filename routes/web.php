<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Menentukan halaman utama ke user home
Route::get('/', [HomeController::class, 'userHome'])->name('home');

// Rute untuk otentikasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk user
Route::prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'userHome'])->name('home');
    Route::get('products', [UserController::class, 'products'])->name('products');
    Route::get('categories', [UserController::class, 'categories'])->name('categories');
});

// Rute untuk admin
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminController::class, 'login'])->name('login.post');

    Route::middleware('auth:admin')->group(function() {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // Rute CRUD untuk kategori
        Route::resource('categories', CategoryController::class)->except(['show']);

        // Rute CRUD untuk produk
        Route::resource('products', ProductController::class)->except(['show']);
    });
});
