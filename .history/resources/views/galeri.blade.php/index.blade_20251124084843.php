@extends('layouts.frontend')

@section('title', 'Galeri')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Galeri Foto & Video Madrasah</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h3 class="text-center mb-4">Momen Kegiatan Terbaru</h3>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto1.jpg') }}" class="img-fluid rounded shadow" alt="Galeri 1">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto2.jpg') }}" class="img-fluid rounded shadow" alt="Galeri 2">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto3.jpg') }}" class="img-fluid rounded shadow" alt="Galeri 3">
                </div>
                <div class="col-12 text-center mt-3">
                    <button class="btn custom-btn">Muat Lebih Banyak</button>
                </div>
            </div>
        </div>
    </section>
@endsection