@extends('front.layout.master')


@section('content')
     
@include('front.layout.shared.slider')

    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Housing offers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($housings as $housing)
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="{{ $housing->images }}" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                            <a href="{{ route('front.housings.show', ['id' => $housing->id]) }}"><h3>{{ $housing->title }}</h3></a>
                                    <div class="mark_pro">
                                        <img src="{{ asset('assets/front/img/svg_icon/location.svg') }}" alt="">
                                        <p>{{ substr($housing->address, 0, 40) }} ...</p>
                                    </div>
                                    <span class="amount">{{ $housing->price }} DH / Mois</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="{{ asset('assets/front/img/svg_icon/square.svg') }}" alt="">
                                            <span>{{ $housing->superficie }} Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="{{ asset('assets/front/img/svg_icon/bed.svg') }}" alt="">
                                            <span>{{ $housing->capacity }} Person(s)</span>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="#" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->
       


<!-- accordion  -->
<div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                                <div class="faq_ask">
                                    <h3>Frequently ask</h3>
                                        <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Adieus who direct esteem <span>It esteems luckily?</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    Who direct esteem It esteems?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    Duis consectetur feugiat auctor?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="accordion_thumb">
                            <img src="{{ asset('assets/front/img/banner/accordion.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- accordion  -->


<!-- counter_area  -->
<div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span  class="counter" >200</span> <span>+</span> </h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter" >300</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter" >15</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->


 <!-- testimonial_area  -->
 <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ asset('assets/front/img/svg_icon/quote.svg') }}" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('assets/front/img/case/testmonial.png') }}" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ asset('assets/front/img/svg_icon/quote.svg') }}" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('assets/front/img/case/testmonial.png') }}" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ asset('assets/front/img/svg_icon/quote.svg') }}" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ asset('assets/front/img/case/testmonial.png') }}" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->
@endsection
