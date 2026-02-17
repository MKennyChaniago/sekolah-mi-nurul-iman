<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Menampilkan daftar guru
     */
    public function index()
    {
        $gurus = Guru::latest()->paginate(10);
        return view('admin.guru.index', compact('gurus'));
    }

    /**
     * Menampilkan form tambah guru
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Menyimpan guru baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'nullable|string|max:20',
            'position' => 'required|string',
            'status' => 'required|in:PNS,Honorer,GTY,Staff',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('guru', 'public');
        }

        Guru::create($data);

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil ditambahkan');
    }

    /**
     * Menampilkan form edit guru
     */
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update data guru
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'nullable|string|max:20',
            'position' => 'required|string',
            'status' => 'required|in:PNS,Honorer,GTY,Staff',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($guru->photo) {
                Storage::disk('public')->delete($guru->photo);
            }
            $data['photo'] = $request->file('photo')->store('guru', 'public');
        }

        $guru->update($data);

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil diperbarui');
    }

    /**
     * Hapus data guru
     */
    public function destroy(Guru $guru)
    {
        if ($guru->photo) {
            Storage::disk('public')->delete($guru->photo);
        }
        
        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil dihapus');
    }
}