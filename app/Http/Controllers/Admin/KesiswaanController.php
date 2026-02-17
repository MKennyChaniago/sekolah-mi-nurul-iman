<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular;
use App\Models\Program;
use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Ekstrakurikuler
    |--------------------------------------------------------------------------
    */
    public function ekskul()
    {
        $ekskuls = Extracurricular::all();
        return view('admin.kesiswaan.ekskul.index', compact('ekskuls'));
    }

    public function storeEkskul(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'schedule' => 'nullable|string|max:255',
            'instructor' => 'nullable|string|max:255',
        ]);

        Extracurricular::create($request->all());

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function updateEkskul(Request $request, Extracurricular $extracurricular)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'schedule' => 'nullable|string|max:255',
            'instructor' => 'nullable|string|max:255',
        ]);

        $extracurricular->update($request->all());

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroyEkskul(Extracurricular $extracurricular)
    {
        $extracurricular->delete();
        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }

    /*
    |--------------------------------------------------------------------------
    | Program Unggulan
    |--------------------------------------------------------------------------
    */
    public function program()
    {
        $programs = Program::all();
        return view('admin.kesiswaan.program.index', compact('programs'));
    }

    public function storeProgram(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'bg_color' => 'nullable|string',
        ]);

        Program::create($request->all());

        return redirect()->route('admin.program.index')->with('success', 'Program unggulan berhasil ditambahkan.');
    }

    public function updateProgram(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'bg_color' => 'nullable|string',
        ]);

        $program->update($request->all());

        return redirect()->route('admin.program.index')->with('success', 'Program unggulan berhasil diperbarui.');
    }

    public function destroyProgram(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.program.index')->with('success', 'Program unggulan berhasil dihapus.');
    }
}