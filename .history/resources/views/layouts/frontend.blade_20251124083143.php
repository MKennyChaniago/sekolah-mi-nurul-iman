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
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <i class="bi-house-door-fill"></i>
                        <span>MI NURUL IMAN</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="{{ route('admin.login') }}" class="navbar-icon bi-person smoothscroll" title="Login Admin"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('home') }}">HOME</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PROFIL</a>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="profilDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profil.sejarah') }}">Sejarah Madrasah</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profil.visi_misi') }}">Visi & Misi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profil.struktur') }}">Struktur Organisasi</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('kesiswaan') }}">KESISWAAN</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('berita.listing') }}">BERITA & ARTIKEL</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">AKADEMIK</a>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="akademikDropdown">
                                    <li><a class="dropdown-item" href="{{ route('akademik.kurikulum') }}">Kurikulum</a></li>
                                    <li><a class="dropdown-item" href="{{ route('akademik.guru_staff') }}">Guru & Staff</a></li>
                                    <li><a class="dropdown-item" href="{{ route('akademik.produk_hukum') }}">Produk Hukum</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('galeri') }}">GALERI</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('kontak') }}">KONTAK</a>
                            </li>

                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="{{ route('admin.login') }}" class="navbar-icon bi-person smoothscroll" title="Login Admin"></a>
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')


        </main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="{{ route('home') }}">
                            <i class="bi-house-door-fill"></i>
                            <span>MI Nurul Iman</span>
                        </a>
                        <p class="text-white-50 mt-3">Jl. Nama Jalan Sekolah Anda, Kota Anda.</p>
                        <p class="text-white-50">Email: info@minuruliman.sch.id</p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Tautan Cepat</h6>
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item"><a href="{{ route('home') }}" class="site-footer-link">Home</a></li>
                            <li class="site-footer-link-item"><a href="#" class="site-footer-link">PPDB Online</a></li>
                            <li class="site-footer-link-item"><a href="#berita-artikel" class="site-footer-link">Berita Terbaru</a></li>
                            <li class="site-footer-link-item"><a href="#contact-section" class="site-footer-link">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Kontak Kami</h6>
                        <p class="text-white d-flex mb-1">
                            <i class="bi-telephone me-2"></i>
                            <a href="tel: 123-456-7890" class="site-footer-link">123-456-7890 (Kantor)</a>
                        </p>
                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>
                            <a href="mailto:info@minuruliman.sch.id" class="site-footer-link">info@minuruliman.sch.id</a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Indonesia</button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">English</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © {{ date('Y') }} MI Nurul Iman. All rights reserved.
                        <br><br>Design Template: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                        
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