<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar siswa
     */
    public function index()
    {
        $siswas = Siswa::latest()->paginate(10);
        return view('admin.siswa.index', compact('siswas'));
    }

    /**
     * Menampilkan form tambah siswa
     */
    public function create()
    {
        return view('admin.siswa.create');
    }

    /**
     * Menyimpan siswa baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|string|unique:siswas,nisn|max:20',
            'nis' => 'nullable|string|max:20',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'class_name' => 'required|string|max:30', // Increased max length
            'parent_name' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('siswa', 'public');
        }

        Siswa::create($data);

        return redirect()->route('admin.siswa.index')->with('success', 'Data Siswa berhasil ditambahkan');
    }

    /**
     * Menampilkan form edit siswa
     */
    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Update data siswa
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nisn' => 'required|string|max:20|unique:siswas,nisn,' . $siswa->id,
            'nis' => 'nullable|string|max:20',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'class_name' => 'required|string|max:30', // Increased max length
            'parent_name' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($siswa->photo) {
                Storage::disk('public')->delete($siswa->photo);
            }
            $data['photo'] = $request->file('photo')->store('siswa', 'public');
        }

        $siswa->update($data);

        return redirect()->route('admin.siswa.index')->with('success', 'Data Siswa berhasil diperbarui');
    }

    /**
     * Hapus data siswa
     */
    public function destroy(Siswa $siswa)
    {
        if ($siswa->photo) {
            Storage::disk('public')->delete($siswa->photo);
        }
        
        $siswa->delete();

        return redirect()->route('admin.siswa.index')->with('success', 'Data Siswa berhasil dihapus');
    }
}