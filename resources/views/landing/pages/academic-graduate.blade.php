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
                                                        <a href="{{ route('courses.b-pharma')}}" bis_skin_checked="1">
                                                            <div class="thumbnail-preview" bis_skin_checked="1">
                                                                <div class="thumbnail" bis_skin_checked="1">
                                                                    <div class="centered" bis_skin_checked="1">
                                                                        <img width="370" height="280" src="{{ asset('landing/uploads/img/b-pharma.jpg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- START .course-content -->
                                                <div class="course-content" bis_skin_checked="1">
                                                    <div class="course-categories" bis_skin_checked="1">
                                                        <a href="course-category.html" rel="tag" bis_skin_checked="1">Graduate Program</a>
                                                    </div>
                                                    <a href="{{ route('courses.b-pharma')}}" class="course-permalink" bis_skin_checked="1">
                                                        <h3 class="course-title">Bachelor in Pharmacy</h3>
                                                    </a>
                                                    <div class="separator" bis_skin_checked="1"></div>
                                                    <div class="course-info" bis_skin_checked="1">
                                                        <div class="course-description" bis_skin_checked="1">
                                                            <p>The Pharmacy profession offers diverse job opportunities in India and around the world. Pharmacists may practice in a community or hospital pharmacy; a nursing home or extended care facility; the Pharmaceutical Industry, Biotechnology industry and other private or public companies. Pharmacy graduates worldwide are among the best-paid and most respected professionals and the recent healthcare trends make pharmacy a near recession-proof career choice!
                                                            </p>
                                                        </div>
                                                        <div class="clearfix" bis_skin_checked="1"></div>
                                                        <div class="course-readmore" bis_skin_checked="1">
                                                            <a href="{{ route('courses.b-pharma')}}" bis_skin_checked="1">View More</a>
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
                                                        <a href="{{ route('courses.nurshing')}}" bis_skin_checked="1">
                                                            <div class="thumbnail-preview" bis_skin_checked="1">
                                                                <div class="thumbnail" bis_skin_checked="1">
                                                                    <div class="centered" bis_skin_checked="1">
                                                                        <img width="370" height="280" src="{{ asset('landing/uploads/img/nursing.jpg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- START .course-content -->
                                                <div class="course-content" bis_skin_checked="1">
                                                    <div class="course-categories" bis_skin_checked="1">
                                                        <a href="{{ route('courses.nurshing')}}" rel="tag" bis_skin_checked="1">Graduate Program</a>
                                                    </div>
                                                    <a href="{{ route('courses.nurshing')}}" class="course-permalink" bis_skin_checked="1">
                                                        <h3 class="course-title">Bechelor in Nursing</h3>
                                                    </a>
                                                    <div class="separator" bis_skin_checked="1"></div>
                                                    <div class="course-info" bis_skin_checked="1">
                                                        <div class="course-description" bis_skin_checked="1">
                                                            <p>The duration of the course for B.Sc Nursing shall be 4 years including internship. The course commences from 1st august of the academic year. University examinations are conducted at the end of the year (non semester pattern).
                                                            </p>
                                                        </div>
                                                        <div class="clearfix" bis_skin_checked="1"></div>
                                                        <div class="course-readmore" bis_skin_checked="1">
                                                            <a href="{{ route('courses.nurshing')}}" bis_skin_checked="1">View More</a>
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
