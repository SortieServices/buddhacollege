<div class="col-lg-3 bg-light pt-2">
    <div class="blog_sidebar left-sidebar">
        <div data-aos="fade-up" data-aos-duration="1600" class="single_sidebar">
            <h3>Courses</h3>
            <div class="category_list">
                <p> <a href="{{ route('courses.index') }}" class="{{ request()->is('courses') ? 'courses_active' : '' }} "><i class="arrow_carrot-right"></i>Undergraduate Courses</a> </p>
                <p> <a href="{{ route('courses.d-pharma') }}" class="{{ request()->is('courses/d-pharma') ? 'courses_active' : '' }}"><i class="arrow_carrot-right"></i>Graduate Courses</a> </p>


            </div>
        </div>
    </div>
</div>
