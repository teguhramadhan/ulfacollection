<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminUsersController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    // Jika user terautentikasi, redirect sesuai role
    if (auth()->check()) {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('customer.home');
    }
    // Jika tamu, tampilkan halaman customer/home
    return view('customer.home');
})->name('home');

// Auth routes (from Breeze)
require __DIR__.'/auth.php';

// Protected routes
Route::middleware('auth')->group(function () {
    // Common routes untuk semua user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Customer routes
    Route::middleware(['role:customer'])->group(function () {
        Route::get('/customer/home', function () {
            return view('customer.home');
        })->name('customer.home');
        
        Route::get('/customer/profile', function () {
            return view('customer.profile');
        })->name('customer.profile');
    });
    
    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        
        Route::get('/admin/users', function () {
            return view('admin.users');
        })->name('admin.users');

        Route::get('/admin/products', function () {
            return view('admin.products');
        })->name('admin.products');
    });

    // Route Admin Product Management
    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('products', AdminProductController::class);
    });

    // Route Admin Users Management
    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', AdminUsersController::class);
    });
});

