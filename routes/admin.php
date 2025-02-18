<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

// ----------------------- Books -----------------------

    Route::resource('book', BookController::class);
    Route::post('/books/bulk-delete', [BookController::class, 'bulkDelete'])->name('books.bulk_delete');
    Route::get('books/export', [BookController::class, 'export'])->name('books.export');
});
