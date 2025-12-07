<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function index()
    {
        // Nanti kita ambil data guru dari DB di sini
        return view('admin.guru.index'); 
    }

    public function create()
    {
        return view('admin.guru.create'); 
    }
}