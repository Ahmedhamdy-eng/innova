@extends('layouts.master')
@section('content')

    <!-- slider -->
    <section class="slider home3">
        <div class="elip-header4 animate-rotate">
            <img src="{{asset("website/assets/images/mark-page/Innova.png")}}" class="img-max_width" alt="img">
        </div>
        <!-- <div class="elip-header5 animate-up">
            <img src="/static/assets/images/mark-page/health.png" alt="img">
        </div> -->
        <div class="container-fuild">
            <div class="swiper-container mainslider">
                <div class="swiper-wrapper">

                    @foreach($sliders as $slider)

                        <div class="swiper-slide">
                            <div class="flat-slider">
                                <div class="overlay-slider style"></div>
                                <div class="sld-img"><img src="{{ $slider?->getFirstMediaUrl("attachment") }}" alt="">
                                </div>
                                <div class="content">
                                    <div class="heading">
                                        <h1>{{$slider->title}}</h1>
                                        <p>{{$slider->content}}
                                        </p>
                                    </div>
                                    <!-- <div class="button-slider">
                                        <a href="#" class="button btn-style3 btn-1"><span>Discover More </span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
        <div class="button-custom-slider">
            <div class="swiper-button-next button-slide-custom-next"></div>
            <div class="swiper-button-prev button-slide-custom-prev"></div>
        </div>
    </section>


    <!-- flat trusted -->
    <section class="tf-space flat-trusted">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="media-box">
                        <div class="mediafull">
                            <img src="{{ $partner?->getFirstMediaUrl('image')}}" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms">
                    <div class="trusted-heading-without-marge wow fadeInUp" data-wow-delay="0ms"
                         data-wow-duration="1100ms">
                        <h2 class="tf-title"> {{ $partner->name }}  <span class="text-color-3 style-title"> </span></h2>
                    </div>
                    <!-- <h3 class="text-color-3">At Innova,</h3> -->
                    <p>{{ $partner->description}}
                    </p>
                    <div class="img-title50 wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1100ms"
                         style="padding-top: 10px;">
                        <a href="https://www.octapharma.com/">
                            <img src="{{ $partner?->getFirstMediaUrl('logo')}}" alt="images">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- flat brand -->
    <section class="flat-brand">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="700ms">
                        <h2 class="tf-title text-color-1">Products</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="brand-slider">
                        <div class="swiper-container carousel-4">
                            <div class="swiper-wrapper">

                            @foreach($products as $product)
                                    <div class="swiper-slide wow zoomInLeft" style="width: 180px;height: 270px;"
                                         data-wow-delay="0ms" data-wow-duration="1100ms">
                                        <div class="slogan-logo" style="height: 100%;">
                                            <a href="{{route("product.show", $product->id)}}">
                                                <img src=" {{ $product?->getFirstMediaUrl('image') }}" alt="images"
                                                     style="height: 85%;">
                                            </a>
                                            <div class="content-white">
                                                <h3>{{ $product->name }}</h3>
                                            </div>
                                        </div>
                                    </div>

                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tf-space flat-blog-grid home03">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                        <h2 class="tf-title">Company <span class="text-color-3 style-title">Blog</span></h2>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- flat servece -->
    <section class="tf-space flat-servece">
        <div class="overlay-page"></div>
    </section>

    <!-- flat team -->
    <section class="flat-team flat-blog-grid home3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-heading wow fadeInDown" data-wow-delay="0ms" data-wow-duration="500ms">
                        <h2 class="tf-title text-color-1">Management Team</h2>
                    </div>
                </div>
                <div class="col-lg-1">
                </div>

                @foreach($teamMembers as $index => $teamMember)
                <div class="col-lg-2 col-md-6">
                    <div class="team-box grid-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="media">
                            <img src="{{$teamMember?->getFirstMediaUrl('member')}}" alt="images">
                        </div>
                        <div class="content">
                            <div class="sub-title-content">{{$teamMember->position}}</div>
                            <h3><a href="{{ route('our-board', ['section' => $teamMember->sort ])}}">{{$teamMember->name}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
