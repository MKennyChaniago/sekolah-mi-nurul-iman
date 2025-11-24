@extends('layouts.frontend')

@section('title', 'Produk Hukum')

@section('content')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Akademik</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Produk Hukum</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Dokumen & Produk Hukum Madrasah</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    
                    <p class="mb-5">Halaman ini menyediakan akses ke dokumen dan peraturan resmi terkait kebijakan akademik dan administrasi di MI Nurul Iman.</p>
                    
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Keputusan Kepala Madrasah tentang Kurikulum Merdeka 2025</h5>
                                <small class="text-muted">Nomor 01/SK/MI-NI/VII/2025 | Tipe: SK</small>
                            </div>
                            <span class="badge bg-primary rounded-pill"><i class="bi-cloud-download me-1"></i> Unduh</span>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Peraturan Akademik MI Nurul Iman Tahun Pelajaran 2025/2026</h5>
                                <small class="text-muted">Tanggal Rilis: 10 Juli 2025 | Tipe: Peraturan</small>
                            </div>
                            <span class="badge bg-success rounded-pill"><i class="bi-cloud-download me-1"></i> Unduh</span>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Juknis Penerimaan Peserta Didik Baru (PPDB) 2026</h5>
                                <small class="text-muted">Tanggal Rilis: 01 September 2025 | Tipe: Juknis</small>
                            </div>
                            <span class="badge bg-warning text-dark rounded-pill"><i class="bi-cloud-download me-1"></i> Unduh</span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection