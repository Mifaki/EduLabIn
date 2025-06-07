<?php

use App\Http\Controllers\AbsensiPraktikanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardAsprakController;
use Illuminate\Support\Facades\Route;

Route::get('/KelasPraktikumAsprak', function () {
    return view('KelasPraktikumAsprak');
});

Route::get('/DashboardAsprak', [DashboardAsprakController::class, 'index'])->name('DashboardAsprak');

Route::get('/AbsensiPraktikan', [AbsensiPraktikanController::class, 'index'])->name('AbsensiPraktikan');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/class', [AdminController::class, 'class'])->name('class');
});

Route::get('/navbar', function () {
    return view('navbar');
});
