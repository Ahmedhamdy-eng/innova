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
                        <h1>Product Details</h1>
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
                        <img src="{{$product?->getFirstMediaUrl('image')}}" alt="images">
                    </div>
                </div>
                <div class="col-lg-7  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="journey-heading">
                        <div class="tf-sub-title">{{$product?->category?->name}}</div>
                        <h2 class="tf-title"><span class="text-color-3 style-title">{{$product?->name}}</span></h2>
                    </div>
                    <p class="text-style">
                        {{$product?->description}}
                    </p>

                    <div class="service-content mt-25">

                        @if(request('type') == Product::HEALTHCARE_PROFESSIONAL)
                            {!! $product?->healthcare_professional_description!!}
                        @else
                            {!! $product?->public_member_description!!}
                        @endif
                    </div>
                    <br>

                    <div class="col-lg-12 col-md-12">
                        <h6 class="tf-title">
                    <span class="text-color-3 style-title">
                        Reporting of suspected adverse reactions
                    </span>
                        </h6>
                        <p class="texts wow fadeInDown" data-wow-delay="100ms" data-wow-duration="800ms">
                            <a href="{{route("reporting")}}">Reporting</a>
                        </p>
                    </div>
                </div>

            </div>
    </section>
@endsection
