@isset($title)
    <section class="breadcrumb_part" style="background-image: url('{{ isset($banner) &&  $banner != '' ? asset('landing/uploads/img/'.$banner) : asset('landing/uploads/img/banner-1.jpg') }}'); background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>{{$title}}</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{ route('home')}}">Home</a>
                            <i class="arrow_carrot-right"></i>
                            <span>{{$title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endisset

