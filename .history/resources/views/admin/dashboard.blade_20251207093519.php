@extends('layouts.admin')

@section('content')
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Ikhtisar Sekolah <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('admin/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Total Guru <i class="mdi mdi-account-tie mdi-24px float-end"></i>
            </h4>
            <h2 class="mb-5">15</h2>
            <h6 class="card-text">Pengajar Aktif</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('admin/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Total Siswa <i class="mdi mdi-school mdi-24px float-end"></i>
            </h4>
            <h2 class="mb-5">320</h2>
            <h6 class="card-text">Tahun Ajaran 2025</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('admin/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Berita & Artikel <i class="mdi mdi-newspaper mdi-24px float-end"></i>
            </h4>
            <h2 class="mb-5">45</h2>
            <h6 class="card-text">Sudah Terbit</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="card-title">Publikasi Terakhir</h4>
                <a href="{{ route('admin.berita.index') }}" class="text-primary text-small">Lihat Semua</a>
            </div>
            
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Judul </th>
                    <th> Tanggal </th>
                    <th> Status </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="{{ asset('admin/images/faces/face1.jpg') }}" class="me-2" alt="image">
                      Juara Lomba Sains
                    </td>
                    <td> 12 Nov 2025 </td>
                    <td>
                      <label class="badge badge-gradient-success">Tayang</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('admin/images/faces/face2.jpg') }}" class="me-2" alt="image">
                      Penerimaan Siswa Baru
                    </td>
                    <td> 10 Nov 2025 </td>
                    <td>
                      <label class="badge badge-gradient-warning">Draft</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('admin/images/faces/face3.jpg') }}" class="me-2" alt="image">
                      Kunjungan Pengawas
                    </td>
                    <td> 05 Nov 2025 </td>
                    <td>
                      <label class="badge badge-gradient-info">Arsip</label>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Agenda Sekolah</h4>
            <div class="list-wrapper">
                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked> Rapat Guru Bulanan
                        <i class="input-helper"></i>
                        <br><small class="text-muted">Senin, 08:00 WIB</small>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Upacara Hari Pahlawan
                        <i class="input-helper"></i>
                        <br><small class="text-muted">10 November</small>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Pembagian Rapor
                        <i class="input-helper"></i>
                        <br><small class="text-muted">20 Desember</small>
                      </label>
                    </div>
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Aksi Cepat</h4>
                    <div class="row text-center">
                        <div class="col-6 col-md-3 mb-3">
                            <a href="{{ route('admin.berita.create') }}" class="btn btn-outline-primary btn-icon-text w-100">
                                <i class="mdi mdi-lead-pencil btn-icon-prepend"></i> Tulis Berita
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mb-3">
                            <a href="{{ route('admin.guru.create') }}" class="btn btn-outline-danger btn-icon-text w-100">
                                <i class="mdi mdi-account-plus btn-icon-prepend"></i> Tambah Guru
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mb-3">
                            <a href="#" class="btn btn-outline-success btn-icon-text w-100">
                                <i class="mdi mdi-file-excel btn-icon-prepend"></i> Import Siswa
                            </a>
                        </div>
                        <div class="col-6 col-md-3 mb-3">
                            <a href="{{ route('admin.produkhukum.index') }}" class="btn btn-outline-warning btn-icon-text w-100">
                                <i class="mdi mdi-upload btn-icon-prepend"></i> Upload SK
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection