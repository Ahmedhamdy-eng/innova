@php use App\Models\Product; @endphp
@extends('layouts.master')
@section('content')
    <section class="flat-title-page">
        <div class="overlay-slider style"></div>
        <div class="overlay-page">
            <img src="{{asset("website/assets/images/mark-page/Therapeutic-areas1.png")}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="zup col-lg-12 col-md-12">
                    <div class="breadcrumbs">
                        <h1>Blog Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tf-space flat-journey">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-5  wow fadeInRight" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="media">
                        @if($blog?->type == "news")
                            <img src="{{$blog?->getFirstMediaUrl('attachment')}}" alt="images">
                        @endif
                        @if($blog?->type == "video")
                                <video controls>
                                    <source src="{{$blog?->getFirstMediaUrl('attachment')}}" type="{{ optional(optional($blog->getMedia("attachment"))[0])->mime_type}}">
                                    Your browser does not support the video tag.
                                </video>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
{{--                    <div class="journey-heading">--}}
{{--                        <div class="tf-sub-title">{{$blog?->category?->name}}</div>--}}
{{--                        <h2 class="tf-title"><span class="text-color-3 style-title">{{$blog?->name}}</span></h2>--}}
{{--                    </div>--}}
                    <p class="text-style">
                        {{$blog?->title}}
                    </p>

                    <div class="service-content mt-25">
                            {{ $blog?->content }}

                    </div>
                    <br>

                    <div class="col-lg-12 col-md-12">
                        <h6 class="tf-title">
{{--                    <span class="text-color-3 style-title">--}}
{{--                        Reporting of suspected adverse reactions--}}
{{--                    </span>--}}
                        </h6>
{{--                        <p class="texts wow fadeInDown" data-wow-delay="100ms" data-wow-duration="800ms">--}}
{{--                            <a href="{{route("reporting")}}">Reporting</a>--}}
{{--                        </p>--}}
                    </div>
                </div>

            </div>
    </section>
@endsection
