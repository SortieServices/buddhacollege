<div class="col-lg-3 bg-light pt-2">
    <div class="blog_sidebar left-sidebar">
        <div data-aos="fade-up" data-aos-duration="1600" class="single_sidebar">
            <h3>Courses</h3>
            <div class="category_list">
                <p> <a href="{{ route('courses.index') }}" class="{{ request()->is('courses') ? 'courses_active' : '' }} "><i class="arrow_carrot-right"></i>ALL Courses</a> </p>
                <p> <a href="{{ route('courses.d-pharma') }}" class="{{ request()->is('courses/d-pharma') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>D.Pharma</a> </p>
                <p> <a href="{{ route('courses.b-pharma') }}" class="{{ request()->is('courses/b-pharma') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>B.Pharma</a> </p>
                <p> <a href="{{ route('courses.nurshing') }}" class="{{ request()->is('courses/nurshing') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>B.sc(Nursing)</a> </p>
                <p> <a href="{{ route('courses.anm') }}" class="{{ request()->is('courses/anm') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>ANM </a> </p>
                <p> <a href="{{ route('courses.gnm') }}" class="{{ request()->is('courses/gnm') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>GNM</a> </p>

            </div>
        </div>
    </div>
</div>
