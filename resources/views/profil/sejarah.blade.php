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
                    <h3>COBA</h3>
                    <p>Konten sejarah MI Nurul Iman akan diletakkan di sini. Anda dapat menyalin teks panjang mengenai sejarah dan perkembangan sekolah di bagian ini.</p>
                    <p>Misalnya, informasi tahun berdiri, pendiri, dan tonggak sejarah penting madrasah.</p>
                    
                    <h4 class="mt-4">Perkembangan dan Visi</h4>
                    <p>Sejak didirikan pada tahun [Tahun], MI Nurul Iman terus berkomitmen menyediakan pendidikan terbaik...</p>
                    
                    </div>
            </div>
        </div>
    </section>

@endsection