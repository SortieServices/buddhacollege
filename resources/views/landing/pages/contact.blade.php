@extends('landing.layouts.base')

@section('title', 'Contact Us')

@section('content')

 <!-- breadcrumb part -->

 @include('landing.components.breadcrumb',['title' => 'Contact Us', 'subtitle' => '', 'banner' => ''])
<!-- breadcrumb part end -->

<!-- Start contact us -->
<div class="review_form contact_form section_padding">
    <div class="container">
        <h3 data-aos="fade-up" data-aos-duration="1200">Feel Free to Contact with Us</h3>
        <h4 data-aos="fade-up" data-aos-duration="1200" class="mb-2 text-primary"><i class="icon_pin"></i> Office Address,</h4>
        <p  data-aos="fade-up" data-aos-duration="1300"> 101, Shree Yamuna Apt. Opp Amity Univ. Near over Bridge, Doranda, Ranchi-834001 (Jharkhand)</p>
        <h4 data-aos="fade-up" data-aos-duration="1400" class="mb-2 text-primary"><i class="icon_pin"></i> Campus Address,</h4>
        <p  data-aos="fade-up" data-aos-duration="1500"> Angara, Ranchi Jharkhand – 835103</p>

        <h4 data-aos="fade-up" data-aos-duration="1600" class="mb-2 text-primary"> <i class="icon_phone"></i> Phone:</h4>
        <p  data-aos="fade-up" data-aos-duration="1700"> +91 70046-94875 | +91 90067-00158 | +91 80513-50087</p>

        <h4 data-aos="fade-up" data-aos-duration="1600" class="mb-2 text-primary"> <i class="icon_mail"></i> Email:</h4>
        <p  data-aos="fade-up" data-aos-duration="1700"> buddhahealthcarecollege@gmail.com |  healthcarebuddha@gmail.com</p>


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
