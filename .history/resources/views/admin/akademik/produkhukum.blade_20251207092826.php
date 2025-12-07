@extends('layouts.admin')

@section('title', 'Produk Hukum (SK)')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-gavel"></i>
        </span> Dokumen & Produk Hukum
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk Hukum</li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Dokumen Baru</h4>
                <p class="card-description"> Upload SK / Peraturan / Juknis </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label>Judul Dokumen</label>
                        <input type="text" class="form-control" placeholder="Contoh: SK Kalender Akademik 2025">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control">
                            <option>SK Kepala Madrasah</option>
                            <option>Peraturan Akademik</option>
                            <option>Juknis PPDB</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File (PDF)</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" placeholder="Upload PDF">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary w-100">Upload File</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Arsip Dokumen</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Dokumen</th>
                                <th>Kategori</th>
                                <th>Tgl Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-file-pdf text-danger mdi-24px me-2"></i>
                                        <div>
                                            <strong>SK Kalender Akademik 2025</strong><br>
                                            <small class="text-muted">Size: 2.5 MB</small>
                                        </div>
                                    </div>
                                </td>
                                <td><label class="badge badge-outline-primary">SK</label></td>
                                <td>10 Juli 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-inverse-success"><i class="mdi mdi-download"></i></button>
                                    <button class="btn btn-sm btn-inverse-danger"><i class="mdi mdi-delete"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-file-document text-info mdi-24px me-2"></i>
                                        <div>
                                            <strong>Juknis PPDB Tahun 2025</strong><br>
                                            <small class="text-muted">Size: 1.2 MB</small>
                                        </div>
                                    </div>
                                </td>
                                <td><label class="badge badge-outline-warning">Juknis</label></td>
                                <td>01 Mei 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-inverse-success"><i class="mdi mdi-download"></i></button>
                                    <button class="btn btn-sm btn-inverse-danger"><i class="mdi mdi-delete"></i></button>
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