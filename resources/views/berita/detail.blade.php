@extends('layouts.frontend')

@section('title', $berita->title)

@section('content')

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('berita.listing') }}">Berita</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($berita->title, 20) }}</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Detail Berita</h2>
                </div>
            </div>
        </div>
    </header>

    <section class="section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-12">
                     <div class="custom-block custom-block-topics-listing bg-white shadow-lg p-5">
                        <div class="topics-detail-block">
                            
                            <h3 class="mb-4">{{ $berita->title }}</h3>
                            
                            <div class="d-flex justify-content-between align-items-center mb-4 text-muted small">
                                <div>
                                    <i class="bi-calendar me-1"></i> {{ $berita->published_at ? date('d F Y', strtotime($berita->published_at)) : $berita->created_at->format('d F Y') }}
                                </div>
                                <div>
                                    <i class="bi-person me-1"></i> Admin
                                    <span class="mx-2">|</span>
                                    <i class="bi-tag me-1"></i> {{ $berita->category }}
                                </div>
                            </div>
                            
                            @if($berita->thumbnail)
                                <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="img-fluid rounded shadow mb-5 w-100" alt="{{ $berita->title }}">
                            @endif

                            <div class="content-text">
                                {!! $berita->content !!}
                            </div>
                            
                        </div>
                     </div>
                </div>

                <!-- Related News -->
                <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                    <div class="custom-block bg-white shadow-lg p-4">
                        <h5 class="mb-4">Berita Terkait</h5>
                        
                        @forelse($relatedNews as $related)
                        <div class="mb-4 pb-4 border-bottom">
                            <a href="{{ route('berita.detail', $related->slug) }}" class="text-decoration-none">
                                <h6 class="mb-2 text-dark">{{ $related->title }}</h6>
                                <p class="text-muted small mb-0">
                                    <i class="bi-calendar me-1"></i> {{ $related->created_at->format('d M Y') }}
                                </p>
                            </a>
                        </div>
                        @empty
                        <p class="text-muted small">Tidak ada berita terkait lainnya.</p>
                        @endforelse

                        <a href="{{ route('berita.listing') }}" class="btn custom-btn btn-sm w-100 mt-2">Lihat Semua Berita</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection