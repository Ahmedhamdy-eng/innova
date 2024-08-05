@extends('layouts.master')
@section('content')

    <section class="flat-title-page">
        <div class="overlay-slider style"></div>
        <div class="overlay-page">
            <img src="{{asset("website/assets/images/mark-page/Reporting.png")}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="zup col-lg-12 col-md-12">
                    <div class="breadcrumbs">
                        <h1>Reporting</h1>
                        <div class="breadcrumb-trail link-style-2">
                            <a class="home" href="{{route("home")}}">Home Page</a><span>Reporting</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="flat-contact flat-blog-details">
        <div class="container">
            <div class="row">
                @foreach($reports as $index => $report)

                        <div class="col-lg-6 col-md-12 padding-top">
                            <div class="box">
                                <div class="heading">
                                    <h3 class="wow lightSpeedIn" data-wow-delay="100ms"
                                        data-wow-duration="800ms">{{$report->subject_en}}</h3>
                                    <div class="row wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                                        <div class="col-md-12">
                                            <p><span>{{$report->description_en}}</span></p>
                                        </div>
                                    </div>
                                    @if($report->phone)
                                        <div class="row wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                            <div class="col-md-12">
                                                <p class="link-style-3"><i class="fa fa-phone" aria-hidden="true">
                                                        {{$report->phone}}</i></p>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                        <div class="col-md-12">
                                            <a href="mailto:{{$report->email}}"><p class="link-style-3"><i
                                                        class="fa fa-envelope" aria-hidden="true">
                                                        {{$report->email}}</i></p></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="slider-sec">

                                </div>

                            </div>
                            <br>

                        </div>


                    <div class="col-lg-6 col-md-12 padding-top">

                            <div class="box">
                                <div class="heading">
                                    <h3 class="wow lightSpeedIn" data-wow-delay="100ms" data-wow-duration="800ms"
                                        style="direction:rtl;">{{$report->subject_ar}}</h3>
                                    <div class="row wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms"
                                         style="direction:rtl;">
                                        <div class="col-md-12">
                                            <p><span>{{$report->description_ar}}</span></p>
                                        </div>
                                    </div>
                                    @if($report->phone)
                                        <div class="row wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                            <div class="col-md-12">
                                                <p class="link-style-3"><i class="fa fa-phone" aria-hidden="true">
                                                        {{$report->phone}}</i></p>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                        <div class="col-md-12">
                                            <a href="mailto:{{$report->email}}"><p class="link-style-3"><i
                                                        class="fa fa-envelope" aria-hidden="true">
                                                        {{$report->email}}</i></p></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="slider-sec">

                                </div>

                            </div>
                            <br>

                        </div>

                @endforeach
            </div>
        </div>
    </section>
@endsection
