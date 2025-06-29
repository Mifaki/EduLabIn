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
    Route::get('/data-class', [AdminController::class, 'dataClass'])->name('dataClass');
    Route::get('/assistant-candidate', [AdminController::class, 'assistantCandidate'])->name('assistantCandidate');
    Route::get('/assistant-data', [AdminController::class, 'assistantData'])->name('assistantData');
    Route::get('/announcement', [AdminController::class, 'announcement'])->name('announcement');
    Route::prefix('professor')->name('professor.')->group(function () {
        Route::get('/data', [AdminController::class, 'professor'])->name('data');
        Route::get('/create', [AdminController::class, 'professorCreate'])->name('create');
    });

});

Route::get('/navbar', function () {
    return view('navbar');
});
