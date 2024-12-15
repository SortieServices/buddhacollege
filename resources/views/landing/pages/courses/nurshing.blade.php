@extends('landing.layouts.base')

@section('title', 'Bsc Nursing')

@section('content')


    <!-- course CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/courses.css')}}"/>

    @include('landing.components.breadcrumb',['title' => 'Courses', 'subtitle' => 'GNM', 'banner' => ''])

    <!-- blog left sidebar part here -->
    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                @include('landing.components.courses-sidebar')
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
                                                        <a href="course-details.html" bis_skin_checked="1">
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
                                                        <a href="course-category.html" rel="tag" bis_skin_checked="1">Graduate Program</a>
                                                    </div>
                                                    <a href="course-details.html" class="course-permalink" bis_skin_checked="1">
                                                        <h3 class="course-title">Bechelor in Nursing</h3>
                                                    </a>
                                                    <div class="separator" bis_skin_checked="1"></div>
                                                    <div class="course-info" bis_skin_checked="1">
                                                        <div class="course-description" bis_skin_checked="1">
                                                            <p>The duration of the course for B.Sc Nursing shall be 4 years including internship. The course commences from 1st august of the academic year. University examinations are conducted at the end of the year (non semester pattern). Medium of instruction is English for all the subjects of the study and for examination. Buddha health care & Higher Education, Pharmacy &Nursing College, Ranchi, provides rich clinical experience and students will be posted in different hospitals with whom we have tie up for the same.
                                                            </p>
                                                        </div>
                                                        <div class="clearfix" bis_skin_checked="1"></div>
                                                        {{-- <div class="course-readmore" bis_skin_checked="1">
                                                            <a href="course-details.html" bis_skin_checked="1">View More</a>
                                                        </div> --}}
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
    <!-- blog left sidebar part end -->

    <!-- cta part here -->
        @include('landing.components.get_started')
@endsection
