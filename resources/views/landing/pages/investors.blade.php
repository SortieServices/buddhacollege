@extends('landing.layouts.base')

@section('title', 'Investors')

@section('content')


<!-- breadcrumb part -->

@include('landing.components.breadcrumb',['title' => 'Investors', 'subtitle' => '', 'banner' => ''])
<!-- breadcrumb part end -->

<section class="about_us section_padding" >
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-5 col-md-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="700">
                <div class="about_us_img">
                    <img src="{{ asset('landing/uploads/img/about-us.jpg')}}" alt="#" class="img-fluid">
                    {{-- <div class="about_tricker">
                        <div class="tricker_iner">
                            <p>Trusted by</p>
                            <span class="timer" data-from="0" data-to="45"></span><span>k+ </span>
                        </div>
                    </div> --}}
                    <img src="{{ asset('landing/img/animated_icon/about_icon.png')}}" alt="#" class="about_icon custom-animation">
                </div>
            </div>
            <div class="col-xl-6 col-md-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="700">
                <div class="about_us_details">
                    <h2>We are Experts
                        Learning Institution</h2>
                    <h3>Buddha Nursing College, Approved by "Pharmacy Council of India" PCI CODE: 9306</h3>
                    <p>As the oldest continuously run educational institution, Buddha health care & Higher Education, Pharmacy &Nursing College, Ranchi, Jharkhand remains committed to providing an academically rigorous education to students who will walk out of college ready for lives of leadership and service to their community.</p>
                    <p>We strive to be committed to the students we are privileged to serve, in our alumni association, our dedicated, talented faculty and staff. We also take pride in having the most active and helpful group of partners, visionary parents, well-wishers, alumni and friends.</p>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('landing/img/icon/about_shape_01.png')}}" alt="#" class="about_sharp_1">
    <img src="{{ asset('landing/img/icon/about_shape_02.png')}}" alt="#" class="about_sharp_2 custom-animation2">
    <img src="{{ asset('landing/img/icon/about_shape_03.png')}}" alt="#" class="about_sharp_3 custom-animation3">
</section>
@endsection
