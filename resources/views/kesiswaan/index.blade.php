@extends('layouts.frontend')

@section('title', 'Kesiswaan')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kesiswaan</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Informasi Kesiswaan & Ekstrakurikuler</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <h3>Program Unggulan Kesiswaan</h3>
                    <p>Halaman ini akan menampilkan informasi lengkap terkait kegiatan kesiswaan, seperti tata tertib, kalender akademik kesiswaan, dan daftar ekstrakurikuler.</p>
                    
                    <h4 class="mt-4">Daftar Ekstrakurikuler</h4>
                    <ul>
                        <li>Pramuka</li>
                        <li>Futsal</li>
                        <li>Seni Tari</li>
                        <li>Tahfidz Qur'an</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection