<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class KesiswaanController extends Controller
{
    public function ekskul()
    {
        return view('admin.kesiswaan.ekskul');
    }

    public function program()
    {
        return view('admin.kesiswaan.program');
    }
}