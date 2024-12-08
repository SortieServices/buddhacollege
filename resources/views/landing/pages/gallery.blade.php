@extends('landing.layouts.base')
@section('title', 'Gallery')
@section('content')


<!-- breadcrumb part -->

@include('landing.components.breadcrumb',['title' => 'Gallery', 'subtitle' => '', 'banner' => ''])
<!-- breadcrumb part end -->

 <section class="instructor_list section_padding" >
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="1200">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <h2>Gallery</h2>
                    <p>We aims at offering all our students a broad and balanced curriculum that provides rewarding and stimulating activities to prepare them for the best social and cultural life.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1200">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-1.jpg')}}" alt="#" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1400">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-2.jpg')}}" alt="#" class="img-fluid">
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1600">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-3.jpg')}}" alt="#" class="img-fluid">
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1800">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-4.jpg')}}" alt="#" class="img-fluid">
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="2000">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-5.jpg')}}" alt="#" class="img-fluid">
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="2200">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-6.jpg')}}" alt="#" class="img-fluid">
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="2400">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-7.jpg')}}" alt="#" class="img-fluid">
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="2600">
                <div class="single_instructor_item">
                    <div class="single_instructor">
                        <a class="instructor_img">
                            <img src="{{ asset('landing/img/gallery/gal-8.jpg')}}" alt="#" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
