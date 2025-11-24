<?php

use Illuminate\Support\Facades\Route;
// Import Controller yang baru dibuat
use App\Http\Controllers\HomeController; 

// Route default (/) akan memanggil method index() di HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// Anda juga bisa membuat route lain yang ada di template (misal: halaman detail)
Route::get('/topics-listing', function () {
    return view('topics-listing'); // Anda harus membuat file topics-listing.blade.php
})->name('topics.listing');

