@extends('layouts.master')
@section('content')

    <section class="flat-title-page">
        <div class="overlay-slider style"></div>
        <div class="overlay-page">
            <img src="{{asset("website/assets/images/mark-page/our-goal.png")}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="zup col-lg-12 col-md-12">
                    <div class="breadcrumbs">
                        <h1>Our Company</h1>
                        <div class="breadcrumb-trail link-style-2">
                            <a class="home" href="{{route('home')}}">Home Page</a><span>Company Overview</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tf-space flat-and and-style">
        <div class="container">
            <div class="row">

                <div class="col-12 container-center">
                    <img src="{{asset("website/assets/media/Image/Innova_Healthcare_yX9AGLf.png")}}" alt="images"
                         style="height: 140px;">
                </div>

            </div>
        </div>
    </section>


    <section class="tf-space flat-trusted" id="2">

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="media-box">
                        <div class="mediafull">
                            <img class="img100" src="{{ $vision?->getFirstMediaUrl('image')}}" alt="images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8  wow fadeInRight" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="trusted-heading">
                        <h2 class="tf-title"><span class="text-color-3 style-title">{{$vision?->name}}</span></h2>
                    </div>
                    <!-- <h3 class="text-color-3"></h3> -->
                    <p><b>{{$vision?->description}}</b></p>
                </div>

            </div>
        </div>

    </section>


    <section class="tf-space flat-trusted" id="1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="trusted-heading">
                        <h2 class="tf-title"><span class="text-color-3 style-title">{{ $mission?->name }}</span></h2>
                    </div>
                    <!-- <h3 class="text-color-3"></h3> -->
                    <p><b>{{$mission?->description}}</b></p>
                </div>

                <div class="col-lg-4 col-md-4  wow fadeInDown" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="media-box">
                        <div class="mediafull">
                            <img class="img100" src="{{ $mission?->getFirstMediaUrl('image')}}" alt="images">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="tf-space flat-trusted" id="4">

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="media-box">
                        <div class="mediafull">
                            <img class="img100" src="{{ $companyStrategy?->getFirstMediaUrl('image')}}"
                                 alt="images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8  wow fadeInRight" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="trusted-heading">
                        <h2 class="tf-title"><span
                                class="text-color-3 style-title">{{ $companyStrategy?->name }}</span></h2>
                    </div>
                    <!-- <h3 class="text-color-3"></h3> -->
                    <p><b>{{$companyStrategy?->description}}</b></p>
                </div>

            </div>
        </div>

    </section>



    <section class="tf-space flat-trusted" id="5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="trusted-heading">
                        <h2 class="tf-title"><span class="text-color-3 style-title">{{$ourStrategicStrength?->name}}</span></h2>
                    </div>
                    <!-- <h3 class="text-color-3"></h3> -->
                    <p><b>{{$ourStrategicStrength?->description}}</b></p>
                </div>

                <div class="col-lg-4 col-md-4  wow fadeInDown" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="media-box">
                        <div class="mediafull">
                            <img class="img100" src="{{ $ourStrategicStrength?->getFirstMediaUrl('image')}}" alt="images">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="tf-space flat-trusted" id="6">

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="media-box">
                        <div class="mediafull">
                            <img class="img100" src="{{ $ourValue?->getFirstMediaUrl('image')}}" alt="images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8  wow fadeInRight" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="trusted-heading">
                        <h2 class="tf-title"><span class="text-color-3 style-title">{{ $ourValue?->name }}</span></h2>
                    </div>
                    <!-- <h3 class="text-color-3"></h3> -->
                    <p><b>{{$ourValue?->description}}</b></p>
                </div>

            </div>
        </div>

    </section>

@endsection

@section('scripts')
    <script>

        const params = (new URL( location.href )).searchParams;

        const id = params.get('section');

        const block = document.getElementById(`${id}`);

        if ( block ) {
            block.scrollIntoView({ behavior: 'smooth' })
        }

    </script>
@endsection
