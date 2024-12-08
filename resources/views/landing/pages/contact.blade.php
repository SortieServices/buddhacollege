@extends('landing.layouts.base')

@section('title', 'Contact Us')

@section('content')

 <!-- breadcrumb part -->

 @include('landing.components.breadcrumb',['title' => 'Contact Us', 'subtitle' => '', 'banner' => ''])
<!-- breadcrumb part end -->

<!-- Start contact us -->
<div class="review_form contact_form section_padding">
    <div class="container">
        <h3 data-aos="fade-up"
        data-aos-duration="1200">Feel Free to Contact with Us</h3>
        <form data-aos="fade-up"
        data-aos-duration="1600" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form_single_item">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_single_item">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_single_item">
                        <input type="phone" name="phone" placeholder="Phone" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_single_item">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form_single_item">
                        <textarea name="message" placeholder="Message" required></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn_3" value="Submit">
        </form>
    </div>
</div>
<!-- End contact us -->

@endsection
