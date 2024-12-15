@extends('landing.layouts.base')

@section('title', 'Academic')

@section('content')

<link rel="stylesheet" href="{{ asset('landing/css/courses.css')}}"/>
    <!-- breadcrumb part -->

    @include('landing.components.breadcrumb',['title' => 'Academic', 'subtitle' => '', 'banner' => ''])
    <!-- breadcrumb part end -->

    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                @include('landing.components.academic-sidebar')
                <div class="col-lg-9">
                    <div class="container">
                        <div id="content" class="site-content" bis_skin_checked="1">
                            <div class="lp-archive-courses" bis_skin_checked="1">
                                <div class="lp-content-area" bis_skin_checked="1">
                                    <ul class="learn-press-courses" data-layout="list">
                                        <li id="post-1026" class="post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course">
                                            <div class="course-item" bis_skin_checked="1">
                                                <div class="course-wrap-thumbnail" bis_skin_checked="1">
                                                    <div class="course-thumbnail" bis_skin_checked="1">
                                                        <a href="{{ route('courses.d-pharma')}}" bis_skin_checked="1">
                                                            <div class="thumbnail-preview" bis_skin_checked="1">
                                                                <div class="thumbnail" bis_skin_checked="1">
                                                                    <div class="centered" bis_skin_checked="1">
                                                                        <img width="370" height="280" src="{{ asset('landing/uploads/img/d-pharma.jpeg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- START .course-content -->
                                                <div class="course-content" bis_skin_checked="1">
                                                    <div class="course-categories" bis_skin_checked="1">
                                                        <a href="{{ route('courses.d-pharma')}}" rel="tag" bis_skin_checked="1">Diploma</a>
                                                    </div>
                                                    <a href="{{ route('courses.d-pharma')}}" class="course-permalink" bis_skin_checked="1">
                                                        <h3 class="course-title">Diploma in Pharmacy</h3>
                                                    </a>
                                                    <div class="separator" bis_skin_checked="1"></div>
                                                    <div class="course-info" bis_skin_checked="1">
                                                        <div class="course-description" bis_skin_checked="1">
                                                            <p>The Pharmacy profession offers diverse job opportunities in India and around the world. Pharmacists may practice in a community or hospital pharmacy; a nursing home or extended care facility; the Pharmaceutical Industry, Biotechnology industry and other private or public companies. Pharmacy graduates worldwide are among the best-paid and most respected professionals and the recent healthcare trends make pharmacy a near recession-proof career choice!
                                                            </p>
                                                        </div>
                                                        <div class="clearfix" bis_skin_checked="1"></div>
                                                        <div class="course-readmore" bis_skin_checked="1">
                                                            <a href="{{ route('courses.d-pharma')}}" bis_skin_checked="1">View More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END .course-content -->
                                            </div>
                                        </li>

                                        <li id="post-1026" class="post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course">
                                            <div class="course-item" bis_skin_checked="1">
                                                <div class="course-wrap-thumbnail" bis_skin_checked="1">
                                                    <div class="course-thumbnail" bis_skin_checked="1">
                                                        <a href="{{ route('courses.anm')}}" bis_skin_checked="1">
                                                            <div class="thumbnail-preview" bis_skin_checked="1">
                                                                <div class="thumbnail" bis_skin_checked="1">
                                                                    <div class="centered" bis_skin_checked="1">
                                                                        <img width="370" height="280" src="{{ asset('landing/uploads/img/anm.jpg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- START .course-content -->
                                                <div class="course-content" bis_skin_checked="1">
                                                    <div class="course-categories" bis_skin_checked="1">
                                                        <a href="{{ route('courses.anm')}}" rel="tag" bis_skin_checked="1">Diploma</a>
                                                    </div>
                                                    <a href="{{ route('courses.anm')}}" class="course-permalink" bis_skin_checked="1">
                                                        <h3 class="course-title">ANM</h3>
                                                    </a>
                                                    <div class="separator" bis_skin_checked="1"></div>
                                                    <div class="course-info" bis_skin_checked="1">
                                                        <div class="course-description" bis_skin_checked="1">
                                                            <p>Auxiliary Nurse Midwifery (Nursing) course is a 12th standard Medical Nursing course. It deals with the field of science and covers healthcare profession focused on the care of individuals, families, and communities so they may attain, maintain, or recover optimal health and quality of life from conception to death.
                                                            </p>
                                                        </div>
                                                        <div class="clearfix" bis_skin_checked="1"></div>
                                                        <div class="course-readmore" bis_skin_checked="1">
                                                            <a href="{{ route('courses.anm')}}" bis_skin_checked="1">View More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END .course-content -->
                                            </div>
                                        </li>

                                        <li id="post-1026" class="post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course">
                                            <div class="course-item" bis_skin_checked="1">
                                                <div class="course-wrap-thumbnail" bis_skin_checked="1">
                                                    <div class="course-thumbnail" bis_skin_checked="1">
                                                        <a href="{{ route('courses.gnm')}}" bis_skin_checked="1">
                                                            <div class="thumbnail-preview" bis_skin_checked="1">
                                                                <div class="thumbnail" bis_skin_checked="1">
                                                                    <div class="centered" bis_skin_checked="1">
                                                                        <img width="370" height="280" src="{{ asset('landing/uploads/img/gnm.jpg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- START .course-content -->
                                                <div class="course-content" bis_skin_checked="1">
                                                    <div class="course-categories" bis_skin_checked="1">
                                                        <a href="{{ route('courses.gnm')}}" rel="tag" bis_skin_checked="1">Diploma</a>
                                                    </div>
                                                    <a href="{{ route('courses.gnm')}}" class="course-permalink" bis_skin_checked="1">
                                                        <h3 class="course-title">GNM</h3>
                                                    </a>
                                                    <div class="separator" bis_skin_checked="1"></div>
                                                    <div class="course-info" bis_skin_checked="1">
                                                        <div class="course-description" bis_skin_checked="1">
                                                            <p>GNM program is meant to prepare general nurses who can efficiently perform as members of the health team and capable of dealing the contingencies in both the hospitals and other such organizations.
                                                            </p>
                                                        </div>
                                                        <div class="clearfix" bis_skin_checked="1"></div>
                                                        <div class="course-readmore" bis_skin_checked="1">
                                                            <a href="{{ route('courses.gnm')}}" bis_skin_checked="1">View More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END .course-content -->
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cta part here -->
        @include('landing.components.get_started')
    <!-- cta part end -->
@endsection
