@extends('layouts.frontend')

@section('title', 'Selamat Datang di Sekolah SLB')

@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">
                </div>
        </div>
    </section>

    <section class="featured-section">
        </section>

    <section class="explore-section section-padding" id="section_2">
        </section>

    <section class="timeline-section section-padding" id="section_3">
        </section>

    <section class="faq-section section-padding" id="section_4">
        <img src="{{ asset('images/faq_graphic.jpg') }}" class="img-fluid" alt="FAQs">
        
    </section>

    <section class="contact-section section-padding section-bg" id="section_5">
        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
            <img src="{{ asset('images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt=""> 
        </div>
        
        </section>
    
@endsection
