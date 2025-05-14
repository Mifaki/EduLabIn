<?php

use App\Http\Controllers\DashboardAsprakController;

Route::get('/KelasPraktikumAsprak', function () {
    return view('KelasPraktikumAsprak');
});

Route::get('/DashboardAsprak', [DashboardAsprakController::class, 'index'])->name('DashboardAsprak');