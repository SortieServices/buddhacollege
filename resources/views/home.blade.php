@extends('landing.layouts.base')

@section('title', 'Home')

@section('content')

    <!-- slider part here -->
    <section class="banner_part owl-carousel">
        <div class="single_banner_part" style="background-image: url('{{ isset($banner) &&  $banner != '' ? asset('landing/uploads/img/'.$banner) : asset('landing/uploads/img/banner-3.jpg') }}'); background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h2>Welcome to Buddha Nursing College</h2>
                            <h5>This is where we teach students skills they need to transform themselves, others, and our global communities.</h5>
                            {{-- <a href="course-list.html" class="btn_2">Our Courses</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_banner_part" style="background-image: url('{{ isset($banner) &&  $banner != '' ? asset('landing/uploads/img/'.$banner) : asset('landing/uploads/img/banner-2.jpg') }}'); background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h2>Welcome to Buddha Nursing College</h2>
                            <h5>Education is the backbone of a nation</h5>
                            {{-- <a href="course-list.html" class="btn_2">Our Courses</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_banner_part" style="background-image: url('{{ isset($banner) &&  $banner != '' ? asset('landing/uploads/img/'.$banner) : asset('landing/uploads/img/banner-1.jpg') }}'); background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h2>Welcome to Buddha Nursing College</h2>
                            <h5>Education is the best key success in life</h5>
                            {{-- <a href="course-list.html" class="btn_2">Our Courses</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <div class="d-none d-md-block" style="position: relative; z-index: 1;margin-top: -100px; ">
        <div class="container bg-primary" style="border-radius: 5px;">
            <div class="row justify-content-around align-items-center" style="height: 60px;">
                <a class="nav-link text-white" href="{{ route('courses.anm') }}">ANM</a>
                <a class="nav-link text-white" href="{{ route('courses.gnm') }}">GNM</a>
                <a class="nav-link text-white" href="{{ route('courses.d-pharma') }}">D.Pharma</a>
                <a class="nav-link text-white" href="{{ route('courses.b-pharma') }}">B.Pharma</a>
                <a class="nav-link text-white" href="{{ route('courses.nurshing') }}">B.sc(nursing)</a>
            </div>
        </div>
    </div>
    <!-- slider part end -->

     <!-- course details part here -->
     <section class="course_details padding_bottom padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1300">
                    <div class="section_tittle">
                        <h2>Core values</h2>
                        <p>The lighted lamp burns bright when the wick and oil are clean</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-md-7">
                    <div class="course_details_iner">
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="1200">
                            <img src="{{ asset('landing/img/icon/course_1.svg')}}" alt="">
                            <h4>Clinicals</h4>
                            <p class="course-excerpt">To provide vast and rich experience for the students we have tie up facilities with Govt., enabling students to gain experience in various rural and Urban Government Health Programmes.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="1600">
                            <img src="{{ asset('landing/img/icon/course_2.svg')}}" alt="">
                            <h4>Faculty</h4>
                            <p class="course-excerpt">Full Fledged qualified and experienced staff working consistently for more than 10 years. </p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2000">
                            <img src="{{ asset('landing/img/icon/course_3.svg')}}" alt="">
                            <h4>Hostel</h4>
                            <p class="course-excerpt">It is equipped with reading rooms, recreation hall, visitors hall, sick room, Hygienic Kitchen with R.O water plant and solar system Hot water facility.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2400">
                            <img src="{{ asset('landing/img/icon/course_4.svg')}}" alt="">
                            <h4>Infrastructure</h4>
                            <p class="course-excerpt">Constructed on a sprawling campus and has an excellent physical infrastructure as per the Indian Nursing Council norms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5" data-aos="fade-up"
                data-aos-duration="1200">
                    <div class="course_registration">
                        <div class="course_registration_form">
                            <h3>Registration <br>
                            for Course Enroll</h3>
                            <form action="#">
                                <input type="text" name="#" placeholder="Name">
                                <input type="email" name="#" placeholder="Email">
                                <input type="phone" name="#" placeholder="Phone">
                                <select name="#" class="niceSelect">
                                    <option value="pharmacy">Pharmacy</option>
                                    <option value="nurshing">Nurshing</option>
                                    <option value="anm">ANM</option>
                                    <option value="gnm">GNM</option>
                                </select>
                                <a href="#" class="btn_1">Apply Now</a>
                                {{-- <div class="countdown"  id="timer">
                                    <div class="time" id="days" data-aos="fade-up"
                                    data-aos-duration="600"></div>
                                    <div class="time" id="hours" data-aos="fade-up"
                                    data-aos-duration="800"></div>
                                    <div class="time" id="minutes" data-aos="fade-up"
                                    data-aos-duration="1000"></div>
                                    <div class="time" id="seconds" data-aos="fade-up"
                                    data-aos-duration="1200"></div>
                                </div> --}}
                            </form>
                        </div>
                        <img src="{{ asset('landing/img/animated_icon/cources_details_bg.png')}}" alt="#" class="custom-animation1 cources_details_bg">
                        <img src="{{ asset('landing/img/animated_icon/animated_icon_1.png')}}" alt="#" class="custom-animation2 cources_details_icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course details part end -->

        <!-- course category part here -->
        <section class="course_category section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200">
                        <div class="section_tittle">
                            <h2>Explore Our
                                Courses</h2>
                            <p>Buddha health care aims at offering all our students a broad and balanced curriculum that provides rewarding and stimulating activities to prepare them for the best social and cultural life.</p>
                        </div>
                    </div>
                    <div class="col-lg-12" data-aos="fade-up"
                    data-aos-duration="1200">
                        <div class="course_category_item owl-carousel">
                            <a href="{{ route('courses.anm')}}" class="single_category_item pink">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_1.png')}}" alt="#">
                                <h4>ANM</h4>
                                <p>Graduate Courses</p>
                            </a>
                            <a href="{{ route('courses.gnm')}}" class="single_category_item">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_2.png')}}" alt="#">
                                <h4>GNM</h4>
                                <p>Graduate Courses</p>
                            </a>
                            <a href="{{ route('courses.d-pharma')}}" class="single_category_item yellow">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_3.png')}}" alt="#">
                                <h4>Pharmacy</h4>
                                <p>Diploma Courses</p>
                            </a>
                            <a href="{{ route('courses.b-pharma')}}" class="single_category_item green">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_4.png')}}" alt="#">
                                <h4>Pharmacy</h4>
                                <p>Graduate Courses</p>
                            </a>
                            <a href="{{ route('courses.nurshing')}}" class="single_category_item pink">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_1.png')}}" alt="#">
                                <h4>Nursing</h4>
                                <p>Diploma Courses</p>
                            </a>
                            <a href="{{ route('courses.nurshing')}}" class="single_category_item">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_2.png')}}" alt="#">
                                <h4>Nursing</h4>
                                <p>Graduate Courses</p>
                            </a>
                            {{-- <a href="course-category.html" class="single_category_item yellow">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_3.png')}}" alt="#">
                                <h4>Technology</h4>
                                <p>3 Courses</p>
                            </a>
                            <a href="course-category.html" class="single_category_item green">
                                <img src="{{ asset('landing/uploads/2022/11/category_icon_4.png')}}" alt="#">
                                <h4>IT & Software</h4>
                                <p>3 Courses</p>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course category part end -->



    <!-- about us part here -->
    <section class="about_us section_padding" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_img">
                        <img src="{{ asset('landing/uploads/2022/11/about.png')}}" alt="#" class="img-fluid">
                        <div class="about_tricker">
                            <div class="tricker_iner">
                                <p>Trusted by</p>
                                <span class="timer" data-from="0" data-to="45"></span><span>k+ </span>
                            </div>
                        </div>
                        <img src="{{ asset('landing/img/animated_icon/about_icon.png')}}" alt="#" class="about_icon custom-animation">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_details">
                        <h2>We are Experts
                            Learning Institution</h2>
                        <h3>10 Years of Experience</h3>
                        <p>As the oldest continuously run educational institution, Buddha health care & Higher Education, Pharmacy &Nursing College, Ranchi, Jharkhand remains committed to providing an academically rigorous education to students who will walk out of college ready for lives of leadership and service to their community. </p>
                            {{-- <h3><span>Call Us</span> +456 968 562 75</h3> --}}
                        <a href="{{ route('about') }}" class="btn_1">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('landing/img/icon/about_shape_01.png')}}" alt="#" class="about_sharp_1">
        <img src="{{ asset('landing/img/icon/about_shape_02.png')}}" alt="#" class="about_sharp_2 custom-animation2">
        <img src="{{ asset('landing/img/icon/about_shape_03.png')}}" alt="#" class="about_sharp_3 custom-animation3">
    </section>
    <!-- about us part end -->





    <!-- motivation part here -->
    {{-- <section class="motivation section_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="motivation_content">
                        <h2>Your motivition & attention will teach you best</h2>
                        <p>Cack gormless young delinquent that bits and bobs he nicked it mush, spiffing smashing he legged it have it codswallop.</p>
                        <ul class="nav nav-tabs" id="motivation_content_tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active single_item" data-toggle="tab" href="#Design" role="tab" aria-selected="true" id="Design-tab" data-aos="fade-up" data-aos-duration="700">
                                    <i class="icon_book_alt"></i>
                                    <p>Graphics Design</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link single_item" data-toggle="tab" href="#Development" role="tab"  aria-selected="false" id="Development-tab" data-aos="fade-up" data-aos-duration="800">
                                    <i class="icon_key"></i>
                                    <p>Self Development</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link single_item" data-toggle="tab" href="#Software" role="tab" aria-selected="false" id="Software-tab" data-aos="fade-up" data-aos-duration="900">
                                    <i class="icon_ribbon_alt"></i>
                                    <p>IT & Software</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="motivation_content_tabcontent">
            <div class="tab-pane fade show active" id="Design" role="tabpanel" aria-labelledby="Design-tab">
                <div class="motivation_video">
                    <a href="https://www.youtube.com/watch?v=f3NWvUV8MD8" class="animated_play_button popup_youtube">
                    <span class="flaticon-play-button"></span></a>
                </div>
            </div>
            <div class="tab-pane fade" id="Development" role="tabpanel" aria-labelledby="Development-tab">
                <div class="motivation_video bg_1">
                    <a href="https://www.youtube.com/watch?v=x4q86IjJFag" class="animated_play_button popup_youtube">
                    <span class="flaticon-play-button"></span></a>
                </div>
            </div>
            <div class="tab-pane fade" id="Software" role="tabpanel" aria-labelledby="Software-tab">
                <div class="motivation_video bg_2">
                    <a href="https://www.youtube.com/watch?v=XRCIzZHpFtY" class="animated_play_button popup_youtube">
                    <span class="flaticon-play-button"></span></a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- motivation part end -->

    <!-- event part here -->
    <section class="event_list section_padding">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up"
            data-aos-duration="1200">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>Our Co-curricular Activities</h2>
                        {{-- <p>Jeffrey crikey victoria sponge mush spiffing
                        super arse over tit matie boy smashing. The little
                        rotter off his nut codswallop.!</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single_event_list" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{ asset('landing/uploads/img/event-1.jpg')}}" alt="" class="img-fluid">
                        <div class="event_list_content">
                            {{-- <h5>14 January, 2023 </h5> --}}
                            <h2>Athletics</h2>

                            <p>Our students are passionate about sports and athletics and have the freedom to choose the one they like and wish to take up.</p>
                        </div>
                    </div>
                    <div class="single_event_list" data-aos="fade-up" data-aos-duration="1600">
                        <img src="{{ asset('landing/uploads/img/event-2.jpg')}}" alt="" class="img-fluid">
                        <div class="event_list_content">
                            {{-- <h5>14 January, 2023 </h5> --}}
                            <h2>In-house Publications</h2>

                            <p>We have several writers who are encouraged to come up with creations that are regularly published in our in-house magazines.</p>
                        </div>
                    </div>
                    <div class="single_event_list" data-aos="fade-up" data-aos-duration="1800">
                        <img src="{{ asset('landing/uploads/img/event-3.jpg')}}" alt="" class="img-fluid">
                        <div class="event_list_content">
                            {{-- <h5>14 January, 2023 </h5> --}}
                            <h2>Performing Arts & Music</h2>

                            <p>With professionals on board, we take pride in training our students in art forms like dance, drama, painting and more.</p>
                        </div>
                    </div>
                    {{-- <div class="event_list_btn" data-aos="fade-up"
                    data-aos-anchor-placement="top-center">
                        <a href="events.html" class="btn_3">View All Events</a>
                    </div> --}}

                </div>
            </div>
        </div>
        <img src="{{ asset('landing/img/icon/shape_06.png')}}" alt="#" class="about_sharp_1 custom-animation">
        <img src="{{ asset('landing/img/icon/about_shape_02.png')}}" alt="#" class="about_sharp_2 custom-animation2">
        <img src="{{ asset('landing/img/icon/about_shape_03.png')}}" alt="#" class="about_sharp_3 custom-animation3">
        <img src="{{ asset('landing/img/icon/shape_04.png')}}" alt="#" class="about_sharp_4 custom-animation4">
        <img src="{{ asset('landing/img/icon/shape_05.png')}}" alt="#" class="about_sharp_5 custom-animation5">
    </section>
    <!-- event part end -->

    <!-- student review part here -->
    <section class="student_review section_padding" >
        <div class="container">
            <div class="row justify-content-between align-items-center" data-aos="fade-up"
            data-aos-anchor-placement="top-center">
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="student_review_tittle">
                        <h2>Student Say <br> About Us.</h2>
                        <img src="themes/varsity/assets/img/quote.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="student_review_iner owl-carousel">
                        <div class="single_student_review">
                            <p>Loo faff about cockup Harry baking
                            cakes hunky-dory mush, happy days
                            on your bike mate cobblers say cor blimey
                            guvnor brown bread, plastered cuppa bender
                            geeza chimney pot. Haggle cheesed off butty
                            say cup of char spiffing good time bum bag
                            so I said gutted mate the bee's knees queen's
                            english.!</p>
                            <div class="student_review_content">
                                <img src="{{ asset('landing/uploads/2022/11/student.png')}}" alt="">
                                <div class="student_info">
                                    <h4>Lance Bogrol</h4>
                                    <p>UX Designer, Sceo Inc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_student_review">
                            <p>Loo faff about cockup Harry baking
                            cakes hunky-dory mush, happy days
                            on your bike mate cobblers say cor blimey
                            guvnor brown bread, plastered cuppa bender
                            geeza chimney pot. Haggle cheesed off butty
                            say cup of char spiffing good time bum bag
                            so I said gutted mate the bee's knees queen's
                            english.!</p>
                            <div class="student_review_content">
                                <img src="{{ asset('landing/uploads/2022/11/author_5.jpg')}}" alt="">
                                <div class="student_info">
                                    <h4>Adam Smith</h4>
                                    <p>Manager, Tatva Soft</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle_shape_1"></div>
        <div class="circle_shape_2"></div>
    </section>
    <!-- student review part end -->

@endsection
