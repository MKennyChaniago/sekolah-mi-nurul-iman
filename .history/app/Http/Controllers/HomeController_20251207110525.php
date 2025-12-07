<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // Pastikan Model Berita sudah ada

class HomeController extends Controller
{
    /**
     * 1. Halaman Utama (Home)
     */
    public function index()
    {
        // Mengambil 3 berita terbaru (jika ada tabel berita)
        // Jika belum ada tabel/data, kita return collection kosong biar gak error
        try {
            $beritaTerbaru = Berita::latest()->take(3)->get();
        } catch (\Exception $e) {
            $beritaTerbaru = collect([]); // Kosongkan jika database belum siap
        }

        return view('home', compact('beritaTerbaru'));
    }

    /**
     * 2. Group Profil
     */
    public function sejarah()
    {
        // Pastikan ada file: resources/views/profil/sejarah.blade.php
        return view('profil.sejarah');
    }

    public function visiMisi()
    {
        // Pastikan ada file: resources/views/profil/visi_misi.blade.php
        // Cek nama file kamu, apakah 'visimisi.blade.php' atau 'visi_misi.blade.php'
        // Sesuaikan string di bawah ini dengan nama file aslimu:
        return view('profil.visi_misi'); 
    }

    public function struktur()
    {
        // Pastikan ada file: resources/views/profil/struktur.blade.php
        return view('profil.struktur');
    }

    /**
     * 3. Kesiswaan
     */
    public function kesiswaan()
    {
        // Pastikan ada file: resources/views/kesiswaan/index.blade.php
        // Atau sesuaikan jika filenya bernama kesiswaan.blade.php
        return view('kesiswaan.index'); 
    }

    /**
     * 4. Berita & Artikel
     */
    public function berita()
    {
        // Mengambil berita dengan pagination
        try {
            $beritas = Berita::latest()->paginate(6);
        } catch (\Exception $e) {
            $beritas = collect([]);
        }
        return view('berita.listing', compact('beritas'));
    }

    public function detailBerita($slug)
    {
        // Mencari berita berdasarkan slug
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('berita.detail', compact('berita'));
    }

    /**
     * 5. Akademik
     */
    public function kurikulum()
    {
        return view('akademik.kurikulum');
    }

    public function guru()
    {
        // Nanti bisa ditambah: $gurus = Guru::all();
        return view('akademik.guru_staff');
    }

    public function produkHukum()
    {
        return view('akademik.produk_hukum');
    }

    /**
     * 6. Galeri
     */
    public function galeri()
    {
        return view('galeri.index');
    }

    /**
     * 7. Kontak
     */
    public function kontak()
    {
        // Pastikan file: resources/views/kontak.blade.php ada
        return view('kontak');
    }
}