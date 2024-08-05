@include('layouts.header')

<body class="header-fixed counter-scroll">
<!-- preloader -->
<div class="preload preload-container">
    <!-- <div class="preload-logo"></div> -->
    <div class="preload-page animate-rotate">
        <img src="{{asset("website/assets/images/mark-page/Innova.png")}}" class="img-max_width" alt="img">
    </div>

</div>
<!-- /preloader -->
@include('sweetalert::alert')
<!-- wrapper -->
<div id="wrapper" class="animsition">

    <!-- page -->
    <div id="page" class="clearfix">

        @include('layouts.navbar')

          @yield('content')


        @include('layouts.footer')


    </div>
    <!-- /#page -->

</div>
<!-- /wrapper -->

<a id="scroll-top"></a>


@include('layouts.scripts')



</body>


<!-- Mirrored from innovahealthcare.net/innova/our-board by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 13:46:29 GMT -->
</html>
