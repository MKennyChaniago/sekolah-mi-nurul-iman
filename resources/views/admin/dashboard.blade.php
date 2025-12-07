@extends('layouts.admin')

@section('content')
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
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
            <h4 class="font-weight-normal mb-3">Berita/Artikel <i class="mdi mdi-newspaper mdi-24px float-end"></i>
            </h4>
            <h2 class="mb-5">45</h2>
            <h6 class="card-text">Sudah Terbit</h6>
          </div>
        </div>
      </div>
    </div>
@endsection