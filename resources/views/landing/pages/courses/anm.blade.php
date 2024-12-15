@extends('landing.layouts.base')

@section('title', 'ANM')

@section('content')


    <!-- course CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/courses.css')}}"/>

    @include('landing.components.breadcrumb',['title' => 'Courses', 'subtitle' => 'ANM', 'banner' => ''])

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
                                                                        <img width="370" height="280" src="{{ asset('landing/uploads/img/anm.jpg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- START .course-content -->
                                                <div class="course-content" bis_skin_checked="1">
                                                    <div class="course-categories" bis_skin_checked="1">
                                                        <a href="course-category.html" rel="tag" bis_skin_checked="1">Diploma</a>
                                                    </div>
                                                    <a href="course-details.html" class="course-permalink" bis_skin_checked="1">
                                                        <h3 class="course-title">ANM</h3>
                                                    </a>
                                                    <div class="separator" bis_skin_checked="1"></div>
                                                    <div class="course-info" bis_skin_checked="1">
                                                        <div class="course-description" bis_skin_checked="1">
                                                            <p>Auxiliary Nurse Midwifery (Nursing) course is a 12th standard Medical Nursing course. It deals with the field of science and covers healthcare profession focused on the care of individuals, families, and communities so they may attain, maintain, or recover optimal health and quality of life from conception to death.
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
