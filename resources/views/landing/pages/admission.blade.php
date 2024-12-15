@extends('landing.layouts.base')

@section('title', 'Academic')

@section('content')

<link rel="stylesheet" href="{{ asset('landing/css/courses.css')}}"/>
    <!-- breadcrumb part -->

    @include('landing.components.breadcrumb',['title' => 'Admission', 'subtitle' => '', 'banner' => ''])
    <!-- breadcrumb part end -->

    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 bg-light pt-2">
                    <div class="blog_sidebar left-sidebar">
                        <div data-aos="fade-up" data-aos-duration="1600" class="single_sidebar">
                            {{-- <h3>Academic</h3> --}}
                            <div class="category_list">
                                <img width="370" height="280" src="{{ asset('landing/uploads/img/d-pharma.jpeg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                <img width="370" height="280" src="{{ asset('landing/uploads/img/b-pharma.jpg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
                                <img width="370" height="280" src="{{ asset('landing/uploads/img/anm.jpg')}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="container">
                        <h3>Admission</h3>
                        <form class="" action="{{ route('admission-registration.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12 mb-3 mt-3">
                                <label for="name">Student First Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                                <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-lg-12 mb-3 ">
                                <label for="name">Student Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                                <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3 ">
                                        <label for="name">Student Contact Number</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-lg-6 mb-3 ">
                                        <label for="name">Gender</label>
                                        <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                            <option value="">Select</option>
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : ''}}>Female</option>
                                        </select>
                                        <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3 ">
                                <label for="name">Student Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-lg-12 mb-3 ">
                                <label for="name">Father Name</label>
                                <input type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" placeholder="Father Name" value="{{ old('father_name') }}">
                                <span class="text-danger">@error('father_name'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-lg-12 mb-3 ">
                                <label for="name">Mother Name</label>
                                <input type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" placeholder="Mother Name" value="{{ old('mother_name') }}">
                                <span class="text-danger">@error('mother_name'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3 ">
                                        <label for="name">Qualification</label>
                                        <select name="education" class="niceSelect @error('education') is-invalid  @enderror">
                                            <option value="">Select</option>
                                            <option value="10th" {{ old('education') == '10th' ? 'selected' : ''}}>10th</option>
                                            <option value="12th" {{ old('education') == '12th' ? 'selected' : ''}}>12th</option>
                                            <option value="graduation" {{ old('education') == 'graduation' ? 'selected' : ''}}>Graduation</option>
                                            <option value="post_graduation" {{ old('education') == 'post_graduation' ? 'selected' : ''}}>Post Graduation</option>
                                        </select>
                                        <span class="text-danger">@error('education'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-lg-6 mb-3 ">
                                        <label for="name">Marks Obtained</label>
                                        <input type="text" class="form-control @error('marks_obtained') is-invalid @enderror" name="marks_obtained" placeholder="marks obtained" value="{{ old('marks_obtained') }}">
                                        <span class="text-danger">@error('marks_obtained'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3 ">
                                        <label for="name">Applied Course</label>
                                        <select name="applied_for" class="niceSelect @error('applied_for') is-invalid  @enderror">
                                            <option value="">Select</option>
                                            <option value="b-pharma" {{ old('applied_for') == 'b-pharma' ? 'selected' : ''}}>B-Pharma</option>
                                            <option value="d-pharma" {{ old('applied_for') == 'd-pharma' ? 'selected' : ''}}>D-Pharma</option>
                                            <option value="nurshing" {{ old('applied_for') == 'nurshing' ? 'selected' : ''}}>B.sc Nurshing</option>
                                            <option value="anm" {{ old('applied_for') == 'anm' ? 'selected' : ''}}>ANM</option>
                                            <option value="gnm" {{ old('applied_for') == 'gnm' ? 'selected' : ''}}>GNM</option>
                                        </select>
                                        <span class="text-danger">@error('applied_for'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="name">Date Of Birth</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birth" value="{{ old('dob') }}">
                                        <span class="text-danger">@error('dob'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="name">State</label>
                                        <select id="state" name="state" class="form-control @error('state') is-invalid @enderror">
                                            <option value="">Select</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('state'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="name">City</label>
                                        <select id="city" name="city" class="form-control @error('city') is-invalid @enderror">
                                            <option value="">Select</option>
                                        </select>
                                        <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="col-lg-12 mb-3">
                                <label for="name">Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Country">
                            </div> --}}
                            <div class="col-lg-12 mb-3">
                                <label for="name">Pincode</label>
                                <input type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" placeholder="Pincode" value="{{ old('pincode') }}">
                                <span class="text-danger">@error('pincode'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="name">Upload Id Proof</label>
                                <input type="file" class="form-control" name="id_proof" placeholder="Upload Id Proof">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="name">Upload final year marksheet in pdf</label>
                                <input type="file" class="form-control" name="marksheet" placeholder="Upload final year marksheet" >
                            </div>

                            <div class="col-lg-12">
                                <button class="btn_1" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cta part here -->
        @include('landing.components.get_started')
    <!-- cta part end -->

    <script>



    </script>
@endsection
