@extends('layouts.frontend')

@section('title', 'Daftar Berita dan Artikel')

@section('content')

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Berita</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Semua Berita Madrasah</h2>
                </div>
            </div>
        </div>
    </header>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h3 class="mb-4">Berita Terbaru MI Nurul Iman</h3>
                </div>

                <div class="col-lg-8 col-12 mt-3 mx-auto">
                    
                    @forelse($beritas as $berita)
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex flex-column flex-md-row">
                            @if($berita->thumbnail)
                                <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="custom-block-image img-fluid" alt="{{ $berita->title }}" style="width: 100%; max-width: 300px; height: 200px; object-fit: cover;">
                            @else
                                <img src="{{ asset('images/berita/kegiatan-olahraga.jpg') }}" class="custom-block-image img-fluid" alt="Default Image" style="width: 100%; max-width: 300px; height: 200px; object-fit: cover;">
                            @endif

                            <div class="custom-block-topics-listing-info d-flex flex-column p-4 w-100">
                                <h5 class="mb-2">{{ $berita->title }}</h5>
                                <p class="mb-0">{{ Str::limit(strip_tags($berita->content), 150) }}</p>
                                
                                <div class="mt-auto d-flex align-items-center justify-content-between pt-3">
                                    <a href="{{ route('berita.detail', $berita->slug) }}" class="btn custom-btn mt-0">Baca Selengkapnya</a>
                                    <span class="badge bg-secondary rounded-pill">{{ $berita->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-info text-center">Belum ada berita yang dipublikasikan.</div>
                    @endforelse

                </div>

                <div class="col-lg-12 col-12">
                    <div class="d-flex justify-content-center">
                        {{ $beritas->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection