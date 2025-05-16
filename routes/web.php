<?php

use App\Http\Controllers\DashboardAsprakController;
use App\Http\Controllers\AbsensiPraktikanController;

Route::get('/KelasPraktikumAsprak', function () {
    return view('KelasPraktikumAsprak');
});

Route::get('/DashboardAsprak', [DashboardAsprakController::class, 'index'])->name('DashboardAsprak');

Route::get('/AbsensiPraktikan', [AbsensiPraktikanController::class, 'index'])->name('AbsensiPraktikan');
