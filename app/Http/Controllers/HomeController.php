<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Guru;
use App\Models\Gallery;
use App\Models\SchoolProfile;
use App\Models\Subject;
use App\Models\Document;
use App\Models\Extracurricular;
use App\Models\Program;

class HomeController extends Controller
{
    /**
     * 1. Halaman Utama (Home)
     */
    public function index()
    {
        // Mengambil berita terbaru
        $beritaTerbaru = Berita::where('status', 'published')->latest()->take(3)->get();
        // Mengambil program unggulan
        $programs = Program::take(4)->get();
        // Mengambil profil untuk sambutan
        $profile = SchoolProfile::first();
        // Mengambil galeri terbaru
        $homeGalleries = Gallery::latest()->take(3)->get();

        return view('home', compact('beritaTerbaru', 'programs', 'profile', 'homeGalleries'));
    }

    /**
     * 2. Group Profil
     */
    public function sejarah()
    {
        $profile = SchoolProfile::first();
        return view('profil.sejarah', compact('profile'));
    }

    public function visiMisi()
    {
        $profile = SchoolProfile::first();
        return view('profil.visi_misi', compact('profile')); 
    }

    public function struktur()
    {
        $profile = SchoolProfile::first();
        return view('profil.struktur', compact('profile'));
    }

    /**
     * 3. Kesiswaan
     */
    public function kesiswaan()
    {
        $ekskuls = Extracurricular::all();
        $programs = Program::all();
        return view('kesiswaan.index', compact('ekskuls', 'programs')); 
    }

    /**
     * 4. Berita & Artikel
     */
    public function berita()
    {
        $beritas = Berita::where('status', 'published')->latest()->paginate(9);
        return view('berita.listing', compact('beritas'));
    }

    public function detailBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->where('status', 'published')->firstOrFail();
        // Berita terkait
        $relatedNews = Berita::where('status', 'published')
                            ->where('id', '!=', $berita->id)
                            ->latest()
                            ->take(3)
                            ->get();
                            
        return view('berita.detail', compact('berita', 'relatedNews'));
    }

    /**
     * 5. Akademik
     */
    public function kurikulum()
    {
        // Grouping mata pelajaran
        $subjects = Subject::orderBy('group')->orderBy('name')->get()->groupBy('group');
        return view('akademik.kurikulum', compact('subjects'));
    }

    public function guru()
    {
        $gurus = Guru::orderBy('position')->get(); 
        // Bisa di-grouping berdasarkan status atau lainnya jika perlu
        return view('akademik.guru_staff', compact('gurus'));
    }

    public function produkHukum()
    {
        $documents = Document::latest()->get();
        return view('akademik.produk_hukum', compact('documents'));
    }

    /**
     * 6. Galeri
     */
    public function galeri()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('galeri.index', compact('galleries'));
    }


}