@extends('layouts.master')
@section('content')


    <section class="flat-title-page">
        <div class="overlay-slider style"></div>
        <div class="overlay-page">
            <img src="{{ asset("website/assets/images/mark-page/Contact%20Us-min.png")}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="zup col-lg-12 col-md-12">
                    <div class="breadcrumbs">
                        <h1>Contact Us</h1>
                        <div class="breadcrumb-trail link-style-2">
                            <a class="home" href="{{route('home')}}">Home Page</a><span>Contact Us.</span>
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

                    <div class="box">
                        <div class="heading">
                            <div class="sub-title-contact wow fadeInDown" data-wow-delay="100ms"
                                 data-wow-duration="800ms"></div>

                            <div class="title-contact wow lightSpeedIn" data-wow-delay="100ms"
                                 data-wow-duration="800ms">Cairo, <span class="text-color-3">Egypt</span></div>
                            <div class="row wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                                <div class="col-md-12">
                                    <p><span class="text-color-3">{{$contact->description}}</span></p>
                                    <p>{{$contact->address . $contact->country . $contact->city}}</p>
                                </div>
                            </div>
                            <div class="row wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                <div class="col-md-12">
                                    <p class="link-style-3"><i class="fa fa-phone" aria-hidden="true">
                                        {{$contact->phone}}</i></p>
                                    <p class="link-style-3"><i class="fa fa-fax" aria-hidden="true"> {{ $contact->fax }}</i>
                                    </p>
                                </div>
                            </div>
                            <div class="row wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                <div class="col-md-12">
                                    <p class="link-style-3"><i class="fa fa-envelope" aria-hidden="true">
                                            {{ $contact->email }}</i></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <br>
                    <div class="inner">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13812.297892657982!2d31.3611463!3d30.0633997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d0acba9379f%3A0x2d7ef43a75f1b7b7!2sInnova%20Healthcare%20LLC.!5e0!3m2!1sen!2seg!4v1712234719324!5m2!1sen!2seg"
                                width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 padding-top">
                    <div class="post">
                        <div id="respond" class="respond-comment">
                            <h1 class="title-comment  wow lightSpeedIn" data-wow-delay="100ms"
                                data-wow-duration="800ms"><span class="text-color-3">Contact Us</span></h1>
                            <!-- <p class="text wow fadeInRight" data-wow-delay="100ms" data-wow-duration="800ms"> You can send your suggestions and comments to us via</p>
                 -->
                            <form id="contactform" class="comment-form form-submit wow fadeInRight"
                                  data-wow-delay="100ms" data-wow-duration="800ms"
                                  method="post" action="{{ route('suggestion.store')}}"
                                  enctype="multipart/form-data">

                                @csrf

                                <div class="text-wrap clearfix">
                                    <fieldset class="name-wrap style-text">
                                        <input type="text" class="tb-my-input" maxlength="300"
                                               name="full_name"
                                               placeholder="Enter Full Name" required=""
                                        >
                                    </fieldset>
                                    <fieldset class="email-wrap style-text">
                                        <input type="email"  class="tb-my-input" maxlength="254"
                                               name="email"
                                               placeholder="Enter Email Address" required=""
                                        >
                                    </fieldset>
                                    <fieldset class="phone-wrap style-text">
                                        <input type="number" id="Phone" class="tb-my-input" maxlength=""
                                               name="phone"
                                               placeholder="Enter Mobile Number" required=""
                                        >
                                    </fieldset>
                                </div>
                                <fieldset class="message-wrap">
                                <textarea id="comment-message" name="message" rows="8" tabindex="4"
                                          placeholder="Enter Your Message"
                                          aria-required="true"></textarea>
                                </fieldset>
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
