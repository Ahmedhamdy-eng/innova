
<div id="site-header-wrap">
    <header id="site-header" class="header-style3">
        <div class="container">
            <div class="row">
                <div class=" col-lg-2 col-sm-9">
                    <div id="site-logo" class="clearfix logo-home2">
                        <div id="site-log-inner">
                            <a href="{{ route('home')}}" rel="home" class="main-logo">
                                <img src="{{asset("website/assets/images/logo/Logo.png")}}" alt="Innova" width="150"
                                     height="26" data-retina="assets/images/logo/logo-header@2x.png"
                                     data-width="96" data-height="26">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- /.mobile-button -->
                <!-- /#site-logo -->
                <div class=" col-lg-10 col-sm-3">
                    <div class="mobile-button home2 home3">
                        <span></span>
                    </div>
                    <div id="site-header-inner" class="style-2">
                        <div class="wrap-inner clearfix">
                            <nav id="main-nav" class="main-nav ">
                                <ul id="menu-primary-menu" class="menu">


                                    <li class="menu-item">
                                        <a href="{{ route('home')}}">Home</a>
                                    </li>


                                    <li class="menu-item-has-children">
                                        <a>Our Company</a>
                                        <ul class="sub-menu" style="display: block;">

                                            <li class="menu-item"><a href="{{ route('our-company',['section'=> 2])}}">Company’s Vision</a>
                                            </li>

                                            <li class="menu-item"><a href="{{ route('our-company',['section'=> 1])}}">Company’s
                                                    Mission.</a></li>

                                            <li class="menu-item"><a href="{{ route('our-company',['section'=> 4])}}">Company’s
                                                    Strategies</a></li>

                                            <li class="menu-item"><a href="{{ route('our-company',['section'=> 5])}}">Our Strategic
                                                    Strength</a></li>

                                            <li class="menu-item"><a href="{{ route('our-company',['section'=> 6])}}">Our Values</a></li>

                                            <li class="menu-item"><a href="{{route('our-board')}}">Leadership Team</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="menu-item-has-children">
                                        <a>Therapeutic Areas</a>
                                        <ul class="sub-menu">
                                        @foreach($therapeuticAreas as $therapeuticArea)

                                            <li class="menu-item">
                                                <a href="{{ route('therapeutic-area.show',$therapeuticArea->id)}}">
                                                {{ $therapeuticArea->name}}
                                                </a></li>

                                            @endforeach




                                        </ul>
                                    </li>


                                    <li class="menu-item">
                                        <a href="{{ route("reporting")}}">Reporting</a>
                                    </li>


                                    <li class="menu-item">
                                        <a href="{{route("career")}}">Careers</a>
                                    </li>


                                </ul>
                            </nav>
                            <!-- /#main-nav -->
                        </div>
                        <!-- /.wrap-inner -->
                    </div>
                    <div class="tf-button home2"><a href="{{route('suggestion')}}" class="button style btn-1">Contact
                            Us</a></div>
                </div>
            </div>
        </div>
        <!-- /#site-header-inner -->
    </header>
    <!-- /#site-header -->
</div>
<!-- #site-header-wrap -->
