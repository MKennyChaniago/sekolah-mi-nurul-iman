@extends('layouts.frontend')

@section('title', 'Visi & Misi')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                             <li class="breadcrumb-item"><a href="#">Profil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Visi & Misi Madrasah</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding bg-light">
        <div class="container">
           <div class="row">
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg p-5 h-100">
                        <h3 class="text-center mb-4 text-primary">VISI</h3>
                        <p class="lead text-center fst-italic">"{{ $schoolProfile->vision ?? 'Menjadi madrasah unggul yang melahirkan generasi cerdas, mandiri, dan berakhlak mulia.' }}"</p>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block bg-white shadow-lg p-5 h-100">
                        <h3 class="text-center mb-4 text-primary">MISI</h3>
                         <div class="content-text">
                            {!! nl2br(e($schoolProfile->mission ?? 'Data misi belum tersedia.')) !!}
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>
@endsection