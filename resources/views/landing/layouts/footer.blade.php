<footer class="footer_section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-sm-6">
                <div class="single_feature_footer">
                    <a href="index-2.html"><img src="{{ asset('landing/img/logo.webp')}}" alt="#"></a>
                    <p>Buddha health care & Higher Education, Pharmacy &Nursing College, Ranchi, was incepted in 2023 by the Leela Mandal group of colleges and is attached to various Hospitals which is a Super speciality referral hospital with modern facilities and service having an inpatient capacity of 550+ beds.</p>
                    <div class="footer_contact_info">
                        <a href="+91 70046-94875"><i class="icon_phone"></i>+91 70046-94875 | +91 90067-00158 | +91 80513-50087</a>
                        <a href="mailto:healthcarebuddha@gmail.com"><i class="icon_mail_alt"></i>healthcarebuddha@gmail.com</a>
                    </div>
                    <div class="social_icon">
                        <a href="#"><i class="social_facebook"></i></a>
                        <a href="#"><i class="social_twitter"></i></a>
                        <a href="#"><i class="social_linkedin"></i></a>
                        <a href="#"><i class="social_instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_footer footer_nav">
                    <h4>COURSES</h4>
                    <ul>
                        <li><a href="{{ route('courses.nurshing') }}">Nurshing</a></li>
                        <li><a href="{{ route('courses.d-pharma') }}">D.Pharma</a></li>
                        <li><a href="{{ route('courses.b-pharma') }}">D.Pharma</a></li>
                        <li><a href="{{ route('courses.anm') }}">ANM</a></li>
                        <li><a href="{{ route('courses.gnm') }}">GNM</a></li>
                        <li><a href="{{ route('admission') }}">Admission</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary position-absolute px-5 py-2" style="bottom: 80px;">Enroll Now</button>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_footer footer_nav">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li><a href="{{ route('about')}}">About Us</a></li>
                        <li><a href="{{ route('academic') }}">Academic</a></li>
                        <li><a href="{{ route('news-events.index')}}">News & Events</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('investors')}}">Investors</a></li>
                    </ul>
                </div>
                <a href="{{ asset('landing/uploads/PROSPECTUS.pdf')}}" target="_blank" class="btn btn-outline-primary position-absolute px-5 py-2" style="bottom: 80px;">Download Browser</a>
            </div>
            <div class="col-lg-12">
                <div class="copyright_part">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <p>© Copyright 2024 Design by <a href="https://sortieservices.com" class="text_underline">SSPL.</a> All rights reserved.</p>
                        </div>
                        {{-- <div class="col-lg-6 col-md-4">
                            <div class="social_icon">
                                <a href="#"><i class="social_facebook"></i></a>
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_linkedin"></i></a>
                                <a href="#"><i class="social_instagram"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('landing/img/icon/shape_01.png')}}" alt="#" class="footer_sharp_1">
    <img src="{{ asset('landing/img/icon/about_shape_02.png')}}" alt="#" class="footer_sharp_2 custom-animation2">
    <img src="{{ asset('landing/img/icon/about_shape_03.png')}}" alt="#" class="footer_sharp_3 custom-animation3">
</footer>
