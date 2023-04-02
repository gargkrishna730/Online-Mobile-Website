@extends('layouts.app-master')
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .select2-container .select2-selection--single {
            height: 38px;

        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 36px;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    @include('layouts.partials.checkoutstyle')
@endsection
@section('content')
    <div class="container my-3">
        <div class="row">
            @if (count(Auth::user()->cart))
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">{{session()->has('buynow')?"1":(Auth::user()->cart->sum('pivot.quantity')) }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @if (session()->has('buynow'))
                            @php
                                $value = session()->get('buynow');
                                //dd($value);
                                session()->flash('buynow', $value);
                                $subtotal = $value->price;
                            @endphp
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">{{ $value->name }} (1 item)</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>

                                <span class="text-muted">₹{{ $value->price }}</span>
                            </li>
                        @else
                            @foreach (Auth::user()->cart as $value)
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">{{ $value->name }} ({{ $value->pivot->quantity }} item)</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">x</span>
                                    <span class="text-muted">₹{{ $value->price }}</span>
                                    <span class="text-muted">₹{{ $value->price * $value->pivot->quantity }}</span>
                                </li>
                                @php
                                    static $subtotal = 0;
                                    $subtotal += $value->pivot->quantity * $value->price;
                                @endphp
                            @endforeach
                        @endif
                        {{-- <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li> --}}
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (INR)</span>
                            <strong>₹{{ $subtotal >= 500 ? $subtotal : $subtotal + 40 }}</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="In Development">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Delivery address</h4>
                <form class="needs-validation" method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="total" value="{{ $subtotal >= 500 ? $subtotal : $subtotal + 40 }}">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="fname" placeholder=""
                                value="{{Auth::user()->address?Auth::user()->address->fname:""}}" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" name="lname"
                                value="{{Auth::user()->address?Auth::user()->address->lname:""}}" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="number">Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+91</span>
                                </div>
                                <input type="number" class="form-control" id="number" placeholder="Delivery Number"
                                    name="number" value="{{Auth::user()->address?Auth::user()->address->number:""}}" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                </div> --}}
                    <div class="mb-3">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="1234 Main St"
                          value="{{Auth::user()->address?Auth::user()->address->street:""}}"  required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="locality">Locality <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="locality" name="locality" value="{{Auth::user()->address?Auth::user()->address->locality:""}}"
                            placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" name="country_id" required>
                                <option value="">Choose...</option>
                                @foreach ($country as $value)
                                    <option value="{{ $value->id }}" {{Auth::user()->address?((Auth::user()->address->country_id==$value->id)?"selected":""):""}}>{{ $value->name }}</option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" name="state_id" required>
                                <option value="">Choose...</option>
                                @foreach ($states as $value)
                                    <option value="{{ $value->id }}" {{Auth::user()->address?((Auth::user()->address->state_id==$value->id)?"selected":""):""}}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="city">City</label>
                            <select class="custom-select d-block w-100 " id="city" name="city_id" required>
                                <option value="">Choose...</option>
                                @foreach ($cities as $value)
                                    <option value="{{ $value->id }}" {{Auth::user()->address?((Auth::user()->address->city_id==$value->id)?"selected":""):""}}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="pincode">Pincode</label>
                            <input type="text" class="form-control" id="pincode" name="pincode" placeholder=""
                                value="{{Auth::user()->address?Auth::user()->address->pincode:""}}" required>
                            <div class="invalid-feedback">
                                Pincode required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    {{-- <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                            address</label>
                    </div> --}}
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="1" name="saveadd"
                            id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="upi" name="paymentMethod" type="radio" value="UPI"
                                class="custom-control-input" checked required>
                            <label class="custom-control-label" for="upi">UPI</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="cards" name="paymentMethod" type="radio" class="custom-control-input"
                                value="CARD" required>
                            <label class="custom-control-label" for="cards">Credit / Debit / ATM Card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="netbanking" name="paymentMethod" type="radio" class="custom-control-input"
                                value="NETBANK" required>
                            <label class="custom-control-label" for="netbanking">Net Banking</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="cod" name="paymentMethod" type="radio" class="custom-control-input"
                                value="COD" required>
                            <label class="custom-control-label" for="cod">Cash On Delivery</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        // toggle button
        $(".custom-select").select2();
    </script>
@endsection
