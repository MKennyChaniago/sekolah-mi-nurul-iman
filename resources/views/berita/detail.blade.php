@extends('layouts.frontend')

@section('title', 'Detail Berita')

@section('content')

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-12 mb-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Web Design</li>
                        </ol>
                    </nav>

                    <h2 class="text-white">Judul Berita/Artikel Disini</h2>

                    <div class="d-flex align-items-center mt-5">
                        <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Baca Lanjut</a>
                        <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="topics-detail-block bg-white shadow-lg">
                        <img src="{{ asset('images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="topics-detail-block-image img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section class="topics-detail-section section-padding" id="topics-detail">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 m-auto">
                    <h3 class="mb-4">Pendahuluan Artikel (Disederhanakan)</h3>

                    <p>Konten artikel ini akan diambil dari database. Ini adalah tempat yang bagus untuk menampilkan semua detail berita atau kegiatan sekolah, lengkap dengan gambar, kutipan, dan informasi terkait.</p>

                    <p><strong>Penting:</strong> Di Laravel, konten ini biasanya di-*loop* atau diisi secara dinamis dari database setelah Anda melakukan *query* di *Controller*.</p>

                    <blockquote>
                        "Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, Anda dapat mengubah dunia." - Nelson Mandela (Kutipan Contoh)
                    </blockquote>

                    <div class="row my-4">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="{{ asset('images/businesswoman-using-tablet-analysis.jpg') }}" class="topics-detail-block-image img-fluid">
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                            <img src="{{ asset('images/colleagues-working-cozy-office-medium-shot.jpg') }}" class="topics-detail-block-image img-fluid">
                        </div>
                    </div>

                    <p>Bagian ini juga dapat digunakan untuk menampilkan komentar, data penulis berita (admin), dan tanggal publikasi.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-5 col-12">
                    <img src="{{ asset('images/rear-view-young-college-student.jpg') }}" class="newsletter-image img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                    <form class="custom-form subscribe-form" action="#" method="post" role="form">
                        <h4 class="mb-4 pb-2">Informasi Pendaftaran Siswa Baru</h4>
                        
                        @csrf 

                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Masukkan Email Anda" required="">

                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">Dapatkan Info Terbaru</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection