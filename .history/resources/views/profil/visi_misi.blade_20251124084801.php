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
                    <h2 class="text-white">Visi dan Misi MI Nurul Iman</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    
                    <h3 class="mb-4 text-center">Visi</h3>
                    <blockquote class="text-center">
                        "Terwujudnya Generasi Emas yang Cerdas, Mandiri, dan Berakhlak Karimah di Era Digital."
                    </blockquote>
                    
                    <h3 class="mb-3 mt-5">Misi</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi-check-circle-fill me-2 text-success"></i>Meningkatkan kualitas pembelajaran yang terintegrasi dengan teknologi.</li>
                        <li class="mb-3"><i class="bi-check-circle-fill me-2 text-success"></i>Menanamkan nilai-nilai keislaman dan etika dalam setiap kegiatan.</li>
                        <li class="mb-3"><i class="bi-check-circle-fill me-2 text-success"></i>Mengembangkan potensi akademik dan non-akademik peserta didik.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection