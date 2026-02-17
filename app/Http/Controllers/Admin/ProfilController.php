<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Helper untuk mendapatkan profil sekolah (singleton)
     */
    private function getProfile()
    {
        return SchoolProfile::firstOrCreate([], []);
    }

    /*
    |--------------------------------------------------------------------------
    | Sejarah
    |--------------------------------------------------------------------------
    */
    public function editSejarah()
    {
        $profile = $this->getProfile();
        return view('admin.profil.sejarah', compact('profile'));
    }

    public function updateSejarah(Request $request)
    {
        $request->validate([
            'history' => 'required|string',
            'history_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = $this->getProfile();
        $data = ['history' => $request->history];

        if ($request->hasFile('history_image')) {
            if ($profile->history_image) {
                Storage::disk('public')->delete($profile->history_image);
            }
            $data['history_image'] = $request->file('history_image')->store('profil', 'public');
        }

        $profile->update($data);

        return redirect()->back()->with('success', 'Sejarah sekolah berhasil diperbarui.');
    }

    /*
    |--------------------------------------------------------------------------
    | Visi & Misi
    |--------------------------------------------------------------------------
    */
    public function editVisiMisi()
    {
        $profile = $this->getProfile();
        return view('admin.profil.visimisi', compact('profile'));
    }

    public function updateVisiMisi(Request $request)
    {
        $request->validate([
            'vision' => 'required|string',
            'mission' => 'required|string',
        ]);

        $profile = $this->getProfile();
        $profile->update([
            'vision' => $request->vision,
            'mission' => $request->mission,
        ]);

        return redirect()->back()->with('success', 'Visi & Misi berhasil diperbarui.');
    }

    /*
    |--------------------------------------------------------------------------
    | Struktur Organisasi
    |--------------------------------------------------------------------------
    */
    public function editStruktur()
    {
        $profile = $this->getProfile();
        return view('admin.profil.struktur', compact('profile'));
    }

    public function updateStruktur(Request $request)
    {
        $request->validate([
            'structure_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $profile = $this->getProfile();
        $data = [];

        if ($request->hasFile('structure_image')) {
            if ($profile->structure_image) {
                Storage::disk('public')->delete($profile->structure_image);
            }
            $data['structure_image'] = $request->file('structure_image')->store('profil', 'public');
            
            $profile->update($data);
            return redirect()->back()->with('success', 'Gambar struktur organisasi berhasil diperbarui.');
        }

        return redirect()->back()->with('error', 'Gagal mengupload gambar.');
    }
    /*
    |--------------------------------------------------------------------------
    | Kontak & Media Sosial
    |--------------------------------------------------------------------------
    */
    public function editKontak()
    {
        $profile = $this->getProfile();
        return view('admin.profil.kontak', compact('profile'));
    }

    public function updateKontak(Request $request)
    {
        $request->validate([
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'maps_embed' => 'nullable|string',
        ]);

        $profile = $this->getProfile();
        $profile->update($request->all());

        return redirect()->back()->with('success', 'Informasi kontak berhasil diperbarui.');
    }
    /*
    |--------------------------------------------------------------------------
    | Pengaturan Beranda (Kepala Madrasah & PPDB)
    |--------------------------------------------------------------------------
    */
    public function editBeranda()
    {
        $profile = $this->getProfile();
        return view('admin.profil.beranda', compact('profile'));
    }

    public function updateBeranda(Request $request)
    {
        $request->validate([
            'headmaster_name' => 'nullable|string|max:255',
            'headmaster_welcome' => 'nullable|string',
            'headmaster_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ppdb_link' => 'nullable|url|max:255',
        ]);

        $profile = $this->getProfile();
        $data = [
            'headmaster_name' => $request->headmaster_name,
            'headmaster_welcome' => $request->headmaster_welcome,
            'ppdb_link' => $request->ppdb_link,
        ];

        if ($request->hasFile('headmaster_photo')) {
            if ($profile->headmaster_photo) {
                Storage::disk('public')->delete($profile->headmaster_photo);
            }
            $data['headmaster_photo'] = $request->file('headmaster_photo')->store('kepala', 'public');
        }

        $profile->update($data);

        return redirect()->back()->with('success', 'Pengaturan Beranda berhasil diperbarui.');
    }
}