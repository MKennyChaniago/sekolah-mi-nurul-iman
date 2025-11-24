@extends('layouts.frontend')

@section('title', 'Guru & Staff')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Akademik</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Guru & Staff</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Daftar Guru dan Tenaga Kependidikan</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h3>Pendidik dan Tenaga Kependidikan MI Nurul Iman</h3>
                </div>
                
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="custom-block bg-white shadow-lg text-center p-3">
                            <img src="{{ asset('images/guru/placeholder1.jpg') }}" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;" alt="Foto Guru">
                            <h5>Nama Guru Lengkap 1</h5>
                            <p class="text-muted small">Jabatan: Guru Kelas / Mapel</p>
                            <span class="badge bg-design">PNS</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="custom-block bg-white shadow-lg text-center p-3">
                            <img src="{{ asset('images/guru/placeholder2.jpg') }}" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;" alt="Foto Guru">
                            <h5>Nama Guru Lengkap 2</h5>
                            <p class="text-muted small">Jabatan: Guru Kelas / Mapel</p>
                            <span class="badge bg-finance">Honorer</span>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="custom-block bg-white shadow-lg text-center p-3">
                            <img src="{{ asset('images/guru/placeholder3.jpg') }}" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;" alt="Foto Staff">
                            <h5>Nama Staff TU</h5>
                            <p class="text-muted small">Jabatan: Tata Usaha</p>
                            <span class="badge bg-education">Staff</span>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 text-center mt-3">
                    <p class="text-muted">Total tenaga pendidik dan kependidikan: XX orang.</p>
                </div>

            </div>
        </div>
    </section>

@endsection