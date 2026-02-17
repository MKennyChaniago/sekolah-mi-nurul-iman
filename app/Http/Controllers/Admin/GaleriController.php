<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery; // Pastikan model Gallery sudah diimport
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Menampilkan daftar foto galeri
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.galeri.index', compact('galleries'));
    }

    /**
     * Menampilkan form tambah foto
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Menyimpan foto ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Max 5MB
            'event_date' => 'nullable|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        Gallery::create($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil ditambahkan ke galeri');
    }

    /**
     * Menampilkan form edit foto
     */
    public function edit(Gallery $galeri)
    {
        // Note: Route model binding expects 'galeri' variable if mapped from resource controller logic standard
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update data foto
     */
    public function update(Request $request, Gallery $galeri)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'event_date' => 'nullable|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Hapus foto lama
            if ($galeri->image) {
                Storage::disk('public')->delete($galeri->image);
            }
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto galeri berhasil diperbarui');
    }

    /**
     * Hapus foto
     */
    public function destroy(Gallery $galeri)
    {
        if ($galeri->image) {
            Storage::disk('public')->delete($galeri->image);
        }
        
        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Foto galeri berhasil dihapus');
    }
}