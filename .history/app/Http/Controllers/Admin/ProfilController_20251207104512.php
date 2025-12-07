<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function editSejarah()
    {
        // Pastikan kamu punya file resources/views/admin/profil/sejarah.blade.php
        return view('admin.profil.sejarah'); 
    }

    public function updateSejarah()
    {
        // Nanti diisi logika simpan
    }

    public function editVisiMisi()
    {
        return view('admin.profil.visimisi');
    }

    public function updateVisiMisi()
    {
        // Nanti diisi logika simpan
    }

    public function editStruktur()
    {
        return view('admin.profil.struktur');
    }

    public function updateStruktur()
    {
        // Nanti diisi logika simpan
    }
}