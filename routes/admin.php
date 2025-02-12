<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

// ----------------------- Books -----------------------

    Route::resource('book', BookController::class);

});
