<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAsprakController;
use App\Http\Controllers\AbsensiPraktikanController;

Route::get('/KelasPraktikumAsprak', function () {
    return view('KelasPraktikumAsprak');
});

Route::get('/DashboardAsprak', [DashboardAsprakController::class, 'index'])->name('DashboardAsprak');

Route::get('/AbsensiPraktikan', [AbsensiPraktikanController::class, 'index'])->name('AbsensiPraktikan');

Route::get('/login', function () {
    return view('login');
});

Route::get('/navbar', function () {
    return view('navbar');
});
