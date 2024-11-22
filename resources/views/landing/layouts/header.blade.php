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
                                    <a class="nav-link {{ request()->is('/') || request()->is('home') ? 'active' : '' }}" aria-current="page"  href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about.index') }}">About Us</a>
                                </li>
                                <li class="mega_menu_dropdown">
                                    <a class="mega_menu_dropdown-toggle nav-link {{ request()->is('courses/*') || request()->is('courses') ? 'active' : '' }} " href="{{ route('courses.index')}}">Courses</a>
                                    <ul>
                                        <li><a class="{{ request()->is('courses/pharmacy') ? 'active' : '' }}" href="{{ route('courses.pharmacy')}}">Pharmacy</a></li>
                                        <li><a class="{{ request()->is('courses/anm') ? 'active' : '' }}" href="{{ route('courses.anm')}}">ANM</a></li>
                                        <li><a class="{{ request()->is('courses/gnm') ? 'active' : '' }}" href="{{ route('courses.gnm')}}">GNM</a></li>
                                        <li><a class="{{ request()->is('courses/nurshing') ? 'active' : '' }}" href="{{ route('courses.nurshing')}}">Nurshing</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link {{ request()->is('academic') ? 'active' : '' }}" aria-current="page" href="{{ route('academic.index') }}">Academic</a>
                                </li>
                                <li><a class="nav-link {{ request()->is('activity') ? 'active' : '' }}" href="{{ route('activity.index') }}">Activity</a></li>
                                <li><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact Us</a></li>
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
