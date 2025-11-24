<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route utama untuk halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Anda juga perlu mendefinisikan route untuk halaman lain yang ada di navigasi template Anda
// Jika Anda ingin membuat halaman Topics Listing, contohnya:
Route::get('/topics-listing', function () {
    return view('topics-listing'); 
})->name('topics.listing');

// Jika Anda ingin membuat halaman kontak:
Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

// Catatan: Pastikan Anda membuat file Blade yang sesuai (topics-listing.blade.php, contact.blade.php)