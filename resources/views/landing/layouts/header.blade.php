 <!-- header part here -->
 <header class="header_part">
    <div class="sub_header section_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-7">
                    <div class="header_contact_info">
                        <a href="tel:+4641468425"><i class="icon_phone"></i>+91 70046-94875 </a>
                        <a href="mailto:healthcarebuddha@gmail.com"><i class="icon_mail_alt"></i>healthcarebuddha@gmail.com</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-5">
                    <div class="header_login_info">
                        {{-- <a href="teacher.html">Become A Teacher</a> --}}
                        <p class="text-black font-weight-bold">Approved by Pharmacy Council of India PCI CODE: 9306</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon troggle_icon d-lg-none">
                            <i class="icon_menu"></i>
                        </div>
                        <div class="logo">
                            <a href="{{ route('home')}}"><img src="{{ asset('landing/img/logo.webp')}}" alt="#"></a>
                        </div>

                        <nav class="navbar_bar">
                            <ul>
                                <li>
                                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a class="nav-link {{ request()->is('admission') ? 'active' : '' }}" aria-current="page"  href="{{ route('admission') }}">Admission</a>
                                </li>
                                <li class="mega_menu_dropdown">
                                    <a class="mega_menu_dropdown-toggle nav-link {{ request()->is('academic') ? 'active' : '' }}" aria-current="page" href="{{ route('academic') }}">Academic</a>
                                    <ul>
                                        <li><a class="{{ request()->is('courses') ? 'active' : '' }}" href="{{ route('courses.d-pharma')}}">Undergraduate</a></li>
                                        <li><a class="{{ request()->is('courses') ? 'active' : '' }}" href="{{ route('courses.b-pharma')}}">Graduate</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a class="nav-link {{ request()->is('activity') ? 'active' : '' }}" href="{{ route('activity.index') }}">Activity</a></li> --}}
                                <li><a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a class="nav-link {{ request()->is('investors') ? 'active' : '' }}" href="{{ route('investors') }}">Investors</a></li>
                                <li><a class="nav-link {{ request()->is('news-events') ? 'active' : '' }}" href="{{ route('news-events.index') }}">News & Events</a></li>
                            </ul>
                        </nav>
                        {{-- <div class="navbar_btn">
                            <a href="live-class.html" class="btn_1">Join Live Class</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header part end -->
