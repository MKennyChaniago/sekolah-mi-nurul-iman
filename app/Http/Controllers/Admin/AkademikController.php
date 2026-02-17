<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AkademikController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Kurikulum (Mata Pelajaran)
    |--------------------------------------------------------------------------
    */
    public function kurikulum()
    {
        $subjects = Subject::orderBy('group')->orderBy('name')->get();
        return view('admin.akademik.kurikulum.index', compact('subjects'));
    }

    public function storeKurikulum(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'group' => 'required|string',
            'grades' => 'nullable|string',
        ]);

        Subject::create($request->all());

        return redirect()->route('admin.kurikulum.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function updateKurikulum(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'group' => 'required|string',
            'grades' => 'nullable|string',
        ]);

        $subject->update($request->all());

        return redirect()->route('admin.kurikulum.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    public function destroyKurikulum(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('admin.kurikulum.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }

    /*
    |--------------------------------------------------------------------------
    | Produk Hukum
    |--------------------------------------------------------------------------
    */
    public function produkHukum()
    {
        $documents = Document::latest()->paginate(10);
        return view('admin.akademik.produkhukum.index', compact('documents'));
    }

    public function storeProdukHukum(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'file_path' => 'required|file|mimes:pdf,doc,docx|max:10240', // Max 10MB
        ]);

        $data = $request->only(['title', 'category']);

        if ($request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('documents', 'public');
        }

        Document::create($data);

        return redirect()->route('admin.produk_hukum.index')->with('success', 'Dokumen berhasil diunggah.');
    }

    public function updateProdukHukum(Request $request, Document $document)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        $data = $request->only(['title', 'category']);

        if ($request->hasFile('file_path')) {
            if ($document->file_path) {
                Storage::disk('public')->delete($document->file_path);
            }
            $data['file_path'] = $request->file('file_path')->store('documents', 'public');
        }

        $document->update($data);

        return redirect()->route('admin.produk_hukum.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroyProdukHukum(Document $document)
    {
        if ($document->file_path) {
            Storage::disk('public')->delete($document->file_path);
        }
        
        $document->delete();

        return redirect()->route('admin.produk_hukum.index')->with('success', 'Dokumen berhasil dihapus.');
    }
}