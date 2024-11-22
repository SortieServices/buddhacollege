@extends('landing.layouts.base')

@section('content')


    <!-- breadcrumb part -->
    <section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Courses</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index-2.html">Home</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- blog left sidebar part here -->
    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 bg-light pt-2">
                    <div class="blog_sidebar left-sidebar">
                        <div data-aos="fade-up" data-aos-duration="1600" class="single_sidebar">
                            <h3>Courses</h3>
                            <div class="category_list">
                                <p> <a href="{{ route('courses.index') }}" class="{{ request()->is('courses') ? 'courses_active' : '' }} "><i class="arrow_carrot-right"></i>ALL Courses</a> </p>
                                <p> <a href="{{ route('courses.pharmacy') }}" class="{{ request()->is('courses/pharmacy') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>Pharmacy</a> </p>
                                <p> <a href="{{ route('courses.nurshing') }}" class="{{ request()->is('courses/nurshing') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>Nurshing</a> </p>
                                <p> <a href="{{ route('courses.anm') }}" class="{{ request()->is('courses/anm') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>ANM </a> </p>
                                <p> <a href="{{ route('courses.gnm') }}" class="{{ request()->is('courses/gnm') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>GNM</a> </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="container">
                        <div class="row align-items-center mb-5">
                            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-12 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">Pharmacy</h2>
                                <p class=" mb-4">The Pharmacy profession offers diverse job opportunities in India and around the world. Pharmacists may practice in a community or hospital pharmacy; a nursing home or extended care facility; the Pharmaceutical Industry, Biotechnology industry and other private or public companies. Pharmacy graduates worldwide are among the best-paid and most respected professionals and the recent healthcare trends make pharmacy a near recession-proof career choice! </p><a href="course-list.html" class="btn_3">Read More</a>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-12 px-5 mx-auto order-1 order-lg-2"><img src="uploads/2022/11/about-2.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
                        </div>
                        {{-- <div class="row align-items-center">
                            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-5 px-5 mx-auto"><img src="uploads/2022/11/about-3.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
                            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="events.html" class="btn_3">All Events</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog left sidebar part end -->

    <!-- cta part here -->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cta_part_iner">
                        <h2>Best teachers in every subject. <br>
                            Let’s get started</h2>
                        <p>We can teach you anything</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta_btn">
                        <a href="course-list.html" class="btn_3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle_shape_1"></div>
        <div class="circle_shape_2"></div>
    </section>
@endsection
