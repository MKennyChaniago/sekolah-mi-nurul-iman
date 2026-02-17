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
                        <a href="{{ route('kontak') }}" class="btn btn-warning custom-btn custom-border-btn me-lg-3 mb-2 mb-lg-0">PPDB T.A. 2025/2026 DIBUKA!</a>
                        <a href="{{ route('login') }}" class="btn custom-btn custom-border-btn">Login Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-section py-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-12 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg p-4">
                        <h2 class="mb-3">SAMBUTAN KEPALA MADRASAH</h2>
                        <div class="text-center mb-4">
                            <img src="{{ asset('images/kepala/kepala-madrasah.jpeg') }}"
                                class="rounded-circle shadow-sm mb-3"
                                style="width:130px;height:130px;object-fit:cover;"
                                alt="Kepala Madrasah">

                            <h4 class="fw-bold mb-1">Ahmad Hanafi</h4>
                            <p class="text-muted mb-0">Kepala MI Nurul Iman</p>
                        </div>

                        <p>Assalamualaikum Warahmatullahi Wabarakatuh,</p>
                        <p>Dengan rahmat Allah SWT, kami menyambut baik kehadiran Anda di website resmi MI Nurul Iman. Website ini kami dedikasikan sebagai sarana informasi, komunikasi, dan publikasi segala kegiatan akademik dan non-akademik madrasah kami. Kami berharap website ini dapat menjadi jembatan penghubung yang efektif antara madrasah, siswa, orang tua, dan masyarakat.</p>
                        <a href="#" class="btn btn-link p-0">Baca Sambutan Lengkap...</a>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="custom-block custom-block-overlay p-4 bg-light shadow-lg">
                        <h4 class="mb-3 text-dark">INFORMASI PENTING</h4>
                        <hr>
                        <ul class="list-unstyled">
                             <li><a href="#" class="text-dark d-block py-1"><i class="bi-file-earmark-text-fill me-2"></i> Pengumuman Kelulusan Siswa Kelas VI</a></li>
                             <li><a href="#" class="text-dark d-block py-1"><i class="bi-calendar-check-fill me-2"></i> Jadwal Pendaftaran Siswa Baru (PPDB)</a></li>
                             <li><a href="#" class="text-dark d-block py-1"><i class="bi-download me-2"></i> Download Formulir Pendaftaran</a></li>
                        </ul>
                        <a href="#" class="btn custom-btn btn-sm mt-3">Semua Pengumuman</a>
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
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="#">
                                    <img src="{{ asset('images/berita/kegiatan-olahraga.jpg') }}" class="custom-block-image img-fluid" alt="Kegiatan Olahraga">
                                    <div class="d-flex p-3">
                                        <div>
                                            <h5 class="mb-2">Juara 1 Lomba Olahraga Antar Madrasah</h5>
                                            <p class="mb-0 text-muted small"><i class="bi-calendar me-1"></i> 15 November 2025</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="#">
                                    <img src="{{ asset('images/berita/rapat-guru.jpg') }}" class="custom-block-image img-fluid" alt="Rapat Guru">
                                    <div class="d-flex p-3">
                                        <div>
                                            <h5 class="mb-2">Rapat Persiapan Ujian Semester Ganjil</h5>
                                            <p class="mb-0 text-muted small"><i class="bi-calendar me-1"></i> 01 November 2025</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="#">
                                    <img src="{{ asset('images/berita/pramuka.jpg') }}" class="custom-block-image img-fluid" alt="Kegiatan Pramuka">
                                    <div class="d-flex p-3">
                                        <div>
                                            <h5 class="mb-2">Latihan Rutin Pramuka: Menjaga Semangat Persatuan</h5>
                                            <p class="mb-0 text-muted small"><i class="bi-calendar me-1"></i> 29 Oktober 2025</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-12 text-center mt-3">
                             <a href="#" class="btn custom-btn custom-border-btn">Lihat Semua Berita</a>
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
                                <p class="text-white">Menjadi madrasah unggul yang melahirkan generasi cerdas, mandiri, dan berakhlak mulia di era digital.</p>
                                <div class="icon-holder">
                                  <i class="bi-brightness-high"></i>
                                </div>
                            </li>
                            
                            <li>
                                <h4 class="text-white mb-3">Misi 1: Keunggulan Akademik</h4>
                                <p class="text-white">Meningkatkan mutu pembelajaran berbasis teknologi untuk mencapai prestasi akademik yang optimal.</p>
                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-3">Misi 2: Pembentukan Karakter</h4>
                                <p class="text-white">Membentuk peserta didik yang berkarakter islami, memiliki kedisiplinan tinggi, dan bertanggung jawab terhadap lingkungan.</p>
                                <div class="icon-holder">
                                  <i class="bi-people-fill"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-12 text-center mt-5">
                    <a href="#" class="btn custom-btn custom-border-btn ms-3">Lihat Profil Lengkap</a>
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
                
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto1.jpg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 1">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto2.jpg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 2">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/galeri/foto3.jpg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 3">
                </div>
                
                <div class="col-12 text-center mt-3">
                     <a href="#" class="btn custom-btn custom-border-btn">Lihat Semua Foto & Video</a>
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
                    <iframe class="google-map" src="https://maps.google.com/maps?q=Nama%20Sekolah%20Anda&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-7 col-12 ms-auto">
                    <h4 class="mb-3">MI NURUL IMAN</h4>
                    
                    <p class="d-flex align-items-center mb-2">
                        <i class="bi-geo-alt me-2"></i>
                        Jl. Nama Jalan Sekolah Anda No. XXX, Kota Anda
                    </p>

                    <p class="d-flex align-items-center mb-2">
                        <i class="bi-telephone me-2"></i>
                        <a href="tel:1234567890" class="site-footer-link">123-456-7890 (Telepon Kantor)</a>
                    </p>

                    <p class="d-flex align-items-center mb-2">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:info@minuruliman.sch.id" class="site-footer-link">info@minuruliman.sch.id</a>
                    </p>

                    <h4 class="mt-4 mb-3">Media Sosial</h4>
                    <ul class="social-icon">
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-facebook"></a></li>
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-twitter"></a></li>
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-youtube"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection