@extends('layouts.admin')

@section('title', 'Kurikulum Sekolah')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-book-open-variant"></i>
        </span> Kurikulum & Mata Pelajaran
    </h3>
</div>

<div class="row mb-4">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kurikulum yang Diterapkan</h4>
                <p class="card-description"> Jelaskan kurikulum yang dipakai (Misal: Kurikulum Merdeka / K13) </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Contoh: MI Nurul Iman menerapkan Kurikulum Merdeka yang diintegrasikan dengan nilai-nilai Keislaman...">MI Nurul Iman saat ini menerapkan Kurikulum Merdeka untuk kelas 1 dan 4, serta Kurikulum 2013 untuk kelas lainnya. Fokus pembelajaran adalah pembentukan karakter...</textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update Deskripsi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Daftar Mata Pelajaran</h4>
                    <button class="btn btn-info btn-sm">
                        <i class="mdi mdi-plus"></i> Tambah Mapel
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Kelompok</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Al-Qur'an Hadits</td>
                                <td><span class="badge badge-success">PAI</span></td>
                                <td>Semua Kelas</td>
                                <td>
                                    <button class="btn btn-inverse-warning btn-sm btn-icon"><i class="mdi mdi-pencil"></i></button>
                                    <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Matematika</td>
                                <td><span class="badge badge-info">Umum</span></td>
                                <td>Semua Kelas</td>
                                <td>
                                    <button class="btn btn-inverse-warning btn-sm btn-icon"><i class="mdi mdi-pencil"></i></button>
                                    <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bahasa Arab</td>
                                <td><span class="badge badge-success">Bahasa</span></td>
                                <td>Kelas 4-6</td>
                                <td>
                                    <button class="btn btn-inverse-warning btn-sm btn-icon"><i class="mdi mdi-pencil"></i></button>
                                    <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection