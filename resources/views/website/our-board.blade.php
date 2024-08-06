@extends('layouts.master')
@section('content')

    <section class="flat-title-page">
        <div class="overlay-slider style"></div>
        <div class="overlay-page">
            <img src="{{asset("website/assets/images/mark-page/Our%20Leaders-min.png")}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="zup col-lg-12 col-md-12">
                    <div class="breadcrumbs">
                        <h1>Our Company</h1>
                        <div class="breadcrumb-trail link-style-2">
                            <a class="home" href="{{ route('home') }}">Home Page</a><span>Our Leaders</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @foreach($teamMembers as $index => $teamMember)
        @if($index % 2 == 0)
            <section class="tf-space flat-trusted" id="{{$teamMember?->sort}}">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                            <div class="media-box">
                                <div class="mediafull">
                                    <img class="img100" src="{{$teamMember?->getFirstMediaUrl('member')}}" alt="images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8  wow fadeInRight" data-wow-delay="100ms"
                             data-wow-duration="800ms">
                            <div class="trusted-heading">
                                <h2 class="tf-title"><span
                                        class="text-color-3 style-title">{{ $teamMember?->name }}</span>
                                </h2>
                            </div>
                            <h3 class="text-color-3">{{$teamMember?->position}}</h3>
                            <p>{{ $teamMember?->description}}</p>
                        </div>

                    </div>
                </div>

            </section>
        @else

            <section class="tf-space flat-trusted" id="{{$teamMember?->sort}}">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                            <div class="trusted-heading">
                                <h2 class="tf-title"><span
                                        class="text-color-3 style-title">{{ $teamMember?->name }}</span>
                                </h2>
                            </div>
                            <h3 class="text-color-3">{{$teamMember?->position}}</h3>
                            <p>{{ $teamMember?->description}}</p>
                        </div>

                        <div class="col-lg-4 col-md-4  wow fadeInDown" data-wow-delay="100ms" data-wow-duration="800ms">
                            <div class="media-box">
                                <div class="mediafull">
                                    <img class="img100" src="{{$teamMember?->getFirstMediaUrl('member')}}" alt="images">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
        @endif
    @endforeach

@endsection

@section('scripts')
    <script>
        const params = (new URL(location.href)).searchParams;

        const id = params.get('section');

        const block = document.getElementById(`${id}`);

        if (block) {
            block.scrollIntoView({behavior: 'smooth'})
        }

    </script>
@endsection
