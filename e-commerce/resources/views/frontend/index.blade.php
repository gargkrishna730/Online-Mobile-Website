@extends('layouts.app-master')
@section('style')

    <style>
        @font-face {
            font-family: Arial !important;
            font-display: swap !important;
        }
    </style>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900");

        * {
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, 0.01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, 0.01) 0 0 1px;
        }

        body {
            font-family: "Rubik", sans-serif;
            font-size: 14px;
            font-weight: 400;
            background: #eff6fa;
            color: #000000;
        }

        div {
            display: block;
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .bbb_viewed {
            padding-top: 51px;
            padding-bottom: 60px;
            background: #eff6fa;
        }

        .bbb_main_container {
            background-color: #fff;
            padding: 11px;
        }

        .bbb_viewed_title_container {
            border-bottom: solid 1px #dadada;
        }

        .bbb_viewed_title {
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .bbb_viewed_nav_container {
            position: absolute;
            right: -5px;
            bottom: 14px;
        }

        .bbb_viewed_nav {
            display: inline-block;
            cursor: pointer;
        }

        .bbb_viewed_nav i {
            color: #dadada;
            font-size: 18px;
            padding: 5px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .bbb_viewed_nav:hover i {
            color: #606264;
        }

        .bbb_viewed_prev {
            margin-right: 15px;
        }

        .bbb_viewed_slider_container {
            padding-top: 13px;
        }

        .bbb_viewed_item {
            width: 100%;
            background: #ffffff;
            border-radius: 2px;
            padding-top: 25px;
            padding-bottom: 25px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .bbb_viewed_image {
            width: 150px;
            height: 150px;
        }

        .bbb_viewed_image img {
            display: block;
            max-width: 100%;
        }

        .bbb_viewed_content {
            width: 100%;
            margin-top: 25px;
        }

        .bbb_viewed_price {
            font-size: 16px;
            color: #000000;
            font-weight: 500;
        }

        .bbb_viewed_item.discount .bbb_viewed_price {
            color: #df3b3b;
        }

        .bbb_viewed_price span {
            position: relative;
            font-size: 12px;
            font-weight: 400;
            color: rgba(0, 0, 0, 0.6);
            margin-left: 8px;
        }

        .bbb_viewed_price span::after {
            display: block;
            position: absolute;
            top: 6px;
            left: -2px;
            width: calc(100% + 4px);
            height: 1px;
            background: #8d8d8d;
            content: "";
        }

        .bbb_viewed_name {
            margin-top: 3px;
        }

        .bbb_viewed_name a {
            font-size: 14px;
            color: #000000;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .bbb_viewed_name a:hover {
            color: #0e8ce4;
        }

        .item_marks {
            position: absolute;
            top: 18px;
            left: 18px;
        }

        .item_mark {
            display: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: #ffffff;
            font-size: 10px;
            font-weight: 500;
            line-height: 36px;
            text-align: center;
        }

        .item_discount {
            background: #df3b3b;
            margin-right: 5px;
        }

        .item_new {
            background: #0e8ce4;
        }

        .bbb_viewed_item.discount .item_discount {
            display: inline-block;
        }

        .bbb_viewed_item.is_new .item_new {
            display: inline-block;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

@endsection
@section('content')
    @include('frontend.partials.carousel')
    @include('frontend.partials.bestselling')
    @include('frontend.partials.prodcarousel')

    {{--  --}}

    {{-- <div class="card">
        <h2 class="my-2">Join the Electronic fun</h2>
        <div class="cards trending-wrapper">
            @foreach ($products as $item)
                <div class="card-item">
                    <img src="{{ $item->gallery }}" class="trending-image" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Cricket Bats</p>
                        <p class="text-center my-1">Min 20% off</p>
                        <p class="text-center my-1">Grab Now!</p>
                    </div>
                </div>
                <div class="card-item">
                    <img src="{{ $item->gallery }}" class="trending-image" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">{{ $item->discount }}</p>
                        <p class="text-center my-1">Min {{ $item->discount }}% off</p>
                        <p class="text-center my-1">Grab Now!</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card">
        <div class="trending-wrapper">
            <h3>Tredning Products</h3>
            @foreach ($products as $item)
                <div class="trening-item">
                    <a href="detail/{{ $item['id'] }}">
                        <img class="trending-image" src="{{ $item['gallery'] }}">
                        <div class="">
                            <h4 class="text-center my-1">{{ $item->name }}</h4>
                            <h4 class="text-center my-1">Min {{ $item->discount }}% off</h4>
                            <h4 class="text-center my-1">Grab Now!</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div> --}}
    {{-- <div class="card">
        <div class="card-group">
            @foreach ($products as $item)
                <div class="card">
                    <a href="{{ route('detail', $item->slug) }}"><img class="card-img-top" src="{{ $item->gallery }}"
                            alt="Card image cap" height="250vh" width="250vw">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text" style="color: black">This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="card">
                <img class="card-img-top" src="{{ $products[1]->gallery }}" alt="Card image cap" height="250vh"
                    width="250vw">
                <div class="card-body">
                    <h5 class="card-title">{{ $products[1]->name }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="autoplay" role="toolbar"> --}}
    {{-- <div class="autoplay">
        <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button"
            style="display: block;">Previous</button>
        @foreach ($products as $item)
            <div class="">
                <a href="{{ route('detail', $item->slug) }}"><img class="card-img-top" src="{{ $item->gallery }}"
                        alt="Card image cap" height="250vh" width="250vw">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text" style="color: black">This is a wider card with supporting text below as a
                            natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </a>
            </div>
            <div class="">
                <a href="{{ route('detail', $item->slug) }}"><img class="card-img-top" src="{{ $item->gallery }}"
                        alt="Card image cap" height="250vh" width="250vw">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text" style="color: black">This is a wider card with supporting text below as a
                            natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </a>
            </div>
        @endforeach
        <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button"
            style="display: block;">Next</button>
    </div> --}}
@endsection
@section('js')
@endsection
