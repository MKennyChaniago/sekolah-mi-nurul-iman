@extends('layouts.admin')

@section('title', 'Galeri Sekolah')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-image-multiple"></i>
        </span> Galeri Kegiatan
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Foto Baru</h4>
                <form class="form-inline">
                    <label class="sr-only" for="judulFoto">Judul Kegiatan</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="judulFoto" placeholder="Judul Kegiatan (Misal: Upacara)">
                    
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="file" class="form-control">
                    </div>
                
                    <button type="submit" class="btn btn-gradient-primary mb-2">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <img src="{{ asset('admin/images/dashboard/img_1.jpg') }}" class="card-img-top" alt="foto">
                    <div class="card-body p-3">
                        <h5 class="card-title mb-1">Upacara Bendera</h5>
                        <p class="card-text text-muted small">Senin, 20 Nov 2025</p>
                        <button class="btn btn-block btn-inverse-danger btn-sm mt-2 w-100">Hapus Foto</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <img src="{{ asset('admin/images/dashboard/img_2.jpg') }}" class="card-img-top" alt="foto">
                    <div class="card-body p-3">
                        <h5 class="card-title mb-1">Lomba Mewarnai</h5>
                        <p class="card-text text-muted small">Kamis, 15 Nov 2025</p>
                        <button class="btn btn-block btn-inverse-danger btn-sm mt-2 w-100">Hapus Foto</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <img src="{{ asset('admin/images/dashboard/img_3.jpg') }}" class="card-img-top" alt="foto">
                    <div class="card-body p-3">
                        <h5 class="card-title mb-1">Kunjungan Pengawas</h5>
                        <p class="card-text text-muted small">Rabu, 10 Nov 2025</p>
                        <button class="btn btn-block btn-inverse-danger btn-sm mt-2 w-100">Hapus Foto</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection