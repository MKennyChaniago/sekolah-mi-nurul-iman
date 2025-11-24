@extends('layouts.frontend')

@section('title', 'Beranda Sekolah SLB')

@section('content')

    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center">SELAMAT DATANG DI WEBSITE RESMI</h1>
                    <h4 class="text-white text-center">MIN 1 KUTAI KARTANEGARA</h4>
                    <h6 class="text-center text-white-50 mt-3">Platform Informasi, Akademik, dan Kegiatan Madrasah</h6>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-warning custom-btn custom-border-btn">PPDB T.A. 2025/2026 DIBUKA!</a>
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
                        <div class="d-flex mb-3">
                            <img src="{{ asset('images/kepala-sekolah.jpg') }}" class="img-fluid me-3" style="width: 150px; height: auto; object-fit: cover;" alt="Kepala Madrasah">
                            <div>
                                <h5 class="mb-1">Iwan Hartono, S.Pd.I</h5>
                                <p class="text-muted">Kepala Madrasah</p>
                            </div>
                        </div>

                        <p>Assalamualaikum Warahmatullahi Wabarakatuh,</p>
                        <p>Tiada kata yang lebih indah kecuali ungkapan rasa syukur kita kepada Allah SWT Tuhan semesta alam yang memberikan rahmat-Nya sehingga website ini dapat terbangun. Website yang sedang anda simak ini, merupakan sebuah karya yang mencoba memberi gambaran kepada pembaca yang budiman untuk mengetahui perjalanan sebuah madrasah dari kondisi tidak diminati masyarakat sampai menjadi madrasah pilihan umat.</p>
                        <a href="#" class="btn btn-link p-0">Baca Selengkapnya...</a>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="custom-block custom-block-overlay p-4 bg-light shadow-lg">
                        <h4 class="mb-3 text-dark">INFO PENTING</h4>
                        <hr>
                        <p class="mb-2">Download Juknis PPDB 2025</p>
                        <p class="mb-2">Jadwal Ujian Sekolah</p>
                        <a href="#" class="btn custom-btn btn-sm mt-3">Lihat Semua Pengumuman</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="explore-section section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-4">BERITA & ARTIKEL TERBARU</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="#">
                                            <div class="d-flex p-3">
                                                <div>
                                                    <h5 class="mb-2">Sosialisasi Transisi Pendidikan</h5>
                                                    <p class="mb-0 text-muted small">Tanggal 08-08-2024</p>
                                                </div>
                                            </div>
                                            <img src="{{ asset('images/berita/sosialisasi.jpg') }}" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="#">
                                            <div class="d-flex p-3">
                                                <div>
                                                    <h5 class="mb-2">Kerjasama UKM Puskesmas</h5>
                                                    <p class="mb-0 text-muted small">Tanggal 07-08-2024</p>
                                                </div>
                                            </div>
                                            <img src="{{ asset('images/berita/kerjasama.jpg') }}" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="#">
                                            <div class="d-flex p-3">
                                                <div>
                                                    <h5 class="mb-2">Penyambutan Siswa Baru</h5>
                                                    <p class="mb-0 text-muted small">Tanggal 01-08-2024</p>
                                                </div>
                                            </div>
                                            <img src="{{ asset('images/berita/siswa-baru.jpg') }}" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="timeline-section section-padding" id="section_3">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">How does it work?</h1>
                </div>

                <div class="col-lg-10 col-12 mx-auto">
                    <div class="timeline-container">
                        <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                            <div class="list-progress">
                                <div class="inner"></div>
                            </div>

                            <li>
                                <h4 class="text-white mb-3">Search your favourite topic</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, cumque magnam? Sequi, cupiditate quibusdam alias illum sed esse ad dignissimos libero sunt, quisquam numquam aliquam? Voluptas, accusamus omnis?</p>
                                <div class="icon-holder">
                                  <i class="bi-search"></i>
                                </div>
                            </li>
                            
                            <li>
                                <h4 class="text-white mb-3">Bookmark & Keep it for yourself</h4>
                                <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis est vel quo, nihil repellat quia velit error modi earum similique odit labore. Doloremque, repudiandae?</p>
                                <div class="icon-holder">
                                  <i class="bi-bookmark"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-3">Read & Enjoy</h4>
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi vero quisquam, rem assumenda similique voluptas distinctio, iste est hic eveniet debitis ut ducimus beatae id? Quam culpa deleniti officiis autem?</p>
                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <p class="text-white">
                        Want to learn more?
                        <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Frequently Asked Questions</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-5 col-12">
                    <img src="{{ asset('images/faq_graphic.jpg') }}" class="img-fluid" alt="FAQs">
                </div>

                <div class="col-lg-6 col-12 m-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is Topic Listing?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How to find a topic?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can search on Google with <strong>keywords</strong> such as templatemo portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Does it need to paid?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">Get in touch</h2>
                </div>

                <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                    <h4 class="mb-3">Head office</h4>
                    <p>Bay St &, Larkin St, San Francisco, CA 94109, United States</p>
                    <hr>
                    <p class="d-flex align-items-center mb-1">
                        <span class="me-2">Phone</span>
                        <a href="tel: 305-240-9671" class="site-footer-link">305-240-9671</a>
                    </p>
                    <p class="d-flex align-items-center">
                        <span class="me-2">Email</span>
                        <a href="mailto:info@company.com" class="site-footer-link">info@company.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mx-auto">
                    <h4 class="mb-3">Dubai office</h4>
                    <p>Burj Park, Downtown Dubai, United Arab Emirates</p>
                    <hr>
                    <p class="d-flex align-items-center mb-1">
                        <span class="me-2">Phone</span>
                        <a href="tel: 110-220-3400" class="site-footer-link">110-220-3400</a>
                    </p>
                    <p class="d-flex align-items-center">
                        <span class="me-2">Email</span>
                        <a href="mailto:info@company.com" class="site-footer-link">info@company.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection