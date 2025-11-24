@extends('layouts.frontend')

@section('title', 'Hubungi Kami')

@section('content')

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Formulir Kontak</li>
                        </ol>
                    </nav>

                    <h2 class="text-white">Formulir Kontak</h2>
                </div>

            </div>
        </div>
    </header>

    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h3 class="mb-4 pb-2">Kirim Pesan ke MI Nurul Iman</h3>
                </div>

                <div class="col-lg-6 col-12">
                    <form action="#" method="post" class="custom-form contact-form" role="form">
                        @csrf 
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" required="">
                                    <label for="floatingInput">Nama Lengkap</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12"> 
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Alamat Email" required="">
                                    <label for="floatingInput">Alamat Email</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subjek Pesan" required="">
                                    <label for="floatingInput">Subjek Pesan</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Tuliskan pesan Anda"></textarea>
                                    <label for="floatingTextarea">Isi Pesan</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <button type="submit" class="form-control">Kirim Pesan</button>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                    <iframe class="google-map" src="http://googleusercontent.com/maps.google.com/3" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5 class="mt-4 mb-2">MI Nurul Iman</h5>

                    <p>Jl. Nama Jalan Sekolah Anda No. XXX, Kota Anda</p>
                    
                    <h5 class="mt-4 mb-2">Kontak Cepat</h5>
                    <p>Telepon: 123-456-7890</p>
                    <p>Email: info@minuruliman.sch.id</p>
                </div>

            </div>
        </div>
    </section>

@endsection