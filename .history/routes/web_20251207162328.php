<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
// ... import controller lainnya ...
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\AkademikController;
use App\Http\Controllers\Admin\KesiswaanController;

/*
|--------------------------------------------------------------------------
| A. JALUR OTENTIKASI
|--------------------------------------------------------------------------
*/
// PERBAIKAN: Hapus "->middleware('guest')" dari sini!
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| B. JALUR FRONTEND (PUBLIK)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('profil')->group(function () {
    Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('profil.sejarah');
    Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('profil.visi_misi');
    Route::get('/struktur-organisasi', [HomeController::class, 'struktur'])->name('profil.struktur');
});

Route::get('/berita', [HomeController::class, 'berita'])->name('berita.listing');
Route::get('/berita/{slug}', [HomeController::class, 'detailBerita'])->name('berita.detail');
Route::get('/guru-staff', [HomeController::class, 'guru'])->name('akademik.guru_staff');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/kesiswaan', [HomeController::class, 'kesiswaan'])->name('kesiswaan');
Route::get('/kurikulum', [HomeController::class, 'kurikulum'])->name('akademik.kurikulum');
Route::get('/produk-hukum', [HomeController::class, 'produkHukum'])->name('akademik.produk_hukum');

/*
|--------------------------------------------------------------------------
| C. JALUR BACKEND (ADMINISTRATOR)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
    // Redirect /admin ke dashboard
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Resource Routes
    Route::resource('berita', BeritaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('galeri', GaleriController::class);
    
    // Custom Routes
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    
    Route::get('/sejarah', [ProfilController::class, 'editSejarah'])->name('sejarah');
    Route::put('/sejarah', [ProfilController::class, 'updateSejarah'])->name('sejarah.update');
    
    Route::get('/visi-misi', [ProfilController::class, 'editVisiMisi'])->name('visimisi');
    Route::put('/visi-misi', [ProfilController::class, 'updateVisiMisi'])->name('visimisi.update');
    
    Route::get('/struktur', [ProfilController::class, 'editStruktur'])->name('struktur');
    Route::put('/struktur', [ProfilController::class, 'updateStruktur'])->name('struktur.update');

    Route::get('/kurikulum', [AkademikController::class, 'kurikulum'])->name('kurikulum.index');
    Route::get('/produk-hukum', [AkademikController::class, 'produkHukum'])->name('produk_hukum.index');
    Route::get('/ekstrakurikuler', [KesiswaanController::class, 'ekskul'])->name('ekstrakurikuler.index');
    Route::get('/program-unggulan', [KesiswaanController::class, 'program'])->name('program.index');
});