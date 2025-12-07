@extends('layouts.admin')

@section('title', 'Data Guru & Staff')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-group"></i>
            </span> Data Guru & Tenaga Kependidikan
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Guru</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title">Daftar Guru MI Nurul Iman</h4>
                        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary btn-sm">
                            <i class="mdi mdi-plus"></i> Tambah Guru Baru
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIP / NUPTK</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="py-1">
                                        <img src="{{ asset('admin/images/faces/face1.jpg') }}" alt="image" />
                                    </td>
                                    <td>Ahmad Fauzi, S.Pd.I</td>
                                    <td>19850101 201001 1 001</td>
                                    <td>Guru Kelas 6</td>
                                    <td><label class="badge badge-gradient-success">PNS</label></td>
                                    <td>
                                        <button class="btn btn-info btn-sm btn-icon-text">
                                            <i class="mdi mdi-pencil"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-icon-text">
                                            <i class="mdi mdi-delete"></i> Hapus
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td class="py-1">
                                        <img src="{{ asset('admin/images/faces/face2.jpg') }}" alt="image" />
                                    </td>
                                    <td>Siti Aminah, S.Pd</td>
                                    <td>-</td>
                                    <td>Guru Matematika</td>
                                    <td><label class="badge badge-gradient-warning">Honorer</label></td>
                                    <td>
                                        <button class="btn btn-info btn-sm btn-icon-text">
                                            <i class="mdi mdi-pencil"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-icon-text">
                                            <i class="mdi mdi-delete"></i> Hapus
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td class="py-1">
                                        <img src="{{ asset('admin/images/faces/face3.jpg') }}" alt="image" />
                                    </td>
                                    <td>Budi Santoso</td>
                                    <td>-</td>
                                    <td>Tata Usaha</td>
                                    <td><label class="badge badge-gradient-info">Staff</label></td>
                                    <td>
                                        <button class="btn btn-info btn-sm btn-icon-text">
                                            <i class="mdi mdi-pencil"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-icon-text">
                                            <i class="mdi mdi-delete"></i> Hapus
                                        </button>
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