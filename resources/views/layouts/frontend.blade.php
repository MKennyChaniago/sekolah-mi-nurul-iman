<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="Website Resmi Madrasah Ibtidaiyah Nurul Iman. Informasi PPDB, Kurikulum, dan Kegiatan Siswa.">
        <meta name="author" content="MI Nurul Iman Developer Team">

        <title>MI Nurul Iman | @yield('title', 'Beranda')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
        
        @yield('styles')
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo/logo-mi.png') }}"
                            alt="Logo MI Nurul Iman"
                            height="40">

                        <span class="fw-bold">MI NURUL IMAN</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="{{ route('login') }}" class="navbar-icon bi-person" title="Login Admin"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->routeIs('profil.*') ? 'active' : '' }}" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PROFIL</a>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="profilDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profil.sejarah') }}">Sejarah Madrasah</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profil.visi_misi') }}">Visi & Misi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profil.struktur') }}">Struktur Organisasi</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll {{ request()->routeIs('kesiswaan') ? 'active' : '' }}" href="{{ route('kesiswaan') }}">KESISWAAN</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll {{ request()->routeIs('berita.*') ? 'active' : '' }}" href="{{ route('berita.listing') }}">BERITA & ARTIKEL</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->routeIs('akademik.*') ? 'active' : '' }}" href="#" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">AKADEMIK</a>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="akademikDropdown">
                                    <li><a class="dropdown-item" href="{{ route('akademik.kurikulum') }}">Kurikulum</a></li>
                                    <li><a class="dropdown-item" href="{{ route('akademik.guru_staff') }}">Guru & Staff</a></li>
                                    <li><a class="dropdown-item" href="{{ route('akademik.produk_hukum') }}">Produk Hukum</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll {{ request()->routeIs('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">GALERI</a>
                            </li>



                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="{{ route('login') }}" class="navbar-icon bi-person" title="Login Admin"></a>
                        </div>
                    </div>
                </div>
            </nav>
            
            @yield('content')

        </main>

        <footer class="site-footer py-5 shadow-sm bg-white border-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="{{ route('home') }}">
                            <i class="bi-house-door-fill text-primary"></i>
                            <span class="text-dark">MI Nurul Iman</span>
                        </a>
                        <p class="text-muted mt-3">{{ $schoolProfile->address ?? 'Alamat sekolah belum diatur.' }}</p>
                        @if($schoolProfile->email)
                            <p class="text-muted">Email: {{ $schoolProfile->email }}</p>
                        @endif
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3 text-dark">Tautan Cepat</h6>
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item"><a href="{{ route('home') }}" class="site-footer-link text-muted">Home</a></li>
                            <li class="site-footer-link-item"><a href="{{ route('profil.sejarah') }}" class="site-footer-link text-muted">Profil Sekolah</a></li>
                            <li class="site-footer-link-item"><a href="{{ route('berita.listing') }}" class="site-footer-link text-muted">Berita Terbaru</a></li>
                            <li class="site-footer-link-item"><a href="{{ route('galeri') }}" class="site-footer-link text-muted">Galeri Foto</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3 text-dark">Kontak Kami</h6>
                        @if($schoolProfile->phone)
                        <p class="text-muted d-flex mb-1">
                            <i class="bi-telephone me-2"></i>
                            <a href="tel:{{ $schoolProfile->phone }}" class="site-footer-link text-muted">{{ $schoolProfile->phone }}</a>
                        </p>
                        @endif
                        
                        @if($schoolProfile->email)
                        <p class="text-muted d-flex">
                            <i class="bi-envelope me-2"></i>
                            <a href="mailto:{{ $schoolProfile->email }}" class="site-footer-link text-muted">{{ $schoolProfile->email }}</a>
                        </p>
                        @else
                         <p class="text-muted">Belum ada info kontak.</p>
                        @endif
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <h6 class="site-footer-title mb-3 text-dark">Media Sosial</h6>
                        <ul class="social-icon">
                            @if($schoolProfile->facebook)
                                <li class="social-icon-item"><a href="{{ $schoolProfile->facebook }}" class="social-icon-link bi-facebook text-muted"></a></li>
                            @endif
                            @if($schoolProfile->instagram)
                                <li class="social-icon-item"><a href="{{ $schoolProfile->instagram }}" class="social-icon-link bi-instagram text-muted"></a></li>
                            @endif
                            @if($schoolProfile->youtube)
                                <li class="social-icon-item"><a href="{{ $schoolProfile->youtube }}" class="social-icon-link bi-youtube text-muted"></a></li>
                            @endif
                            
                            @if(!$schoolProfile->facebook && !$schoolProfile->instagram && !$schoolProfile->youtube)
                                <li class="text-muted small">Belum ada media sosial.</li>
                            @endif
                        </ul>

                        <p class="copyright-text mt-lg-5 mt-4 text-muted">Copyright © {{ date('Y') }} MI Nurul Iman. All rights reserved.</p>
                    </div>

                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

        @yield('scripts')
    </body>
</html>