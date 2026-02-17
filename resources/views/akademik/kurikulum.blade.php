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
                    <h2 class="text-white">Struktur Kurikulum</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="custom-block bg-white shadow-lg p-5">
                        <h3 class="mb-4 text-center">Daftar Mata Pelajaran</h3>
                        
                        @forelse($subjects as $group => $groupedSubjects)
                            <h4 class="mt-4 mb-3 ps-2 border-start border-4 border-warning">
                                @if($group == 'A')
                                    Kelompok A (Wajib)
                                @elseif($group == 'B')
                                    Kelompok B (Wajib)
                                @elseif($group == 'C')
                                    Kelompok C (Peminatan)
                                @elseif($group == 'Mulok')
                                    Muatan Lokal
                                @else
                                    Kelompok {{ $group }}
                                @endif
                            </h4>
                            
                            <div class="table-responsive mb-4">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 50px;">No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($groupedSubjects as $index => $subject)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $subject->name }}</td>
                                            <td>{{ $subject->grades ?? 'Semua Kelas' }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @empty
                            <div class="alert alert-info text-center">Data kurikulum belum tersedia.</div>
                        @endforelse
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection