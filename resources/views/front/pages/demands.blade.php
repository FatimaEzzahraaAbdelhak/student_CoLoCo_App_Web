@extends('front.layout.master')

@section('content')

@include('front.layout.shared.slider')

<div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Demands</h3>
                    </div>
                </div>
            </div>
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_left_sidebar">
                        <div class="row">
                            @foreach($demands as $demand)
                                <div class="col-md-6">
                                    <article class="blog_item">
                                        <div class="blog_details">
                                            <p>{{ $demand->comment }}</p>
                                            <ul class="blog-info-link">
                                                <li><a href="#"><i class="fa fa-user"></i>{{ $demand->fullname }} - {{ $demand->phone }}</a></li>
                                                <li><a href="#"><i class="fa fa-money"></i>{{ $demand->budget }} DH</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
 </div>
@endsection
