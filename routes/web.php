<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// -------------------------- Front Page --------------------------

Route::get('/', function () {
    return view('front.front');
})->name('front');

// ---------------------------------------------------------------------- Admin Panel ----------------------------------------------------------------------

Route::get('admin', function () {
    return view('panel.admin_master');
});


// -------------------------- Add Books --------------------------


// ---------------------------------------------------------------------- Admin Panel ----------------------------------------------------------------------

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// ------------------------------- Admin Panel -------------------------------

require_once __DIR__ . '/admin.php';
