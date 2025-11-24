<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama (index)
     */
    public function index()
    {
        // Nantinya di sini Anda akan mengambil data seperti daftar topik/guru dari database
        
        // Mengembalikan view 'home.blade.php' yang sudah kita buat
        return view('home');
    }
}