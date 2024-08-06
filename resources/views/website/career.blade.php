@extends('layouts.master')
@section('content')

    <section class="flat-title-page">
        <div class="overlay-slider style"></div>
        <div class="overlay-page">
            <img src="{{ asset("website/assets/images/mark-page/cateeeeers.png")}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="zup col-lg-12 col-md-12">
                    <div class="breadcrumbs">
                        <h1>Careers</h1>
                        <div class="breadcrumb-trail link-style-2">
                            <a class="home" href="{{route("home")}}">Home Page</a><span>Careers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="flat-contact flat-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="post">
                        <div id="respond" class="respond-comment">

                            <h1 class="title-comment wow lightSpeedIn" data-wow-delay="100ms"
                                data-wow-duration="800ms"><span class="text-color-3">{{$career?->title}}</span>
                            </h1>
                            <p class="text wow fadeInRight" data-wow-delay="100ms"
                               data-wow-duration="800ms">{{ $career?->description }}</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="800ms">
                    <div class="post">
                        <div id="respond" class="respond-comment">
                            <form id="contactform" class="comment-form form-submit"
                                  method="post" action="{{ route('career.store')}}"
                                  enctype="multipart/form-data">
                           @csrf
                                <div class="text-wrap clearfix">
                                    <fieldset class="name-wrap style-text">
                                        <input type="text"  class="tb-my-input" maxlength="300" name="name"
                                               placeholder="Enter Full Name" required="">
                                    </fieldset>
                                    <fieldset class="email-wrap style-text">
                                        <input type="email" class="tb-my-input" maxlength="254" name="email"
                                               placeholder="Enter Email Address" required="">
                                    </fieldset>
                                </div>
                                <div class="text-wrap clearfix">
                                    <fieldset class="name-wrap style-text">
                                        <input type="text" class="tb-my-input" maxlength="100"
                                               name="address" placeholder="Enter Address" required=""
                                        >
                                    </fieldset>
                                </div>
                                <div class="text-wrap clearfix">
                                    <fieldset class="name-wrap style-text">
                                        <input type="text" class="tb-my-input" maxlength="100"
                                               name="state" placeholder="Enter State" required="">
                                    </fieldset>
                                    <fieldset class="name-wrap style-text">
                                        <input type="text" class="tb-my-input" maxlength="100"
                                               name="city" placeholder="Enter City" required="">
                                    </fieldset>
                                    <fieldset class="phone-wrap style-text">
                                        <input type="number" class="tb-my-input" maxlength="" name="phone"
                                               placeholder="Enter Mobile Number" required=""
                                        >
                                    </fieldset>
                                </div>
                                <div class="text-wrap clearfix">
                                    <fieldset class="name-wrap style-text">
                                        <input type="text" class="tb-my-input" maxlength="100"
                                               name="job_vacancy"
                                               placeholder="Enter Job Vacancy" required=""
                                        >
                                    </fieldset>
                                    <fieldset class="name-wrap style-text">
                                        <input type="file" name="attachment" required aria-invalid="true">
                                    </fieldset>
                                </div>
                                <button name="submit" type="submit" id="comment-reply"
                                        class="button btn-style4 btn-submit-comment"><span>Submit Now </span>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
