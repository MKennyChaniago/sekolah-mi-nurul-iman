@extends('layouts.frontend')

@section('title', 'Beranda')

@section('content')

    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto"> 
                    
                    <h1 class="text-white text-center">MADRASAH HEBAT BERMARTABAT</h1>
                    <h4 class="text-white text-center">SELAMAT DATANG DI MI NURUL IMAN</h4>
                    <h6 class="text-center text-white-50 mt-3">Mencetak Generasi Unggul Berakhlak Karimah</h6>

                    <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-3" action="#" role="search">
                        </form>
                    
                    <div class="text-center mt-4 d-flex justify-content-center flex-wrap">
                        <a href="{{ $profile->ppdb_link ?? '#' }}" target="_blank" class="btn btn-warning custom-btn custom-border-btn me-lg-3 mb-2 mb-lg-0">PPDB T.A. 2025/2026 DIBUKA!</a>
                        <a href="{{ route('login') }}" class="btn custom-btn custom-border-btn">Login Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-section py-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-7 col-12 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg p-4 h-100">
                        
                        <div class="text-center mb-4">
                            @if($profile && $profile->headmaster_photo)
                                <img src="{{ asset('storage/' . $profile->headmaster_photo) }}"
                                    class="rounded-circle shadow-sm mb-3"
                                    style="width:130px;height:130px;object-fit:cover;"
                                    alt="Kepala Madrasah">
                            @else
                                <img src="{{ asset('images/kepala/kepala-madrasah.jpeg') }}"
                                    class="rounded-circle shadow-sm mb-3"
                                    style="width:130px;height:130px;object-fit:cover;"
                                    alt="Kepala Madrasah">
                            @endif

                            <h4 class="fw-bold mb-1">{{ $profile->headmaster_name ?? 'Ahmad Hanafi' }}</h4>
                            <p class="text-muted mb-0">Kepala MI Nurul Iman</p>
                        </div>

                        <p>Assalamualaikum Warahmatullahi Wabarakatuh,</p>
                        <div class="text-muted">
                            {!! nl2br(e($profile->headmaster_welcome ?? 'Selamat datang di website resmi MI Nurul Iman. Kami berkomitmen untuk memberikan pendidikan terbaik bagi putra-putri Anda.')) !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="custom-block p-4 bg-white shadow-lg h-100 border-top border-4 border-primary">
                        <h4 class="mb-4 text-dark text-center">PROGRAM UNGGULAN</h4>
                        
                        <div class="d-flex flex-column gap-3">
                            @forelse($programs as $program)
                                <div class="d-flex align-items-center p-3 rounded bg-light hover-shadow transition-all">
                                    <div class="flex-shrink-0">
                                        <i class="bi-check-circle-fill text-primary fs-4"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-bold">{{ $program->title }}</h6>
                                    </div>
                                </div>
                            @empty
                                <div class="d-flex align-items-center p-3 rounded bg-light">
                                    <i class="bi-file-earmark-text-fill me-3 text-primary fs-5"></i>
                                    <span class="fw-bold">Tahfidz Qur'an</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded bg-light">
                                    <i class="bi-calendar-check-fill me-3 text-primary fs-5"></i>
                                    <span class="fw-bold">Bahasa Arab Intensif</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded bg-light">
                                    <i class="bi-laptop me-3 text-primary fs-5"></i>
                                    <span class="fw-bold">Sains & Teknologi</span>
                                </div>
                            @endforelse
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('kesiswaan') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">Lihat Selengkapnya <i class="bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="explore-section section-padding bg-white" id="berita-artikel">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-4">BERITA & KEGIATAN TERBARU</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @forelse($beritaTerbaru as $berita)
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="custom-block bg-white shadow-lg h-100">
                                <a href="{{ route('berita.detail', $berita->slug) }}">
                                    @if($berita->thumbnail)
                                        <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="custom-block-image img-fluid w-100" style="height: 250px; object-fit: cover;" alt="{{ $berita->title }}">
                                    @else
                                        <img src="{{ asset('images/berita/kegiatan-olahraga.jpg') }}" class="custom-block-image img-fluid w-100" style="height: 250px; object-fit: cover;" alt="Default Image">
                                    @endif
                                    
                                    <div class="d-flex p-3">
                                        <div>
                                            <h5 class="mb-2 text-truncate" style="max-width: 300px;">{{ $berita->title }}</h5>
                                            <p class="mb-0 text-muted small">
                                                <i class="bi-calendar me-1"></i> {{ $berita->published_at ? date('d M Y', strtotime($berita->published_at)) : $berita->created_at->format('d M Y') }}
                                                <span class="mx-2">|</span>
                                                <i class="bi-tag me-1"></i> {{ $berita->category }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 text-center">
                            <p>Belum ada berita terbaru.</p>
                        </div>
                        @endforelse
                        
                        <div class="col-12 text-center mt-3">
                             <a href="{{ route('berita.listing') }}" class="btn custom-btn custom-border-btn">Lihat Semua Berita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="timeline-section section-padding" id="visi-misi">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Visi & Misi MI Nurul Iman</h1>
                </div>

                <div class="col-lg-10 col-12 mx-auto">
                    <div class="timeline-container">
                        <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                            <div class="list-progress">
                                <div class="inner"></div>
                            </div>

                            <li>
                                <h4 class="text-white mb-3">Visi Madrasah</h4>
                                <p class="text-white">{{ $profile->vision ?? 'Menjadi madrasah unggul yang melahirkan generasi cerdas, mandiri, dan berakhlak mulia.' }}</p>
                                <div class="icon-holder">
                                  <i class="bi-brightness-high"></i>
                                </div>
                            </li>
                            
                            <!-- Menampilkan Misi - Jika formatnya poin-poin/text panjang, kita tampilkan saja -->
                             <li>
                                <h4 class="text-white mb-3">Misi Madrasah</h4>
                                <div class="text-white fw-light">
                                    {!! nl2br(e($profile->mission ?? '1. Meningkatkan mutu pendidikan.\n2. Membentuk karakter islami.')) !!}
                                </div>
                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-12 text-center mt-5">
                    <a href="{{ route('profil.visi_misi') }}" class="btn custom-btn custom-border-btn ms-3">Lihat Detail Profil</a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section section-padding" id="galeri">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">GALERI KEGIATAN</h2>
                </div>
                
                @forelse($homeGalleries as $gallery)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid rounded shadow-sm w-100" style="height: 250px; object-fit: cover;" alt="{{ $gallery->title }}">
                </div>
                @empty
                 <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto1.jpg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 1">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto2.jpg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 2">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto3.jpg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 3">
                </div>
                @endforelse
                
                <div class="col-12 text-center mt-3">
                     <a href="{{ route('galeri') }}" class="btn custom-btn custom-border-btn">Lihat Semua Galeri</a>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding section-bg" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">HUBUNGI KAMI</h2>
                </div>

                <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                    <iframe class="google-map" src="{{ $schoolProfile->maps_embed ?? 'https://maps.google.com/maps?q=MI%20Nurul%20Iman&t=&z=13&ie=UTF8&iwloc=&output=embed' }}" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-7 col-12 ms-auto">
                    <h4 class="mb-3">MI NURUL IMAN</h4>
                    
                    <p class="d-flex align-items-center mb-2">
                        <i class="bi-geo-alt me-2"></i>
                        {{ $schoolProfile->address ?? 'Jl. Contoh No. 123, Kota Anda' }}
                    </p>

                    <p class="d-flex align-items-center mb-2">
                        <i class="bi-telephone me-2"></i>
                        <a href="tel:{{ $schoolProfile->phone ?? '#' }}" class="site-footer-link">{{ $schoolProfile->phone ?? '0812-3456-789' }}</a>
                    </p>

                    <p class="d-flex align-items-center mb-2">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:{{ $schoolProfile->email ?? '#' }}" class="site-footer-link">{{ $schoolProfile->email ?? 'info@minuruliman.sch.id' }}</a>
                    </p>

                    <h4 class="mt-4 mb-3">Media Sosial</h4>
                    <ul class="social-icon">
                        @if($schoolProfile->facebook)
                            <li class="social-icon-item"><a href="{{ $schoolProfile->facebook }}" class="social-icon-link bi-facebook"></a></li>
                        @endif
                        @if($schoolProfile->instagram)
                            <li class="social-icon-item"><a href="{{ $schoolProfile->instagram }}" class="social-icon-link bi-instagram"></a></li>
                        @endif
                        @if($schoolProfile->youtube)
                            <li class="social-icon-item"><a href="{{ $schoolProfile->youtube }}" class="social-icon-link bi-youtube"></a></li>
                        @endif
                        @if(!$schoolProfile->facebook && !$schoolProfile->instagram && !$schoolProfile->youtube)
                             <li class="social-icon-item"><span class="text-muted small">Belum ada media sosial.</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection