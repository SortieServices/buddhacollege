
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
  {{-- vendor css files --}}
  {{-- <link rel="stylesheet" href="{{ asset('admin/vendors/css/charts/apexcharts.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/extensions/toastr.min.css') }}">
@endsection
@section('page-style')
  {{-- Page css files --}}
  <link rel="stylesheet" href="{{ asset('admin/css/base/pages/dashboard-ecommerce.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/charts/chart-apex.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/extensions/ext-component-toastr.css') }}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Enquiry</h5>
          <p class="card-text font-small-3">You have won gold medal</p>
          <h3 class="mb-75 mt-2 pt-50">
            {{-- <a href="#">$48.9k</a> --}}
          </h3>
          <button type="button" class="btn btn-primary">View</button>
          {{-- <img src="{{asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" /> --}}
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Registration</h5>
          <p class="card-text font-small-3">You have won gold medal</p>
          <h3 class="mb-75 mt-2 pt-50">
            {{-- <a href="#">$48.9k</a> --}}
          </h3>
          <button type="button" class="btn btn-primary">View</button>
          {{-- <img src="{{asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" /> --}}
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Student Enrollment</h5>
          <p class="card-text font-small-3">You have won gold medal</p>
          <h3 class="mb-75 mt-2 pt-50">
            {{-- <a href="#">$48.9k</a> --}}
          </h3>
          <button type="button" class="btn btn-primary">View</button>
          {{-- <img src="{{asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" /> --}}
        </div>
      </div>
    </div>
</div>
    <!--/ Medal Card -->
<div class="row match-height">
    <div class="col-xl-6 col-md-6 col-12">
        <div class="card">
            <div class="card-body">
                <h5>Banner</h5>
                <div class="mb-75 mt-2 pt-50 banner_part">
                    <div class="single_banner_part">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 ">
                                <img src="{{asset('landing/uploads/2022/11/banner_1.png')}}" class="object-fit-contain border rounded img-fluid" alt="Medal Pic" />
                            </div>
                            <div class="col-lg-8">
                                <div class="banner_iner">
                                    <h2>Welcome to Buddha Nursing College</h2>
                                    <h5>Education is the best key success in life</h5>
                                    <a href="course-list.html" class="btn_2">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body border-top">
                <div class="mb-75 mt-2 pt-50 banner_part">
                    <div class="single_banner_part">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 ">
                                <img src="{{asset('landing/uploads/2022/11/banner_1.png')}}" class="object-fit-contain border rounded img-fluid" alt="Medal Pic" />
                            </div>
                            <div class="col-lg-8">
                                <div class="banner_iner">
                                    <h2>Welcome to Buddha Nursing College</h2>
                                    <h5>Education is the best key success in life</h5>
                                    <a href="course-list.html" class="btn_2">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary float-end">View</button>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-12">
        <div class="card">
            <div class="card-body">
                <h5>News &  <em>Events</em></h5>
                <div class="mb-75 mt-2 pt-50 banner_part">
                    <div class="single_banner_part">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 ">
                                <img src="{{asset('landing/uploads/2022/11/banner_1.png')}}" class="object-fit-contain border rounded img-fluid" alt="Medal Pic" />
                            </div>
                            <div class="col-lg-8">
                                <div class="banner_iner">
                                    <h2>Welcome to Buddha Nursing College</h2>
                                    <h5>Education is the best key success in life</h5>
                                    {{-- <a href="course-list.html" class="btn_2">Our Courses</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body border-top">
                <div class="mb-75 mt-2 pt-50 banner_part">
                    <div class="single_banner_part">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 ">
                                <img src="{{asset('landing/uploads/2022/11/banner_1.png')}}" class="object-fit-contain border rounded img-fluid" alt="Medal Pic" />
                            </div>
                            <div class="col-lg-8">
                                <div class="banner_iner">
                                    <h2>Welcome to Buddha Nursing College</h2>
                                    <h5>Education is the best key success in life</h5>
                                    {{-- <a href="course-list.html" class="btn_2">Our Courses</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary float-end">View</button>
            </div>
        </div>
    </div>
</div>

</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  {{-- <script src="{{ asset('admin/vendors/js/charts/apexcharts.min.js') }}"></script> --}}
  <script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  {{-- <script src="{{ asset('admin/js/scripts/pages/dashboard-ecommerce.js') }}"></script> --}}
@endsection
