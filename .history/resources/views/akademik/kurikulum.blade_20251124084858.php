@extends('layouts.frontend')

@section('title', 'Kurikulum')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Akademik</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kurikulum</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Kurikulum & Mata Pelajaran</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <h3>Kurikulum yang Diterapkan</h3>
                    <p>MI Nurul Iman menerapkan Kurikulum Merdeka yang dipadukan dengan kurikulum khas Madrasah (Kurikulum Kemenag) untuk memperkuat pendidikan agama dan karakter islami.</p>
                    
                    <h4 class="mt-4">Mata Pelajaran Khas Madrasah</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr><th>Mata Pelajaran</th><th>Keterangan</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Al-Qur'an Hadits</td><td>Inti dari pembelajaran agama.</td></tr>
                            <tr><td>Bahasa Arab</td><td>Pengantar untuk memahami kitab-kitab Islam.</td></tr>
                            <tr><td>Fiqih</td><td>Pembelajaran hukum-hukum Islam.</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection