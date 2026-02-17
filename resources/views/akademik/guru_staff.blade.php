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
                    <h2 class="text-white">Direktori Guru & Tenaga Kependidikan</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                
                @forelse($gurus as $guru)
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <div class="team-thumb bg-white shadow-lg rounded p-4 text-center h-100">
                        <div class="team-image-wrap mb-4 mx-auto" style="width: 150px; height: 150px;">
                            @if($guru->photo)
                                <img src="{{ asset('storage/' . $guru->photo) }}" class="rounded-circle img-fluid w-100 h-100" style="object-fit: cover;" alt="{{ $guru->name }}">
                            @else
                                <img src="{{ asset('images/kepala/kepala-madrasah.jpeg') }}" class="rounded-circle img-fluid w-100 h-100" style="object-fit: cover;" alt="Default Image">
                            @endif
                        </div>
                        
                        <h5 class="mb-1">{{ $guru->name }}</h5>
                        <p class="text-primary fw-bold mb-2">{{ $guru->position }}</p>
                        
                        @if($guru->nip)
                            <p class="text-muted small mb-0">NIP. {{ $guru->nip }}</p>
                        @endif
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info">Data guru belum tersedia.</div>
                </div>
                @endforelse

            </div>
        </div>
    </section>
@endsection