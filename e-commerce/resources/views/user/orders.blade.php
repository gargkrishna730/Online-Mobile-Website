@extends('layouts.app-master')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap');

        /* Resetting */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        #main-content {
            justify-content: center;
            padding: 30px;
            border-radius: 15px;
        }

        #main-content .h5,
        #main-content .text-uppercase {
            font-weight: 600;
            margin-bottom: 0;
        }

        #main-content .h5+div {
            font-size: 0.9rem;
        }

        #main-content .box {
            padding: 10px;
            border-radius: 6px;
            width: 170px;
            height: 90px;
        }

        #main-content .box img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        #main-content .box .tag {
            font-size: 0.9rem;
            color: #000;
            font-weight: 500;
        }

        #main-content .box .number {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .order {
            padding: 10px 30px;
            min-height: 150px;
        }

        .order .order-summary {
            height: 100%;
        }

        .order .blue-label {
            background-color: #aeaeeb;
            color: #0046dd;
            font-size: 0.9rem;
            padding: 0px 3px;
        }

        .order .green-label {
            background-color: #a8e9d0;
            color: #008357;
            font-size: 0.9rem;
            padding: 0px 3px;
        }

        .order .fs-8 {
            font-size: 0.85rem;
        }

        .order .rating img {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .order .rating .fas,
        .order .rating .far {
            font-size: 0.9rem;
        }

        .order .rating .fas {
            color: #daa520;
        }

        .order .status {
            font-weight: 600;
        }

        .order .btn.btn-primary {
            background-color: #fff;
            color: #4e2296;
            border: 1px solid #4e2296;
        }

        .order .btn.btn-primary:hover {
            background-color: #4e2296;
            color: #fff;
        }

        .order .progressbar-track {
            margin-top: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .order .progressbar-track .progressbar {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 0rem;
        }

        .order .progressbar-track .progressbar li {
            font-size: 1.5rem;
            border: 1px solid #333;
            padding: 5px 10px;
            border-radius: 50%;
            background-color: #dddddd;
            z-index: 100;
            position: relative;
        }

        .order .progressbar-track .progressbar li.green {
            border: 1px solid #007965;
            background-color: #d5e6e2;
        }

        .order .progressbar-track .progressbar li::after {
            position: absolute;
            font-size: 0.9rem;
            top: 50px;
            left: 0px;
        }

        #tracker {
            position: absolute;
            border-top: 1px solid #bbb;
            width: 100%;
            top: 25px;
        }

        #step-1::after {
            content: 'Placed';
        }

        #step-2::after {
            content: 'Accepted';
            left: -10px;
        }

        #step-3::after {
            content: 'Packed';
        }

        #step-4::after {
            content: 'Shipped';
        }

        #step-5::after {
            content: 'Out For Delivery';
            /* left: -10px; */
        }

        #step-6::after {
            content: 'Delivered';
            left: -10px;
        }



        /* Backgrounds */
        .bg-purple {
            background-color: #55009b;
        }

        .bg-light {
            background-color: #f0ecec !important;
        }

        .green {
            color: #007965 !important;
        }

        /* Media Queries */
        @media(max-width: 1199.5px) {
            nav ul li {
                padding: 0 10px;
            }
        }

        @media(max-width: 500px) {
            .order .progressbar-track .progressbar li {
                font-size: 1rem;
            }

            .order .progressbar-track .progressbar li::after {
                font-size: 0.8rem;
                top: 35px;
            }

            #tracker {
                top: 20px;
            }
        }

        @media(max-width: 440px) {
            #main-content {
                padding: 20px;
            }

            .order {
                padding: 20px;
            }

            #step-4::after {
                left: -5px;
            }
        }

        @media(max-width: 395px) {
            .order .progressbar-track .progressbar li {
                font-size: 0.8rem;
            }

            .order .progressbar-track .progressbar li::after {
                font-size: 0.7rem;
                top: 35px;
            }

            #tracker {
                top: 15px;
            }

            .order .btn.btn-primary {
                font-size: 0.85rem;
            }
        }

        @media(max-width: 355px) {
            #main-content {
                padding: 15px;
            }

            .order {
                padding: 10px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
@endsection
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 my-lg-0 my-1 ">
                <div id="main-content" class="bg-white border">
                    <div class="d-flex flex-column">
                        <div class="h5">Hello, {{ Auth::user()->number }}</div>
                        <div>Logged in as: {{ Auth::user()->email }}</div>
                    </div>
                    <div class="d-flex my-4 flex-wrap">
                        <div class="box me-4 my-1 bg-light">
                            <img src="https://www.freepnglogos.com/uploads/box-png/cardboard-box-brown-vector-graphic-pixabay-2.png"
                                alt="">
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Orders placed</div>
                                <div class="ms-auto number">{{ count(Auth::user()->orders) }}</div>
                            </div>
                        </div>
                        <div class="box me-4 my-1 bg-light">
                            <img src="https://www.freepnglogos.com/uploads/shopping-cart-png/shopping-cart-campus-recreation-university-nebraska-lincoln-30.png"
                                alt="">
                            <div class="d-flex align-items-center mt-2">
                                <div class="tag">Items in Cart</div>
                                <div class="ms-auto number">{{ Auth::user()->cart->sum('pivot.quantity') }}</div>
                            </div>
                        </div>
                        {{-- <div class="box me-4 my-1 bg-light">
                        <img src="https://www.freepnglogos.com/uploads/love-png/love-png-heart-symbol-wikipedia-11.png"
                            alt="">
                        <div class="d-flex align-items-center mt-2">
                            <div class="tag">Wishlist</div>
                            <div class="ms-auto number">10</div>
                        </div>
                    </div> --}}
                    </div>
                    <div class="text-uppercase">My recent orders</div>

                    @foreach (Auth::user()->orders->sortByDesc('created_at') as $value)
                        @foreach ($value->orderdetails as $item)
                            <div class="order my-3 bg-light">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img class="media-object" src="{{ $item->product->gallery }}"
                                            style="width: 80%; height: 80%;" />
                                        <div class="d-flex align-items-center pt-1">
                                            <div class="text-uppercase">{{ $item->pname }}</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="d-flex flex-column justify-content-between order-summary">
                                            <div class="d-flex align-items-center">
                                                <div class="text-uppercase">Order #{{ $item->order->id }}</div>
                                                <div class="blue-label ms-auto text-uppercase">
                                                    {{ $item->order->payment->method }}</div>
                                                <span
                                                    class="badge badge-danger ml-1">{{ $item->order->payment->status }}</span>
                                            </div>
                                            <div class="fs-8">Products #{{ $item->product->id }}</div>
                                            <div class="fs-8">{{ $item->created_at->diffForHumans() }}</div>
                                            <div class="rating d-flex align-items-center pt-1">
                                                <img src="https://www.freepnglogos.com/uploads/like-png/like-png-hand-thumb-sign-vector-graphic-pixabay-39.png"
                                                    alt=""><span class="px-2">Rating:</span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                            <div class="status">Status : {{ $value->delivery->name }}</div>
                                            <div class="btn btn-primary text-uppercase">order info</div>
                                        </div>
                                        @if ($value->delivery->status != 'C')
                                            <div class="progressbar-track">
                                                <ul class="progressbar">
                                                    <li id="step-1" class="text-muted green">
                                                        <span class="fas fa-gift"></span>
                                                    </li>
                                                    <li id="step-2" class="text-muted green">
                                                        <span class="fas fa-check"></span>
                                                    </li>
                                                    <li id="step-3" class="text-muted green">
                                                        <span class="fas fa-box"></span>
                                                    </li>
                                                    <li id="step-4" class="text-muted {{($value->shipping->status)=="S" ? "green":""}}">
                                                        <span class="fas fa-truck"></span>
                                                    </li>
                                                    <li id="step-5" class="text-muted {{((($value->shipping->status)=="S") && (($value->delivery->status=="OD") || ($value->delivery->status=="DL")))? "green" : ""}}">
                                                        <span class="fas fa-motorcycle"></span>
                                                    </li>
                                                    <li id="step-6" class="text-muted {{((($value->shipping->status)=="S") && (($value->delivery->status)=="DL"))? "green" : ""}}">
                                                        <span class="fas fa-box-open"></span>
                                                    </li>
                                                </ul>
                                                <div id="tracker"></div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
@endsection
