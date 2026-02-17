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
                    <h2 class="text-white">Struktur Organisasi</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-5">Struktur Organisasi MI Nurul Iman</h3>
                    
                    @if($profile && $profile->structure_image)
                        <img src="{{ asset('storage/' . $profile->structure_image) }}" class="img-fluid rounded shadow" alt="Struktur Organisasi">
                    @else
                        <div class="alert alert-info">
                            Gambar struktur organisasi belum tersedia.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection