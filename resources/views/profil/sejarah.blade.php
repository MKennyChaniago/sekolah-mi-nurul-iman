@extends('layouts.frontend')

@section('title', 'Sejarah Madrasah')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Profil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sejarah Madrasah</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Sejarah Singkat MI Nurul Iman</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    @if($profile && $profile->history_image)
                        <div class="mb-4 text-center">
                            <img src="{{ asset('storage/' . $profile->history_image) }}" class="img-fluid rounded shadow" alt="Sejarah Madrasah">
                        </div>
                    @endif

                    <div class="content-text">
                        {!! nl2br(e($profile->history ?? 'Data sejarah sekolah belum tersedia.')) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection