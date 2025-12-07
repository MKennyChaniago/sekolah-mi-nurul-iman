@extends('layouts.admin')

@section('title', 'Program Unggulan')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-star"></i>
        </span> Program Unggulan
    </h3>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Daftar Program Unggulan</h4>
                    <button class="btn btn-info btn-sm"><i class="mdi mdi-plus"></i> Tambah Program</button>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card bg-inverse-primary">
                            <div class="card-body text-center">
                                <i class="mdi mdi-book-open-page-variant mdi-48px text-white mb-3"></i>
                                <h4 class="text-white">Tahfidz Qur'an</h4>
                                <p class="text-white mt-3">Program menghafal Juz 30 bagi siswa kelas 1-6 dengan metode talaqqi.</p>
                                <button class="btn btn-light btn-sm text-primary mt-2">Edit Deskripsi</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card bg-inverse-success">
                            <div class="card-body text-center">
                                <i class="mdi mdi-translate mdi-48px text-white mb-3"></i>
                                <h4 class="text-white">Bilingual Arabic</h4>
                                <p class="text-white mt-3">Penerapan bahasa Arab dasar dalam percakapan sehari-hari di lingkungan sekolah.</p>
                                <button class="btn btn-light btn-sm text-success mt-2">Edit Deskripsi</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection