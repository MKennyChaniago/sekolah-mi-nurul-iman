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
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="{{ asset('images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Juara 1 Lomba Sains Tingkat Kabupaten</h5>
                                    <p class="mb-0">Berita Listing ini akan digunakan untuk menampilkan daftar artikel yang diambil dari database. Anda dapat memodifikasi template ini.</p>
                                    <a href="{{ route('berita.detail', ['slug' => 'juara-lomba-sains']) }}" class="btn custom-btn mt-3 mt-lg-4">Baca Selengkapnya</a>
                                </div>
                                <span class="badge bg-design rounded-pill ms-auto">BARU</span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="{{ asset('images/topics/undraw_online_ad_re_ol62.png') }}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Penyambutan Siswa Baru dan Masa Pengenalan</h5>
                                    <p class="mb-0">Kunjungi halaman ini untuk melihat semua kegiatan dan galeri foto penyambutan siswa baru MI Nurul Iman.</p>
                                    <a href="{{ route('berita.detail', ['slug' => 'penyambutan-siswa-baru']) }}" class="btn custom-btn mt-3 mt-lg-4">Baca Selengkapnya</a>
                                </div>
                                <span class="badge bg-advertising rounded-pill ms-auto">3 Hari Lalu</span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="{{ asset('images/topics/undraw_Podcast_audience_re_4i5q.png') }}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Kerja Sama dengan Puskesmas Setempat</h5>
                                    <p class="mb-0">Kegiatan penyuluhan kesehatan gigi dan mulut untuk siswa kelas 1-3.</p>
                                    <a href="{{ route('berita.detail', ['slug' => 'kerjasama-puskesmas']) }}" class="btn custom-btn mt-3 mt-lg-4">Baca Selengkapnya</a>
                                </div>
                                <span class="badge bg-music rounded-pill ms-auto">LAMA</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">Prev</span></a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>

    @endsection