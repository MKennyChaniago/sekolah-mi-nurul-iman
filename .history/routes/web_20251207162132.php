<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Import Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\AkademikController;
use App\Http\Controllers\Admin\KesiswaanController;

/*
|--------------------------------------------------------------------------
| A. JALUR OTENTIKASI (LOGIN & LOGOUT)
|--------------------------------------------------------------------------
*/
// Menampilkan form login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses submit login
Route::post('login', [LoginController::class, 'login']);

// Proses logout (Wajib POST untuk keamanan)
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| B. JALUR FRONTEND (PUBLIK / PENGUNJUNG)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

// Group Profil
Route::prefix('profil')->group(function () {
    Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('profil.sejarah');
    Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('profil.visi_misi');
    Route::get('/struktur-organisasi', [HomeController::class, 'struktur'])->name('profil.struktur');
});

// Berita & Artikel
Route::get('/berita', [HomeController::class, 'berita'])->name('berita.listing');
Route::get('/berita/{slug}', [HomeController::class, 'detailBerita'])->name('berita.detail');

// Akademik & Lainnya
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
| Middleware 'auth' memastikan hanya user login yang bisa akses
*/
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    // Jika akses /admin saja, redirect ke dashboard
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    // 1. Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // 2. Resource Controllers (Otomatis index, create, store, edit, update, destroy)
    Route::resource('berita', BeritaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('galeri', GaleriController::class);

    // 3. Siswa (Custom Index karena mungkin import excel nanti)
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

    // 4. Profil Sekolah (Edit Tunggal)
    Route::get('/sejarah', [ProfilController::class, 'editSejarah'])->name('sejarah');
    Route::put('/sejarah', [ProfilController::class, 'updateSejarah'])->name('sejarah.update');
    
    Route::get('/visi-misi', [ProfilController::class, 'editVisiMisi'])->name('visimisi');
    Route::put('/visi-misi', [ProfilController::class, 'updateVisiMisi'])->name('visimisi.update');
    
    Route::get('/struktur', [ProfilController::class, 'editStruktur'])->name('struktur');
    Route::put('/struktur', [ProfilController::class, 'updateStruktur'])->name('struktur.update');

    // 5. Akademik & Kesiswaan (Tampilan Admin)
    Route::get('/kurikulum', [AkademikController::class, 'kurikulum'])->name('kurikulum.index');
    Route::get('/produk-hukum', [AkademikController::class, 'produkHukum'])->name('produk_hukum.index');
    Route::get('/ekstrakurikuler', [KesiswaanController::class, 'ekskul'])->name('ekstrakurikuler.index');
    Route::get('/program-unggulan', [KesiswaanController::class, 'program'])->name('program.index');

});