@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white me-2">
                <i class="mdi mdi-school"></i>
            </span> Data Peserta Didik
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title">Data Siswa Aktif (Total: 320)</h4>
                        
                        <div>
                            <button class="btn btn-success btn-sm btn-icon-text">
                                <i class="mdi mdi-file-excel"></i> Import Excel
                            </button>
                            <button class="btn btn-danger btn-sm btn-icon-text">
                                <i class="mdi mdi-file-pdf"></i> Export PDF
                            </button>
                            <button class="btn btn-primary btn-sm btn-icon-text">
                                <i class="mdi mdi-plus"></i> Tambah Manual
                            </button>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <select class="form-control form-control-sm">
                                <option>Semua Kelas</option>
                                <option>Kelas 1</option>
                                <option>Kelas 2</option>
                                <option>Kelas 3</option>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Cari Nama / NISN...">
                                <button class="btn btn-sm btn-gradient-primary" type="button">Cari</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIS / NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>L/P</th>
                                    <th>Kelas</th>
                                    <th>Nama Wali</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12345 / 0012345678</td>
                                    <td>
                                        <img src="{{ asset('admin/images/faces/face1.jpg') }}" class="me-2" alt="image">
                                        Aditya Pratama
                                    </td>
                                    <td>L</td>
                                    <td><label class="badge badge-info">1 - A</label></td>
                                    <td>Bpk. Santoso</td>
                                    <td>
                                        <button class="btn btn-inverse-info btn-sm btn-icon">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button class="btn btn-inverse-danger btn-sm btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>12346 / 0012345679</td>
                                    <td>
                                        <img src="{{ asset('admin/images/faces/face3.jpg') }}" class="me-2" alt="image">
                                        Bunga Citra
                                    </td>
                                    <td>P</td>
                                    <td><label class="badge badge-info">2 - B</label></td>
                                    <td>Ibu Lestari</td>
                                    <td>
                                        <button class="btn btn-inverse-info btn-sm btn-icon">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button class="btn btn-inverse-danger btn-sm btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>3</td>
                                    <td>12347 / 0012345680</td>
                                    <td>
                                        <img src="{{ asset('admin/images/faces/face4.jpg') }}" class="me-2" alt="image">
                                        Candra Wijaya
                                    </td>
                                    <td>L</td>
                                    <td><label class="badge badge-success">6 - A</label></td>
                                    <td>Bpk. Gunawan</td>
                                    <td>
                                        <button class="btn btn-inverse-info btn-sm btn-icon">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button class="btn btn-inverse-danger btn-sm btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection