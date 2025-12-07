<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AkademikController extends Controller
{
    public function kurikulum()
    {
        return view('admin.akademik.kurikulum');
    }

    public function produkHukum()
    {
        return view('admin.akademik.produkhukum');
    }
}