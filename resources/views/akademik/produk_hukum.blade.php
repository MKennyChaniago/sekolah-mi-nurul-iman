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
                    <h2 class="text-white">Dokumen & Produk Hukum</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    
                    <div class="custom-block bg-white shadow-lg p-5">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-3">Judul Dokumen</th>
                                        <th class="py-3">Kategori</th>
                                        <th class="py-3 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($documents as $document)
                                    <tr>
                                        <td class="align-middle">
                                            <i class="bi-file-earmark-text me-2 text-secondary"></i>
                                            {{ $document->title }}
                                        </td>
                                        <td class="align-middle"><span class="badge bg-info text-dark">{{ $document->category }}</span></td>
                                        <td class="text-center align-middle">
                                            <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn custom-btn btn-sm">
                                                <i class="bi-download me-1"></i> Unduh
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-4">Belum ada dokumen yang diunggah.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection