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
                        <h1>{{ $therapeutic_area?->name }}</h1>
                        <div class="breadcrumb-trail link-style-2">
                            <a class="home" href="{{route('home')}}">Home Page</a><span>{{ $therapeutic_area?->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="tf-space flat-blog flat-blog-details">
        <div class="container">
            <div class="row">
                <div id="loadData" class="col-lg-8 col-md-12">
                    @foreach($products as $product)
                    <div class="flat-blog-grid wow fadeInDown" data-wow-delay="100ms" data-wow-duration="800ms">
                        <div class="grid-post style-post">
                            <div class="img-box">
                                <div class="media">
                                    <img src="{{$product?->getFirstMediaUrl('image')}}" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title-item">{{$product?->name}}</h3>
                                <p>{{$product?->description}}
                                <h5>To access the appropriate content please confirm if you are </h5>
                                </p>

                                <div class="read-more link-style-3">

                                    <div class="row">
                                        <div class="col-lg-5">
                                            <a href="{{route("product.show",['id'=>$product?->id, 'type' => "healthcare-professional"])}}">a healthcare professional</a>
                                        </div>
                                        <div class="col-lg-2">
                                            <p> or </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <a href="{{route("product.show",['id'=>$product?->id, 'type' => "member-of-the-public"])}}">a member of the public</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="themesflat-pagination clearfix">

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="800ms">
                    <aside class="side-bar">
                        <div class="inner-side-bar">
                            <div class="widget search">
                                <div class="widget-title">
                                    <h3>Search Here</h3>
                                </div>
                                <form role="search" id="ApplyFilter" class="search-form">
                                    <input type="hidden" name="csrfmiddlewaretoken"
                                           value="MBYxW4idVeyCbPhBLjFkBZtuzkyGleHrse31mTHKzhJLG57L5XLGrJW8Tk5EXn9D">
                                    <input type="hidden" name="page" id="pagenumber" value="1">
                                    <input type="hidden" name="product_category" id="productCategory">
                                    <!--<input type="number" class="search-field" maxlength="" name="product_category" placeholder="Enter Product category"  > -->
                                    <input type="text" class="search-field" maxlength="None" name="name"
                                           placeholder="Search Product">
                                    <button class="search-icon search-submit" type="submit" title="Search"></button>
                                </form>
                            </div>
                            <div class="widget widget-categories">
                                <div class="widget-title item">
                                    <h3>Category</h3>
                                </div>
                                <ul>
                                    <li>
                                        <a href="{{ route('therapeutic-area.show',['id' => $therapeutic_area?->id, 'category'=> "all"]) }}">All</a>
                                    </li>

                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('therapeutic-area.show',['id' => $therapeutic_area?->id, 'category'=> $category?->id]) }}">{{$category?->name}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
