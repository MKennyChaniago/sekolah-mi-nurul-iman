@extends('layouts.frontend')

@section('title', 'Struktur Organisasi')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Profil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Struktur Organisasi Madrasah</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto text-center">
                    <h3>Bagan Organisasi</h3>
                    <p>Bagan Struktur Organisasi MI Nurul Iman Tahun Ajaran 2025/2026</p>
                    
                    <div class="mt-4 p-5 border rounded bg-light">
                        [Gambar Bagan Struktur Organisasi MI Nurul Iman]
                        <p class="mt-3 text-muted">Silakan ganti teks ini dengan gambar bagan struktur organisasi madrasah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection