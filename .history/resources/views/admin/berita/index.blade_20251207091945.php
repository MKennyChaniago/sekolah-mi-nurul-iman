@extends('layouts.admin')

@section('title', 'Berita & Artikel')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-newspaper"></i>
            </span> Berita & Artikel
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title">Daftar Publikasi</h4>
                        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary btn-sm">
                            <i class="mdi mdi-plus"></i> Tulis Berita Baru
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Judul Artikel</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Penulis</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('admin/images/dashboard/img_1.jpg') }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>
                                        Isro Mi'raj Nabi Muhammad SAW <br>
                                        <small class="text-muted">Kegiatan Keagamaan</small>
                                    </td>
                                    <td>Kegiatan</td>
                                    <td>24 Nov 2025</td>
                                    <td>Admin</td>
                                    <td><label class="badge badge-success">Tayang</label></td>
                                    <td>
                                        <button class="btn btn-inverse-info btn-sm btn-icon"><i class="mdi mdi-pencil"></i></button>
                                        <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="{{ asset('admin/images/dashboard/img_2.jpg') }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>
                                        Juara 1 Lomba Sains Tingkat Kota <br>
                                        <small class="text-muted">Prestasi membanggakan siswa...</small>
                                    </td>
                                    <td>Prestasi</td>
                                    <td>20 Nov 2025</td>
                                    <td>Pak Guru</td>
                                    <td><label class="badge badge-success">Tayang</label></td>
                                    <td>
                                        <button class="btn btn-inverse-info btn-sm btn-icon"><i class="mdi mdi-pencil"></i></button>
                                        <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="bg-secondary rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="mdi mdi-image-off text-white"></i>
                                        </div>
                                    </td>
                                    <td>
                                        Jadwal Ujian Semester Ganjil <br>
                                        <small class="text-muted">Harap diperhatikan...</small>
                                    </td>
                                    <td>Pengumuman</td>
                                    <td>15 Nov 2025</td>
                                    <td>Admin</td>
                                    <td><label class="badge badge-warning">Draft</label></td>
                                    <td>
                                        <button class="btn btn-inverse-info btn-sm btn-icon"><i class="mdi mdi-pencil"></i></button>
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