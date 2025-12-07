<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index'); // Pastikan file index.blade.php ada di folder berita
    }

    public function create()
    {
        return view('admin.berita.create'); // Pastikan file create.blade.php ada
    }
}