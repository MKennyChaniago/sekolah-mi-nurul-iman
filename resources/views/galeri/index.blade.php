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
                    <h2 class="text-white">Galeri Kegiatan Sekolah</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                
                @forelse($galleries as $gallery)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block bg-white shadow-lg h-100">
                        <a href="{{ asset('storage/' . $gallery->image) }}" class="image-popup">
                            <img src="{{ asset('storage/' . $gallery->image) }}" class="custom-block-image img-fluid w-100" style="height: 250px; object-fit: cover;" alt="{{ $gallery->title }}">
                        </a>
                        <div class="p-3">
                            <h5 class="mb-2">{{ $gallery->title }}</h5>
                            <p class="mb-0 text-muted small">
                                <i class="bi-calendar me-1"></i> {{ $gallery->event_date ? date('d M Y', strtotime($gallery->event_date)) : $gallery->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info">Belum ada foto galeri.</div>
                </div>
                @endforelse

                <div class="col-12 mt-4 d-flex justify-content-center">
                    {{ $galleries->links() }}
                </div>

            </div>
        </div>
    </section>
@endsection