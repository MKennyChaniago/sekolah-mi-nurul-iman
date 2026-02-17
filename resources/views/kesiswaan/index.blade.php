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
                    <h2 class="text-white">Kesiswaan & Ekstrakurikuler</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                
                <!-- Program Unggulan Section -->
                <div class="col-lg-12 col-12 mb-5">
                    <h3 class="mb-4 text-center">Program Unggulan</h3>
                    <div class="row">
                        @forelse($programs as $program)
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="custom-block bg-white shadow-lg p-4 h-100 border-top border-4 border-primary">
                                <h5 class="mb-3 text-primary">{{ $program->title }}</h5>
                                <p>{{ $program->description }}</p>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 text-center">
                            <div class="alert alert-info">Belum ada data program unggulan.</div>
                        </div>
                        @endforelse
                    </div>
                </div>

                <hr class="mb-5">

                <!-- Ekstrakurikuler Section -->
                <div class="col-lg-12 col-12">
                    <h3 class="mb-4 text-center">Ekstrakurikuler</h3>
                    <div class="table-responsive shadow-lg rounded">
                        <table class="table table-hover table-striped mb-0">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th class="py-3 px-4">Nama Kegiatan</th>
                                    <th class="py-3 px-4">Jadwal Latihan</th>
                                    <th class="py-3 px-4">Pembina</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($ekskuls as $ekskul)
                                <tr>
                                    <td class="fw-bold px-4">{{ $ekskul->name }}</td>
                                    <td class="px-4">{{ $ekskul->schedule ?? '-' }}</td>
                                    <td class="px-4">{{ $ekskul->instructor ?? '-' }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4">Belum ada data ekstrakurikuler.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection