@extends('landing.layouts.base')

@section('title', 'About Us')

@section('content')


<!-- breadcrumb part -->

@include('landing.components.breadcrumb',['title' => 'About Us', 'subtitle' => '', 'banner' => ''])
<!-- breadcrumb part end -->

<!-- Start about us -->

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



{{-- <div class="bg-white section_padding">
  <div class="container">
    <div class="row h-100 align-items-center text-center">
      <div data-aos="fade-up"
        data-aos-duration="1200" class="col-lg-12">
        <h1 class="display-4">About Us</h1>
        <h2>Buddha Nursing College, Approved by "Pharmacy Council of India" PCI CODE: 9306</h2>
        <h4 class="lead text-muted mb-0">Knowledge to change the world</h4><br>
        <p>As the oldest continuously run educational institution, Buddha health care & Higher Education, Pharmacy &Nursing College, Ranchi, Jharkhand remains committed to providing an academically rigorous education to students who will walk out of college ready for lives of leadership and service to their community.
        </p>
        <p>We strive to be committed to the students we are privileged to serve, in our alumni association, our dedicated, talented faculty and staff. We also take pride in having the most active and helpful group of partners, visionary parents, well-wishers, alumni and friends.</p>
      </div>
      <div data-aos="fade-up"
        data-aos-duration="1600" class="col-lg-6 d-none d-lg-block"><img src="uploads/2022/11/about-1.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div> --}}

<div class="bg-light section_padding">
  <div class="container">

    <div class="row align-items-center mb-5">
      <div data-aos="fade-up"
        data-aos-duration="1200" class="col-lg-12 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Mission Statement</h2>
        <p class="font-italic text-muted mb-4">Our mission at the institute is to develop the unique abilities and potential of each student by offering an enriched educational program. We strive for excellence through a hands-on approach. Rich traditions rooted in our innovative curriculum grow productive, caring, and intellectually curious citizens.</p>
      </div>

    </div>

    <div class="row align-items-center mb-5">
      <div data-aos="fade-up"
        data-aos-duration="1600" class="col-lg-12"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Our Core Values</h2>
        <p class="font-italic text-muted mb-4">We have a culture that is modern, relevant, and inspires students to have a brighter future. We are determined in our approach to learning, are creative in our thinking, and bold in our ambitions.</p>
      </div>
    </div>

    <div class="row align-items-center mb-5">
        <div data-aos="fade-up"
          data-aos-duration="1600" class="col-lg-12"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Our Philosophy</h2>
          <p class="font-italic text-muted mb-4">We, at Buddha health care & Higher Education, Pharmacy &Nursing College, follow a child-centered educational approach. We believe that a everyone is naturally curious and is capable of initiating learning in a supportive and thoughtfully prepared environment.</p>
        </div>
    </div>

  </div>
</div>

<div class="bg-white section_padding">
  <div class="container">
    <div class="row mb-4">
      <div data-aos="fade-up"
        data-aos-duration="1200" class="col-lg-5">
        <h2 class="display-4 font-weight-light">Our Team</h2>
        <p class="font-italic text-muted"></p>
      </div>
    </div>
    <div class="row text-center">


      <!-- Team item-->
      <div data-aos="fade-up" data-aos-duration="2000" class="col-xl-12 col-sm-12 mb-5 bg-white rounded custom-shadow-sm row">
        <div class="col-xl-6 col-sm-12 mb-5 ">
            <div class=" py-5 px-4"><img src="{{ asset('landing/img/dir-1.jpg')}}" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h3 class="font-italic text-muted mb-4">A letter from our Chairman</h3>
                <h5 class="mb-0">Rahul Ranjan/ Ravi</h5><span class="small text-uppercase text-muted">Chairman</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-6 col-sm-12  my-5">
            <p class="text-justify">Dear Students,<br>
                I have great pleasure in welcoming you to the Buddha health care & higher education. I feel confident that the ideas, impressions, and images, I had about medical education as cherished dreams are now unfolding and taking shape. Buddha health care & higher education has attracted the attention of a large section of the community and has been able to live up to its motto of providing modern health care services in an environment of friendly participation and academic ambiance. The expanded facilities for recreation and for sports and games in the College will surely add to the friendly academic ambiance here and invite our students to participate whole-heartedly in all our activities and give out their very best.</p>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div data-aos="fade-up" data-aos-duration="2000" class="col-xl-12 col-sm-12 mb-5 bg-white rounded custom-shadow-sm row">
        <div class="col-xl-6 col-sm-12 mb-5 ">
            <div class=" py-5 px-4"><img src="{{ asset('landing/img/dir-2.jpg')}}" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h3 class="font-italic text-muted mb-4">A letter from our Chairman</h3>
                <h5 class="mb-0">Arvind rana</h5><span class="small text-uppercase text-muted">Chairman</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-6 col-sm-12  my-5">
            <p class="text-justify">Dear Students,<br>
                I have great pleasure in expressing my thoughts as the Director of Buddha health care & higher education. Our institute holds the manifold distinction of being amongst the best when one considers the present status of Vocational education today. The effort to impart value-based education to all is topmost in our minds. I welcome you to this unique family and look forward to your valuable association with us for a better tomorrow. Your experience at Buddha health care & higher education will not only earn you a degree/diploma but also will transform your personality, empowering you to lead a successful life.</p>
        </div>
      </div>
      <!-- End-->


    </div>
  </div>
</div>
<!-- End about us -->
@endsection
