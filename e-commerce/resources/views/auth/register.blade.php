@extends('layouts.app-master')
@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        .content {
            margin: 2%;
            background-color: #fff;
            padding: 4rem 1rem 4rem 1rem;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, .05);
        }

        .signin-text {
            font-style: normal;
            font-weight: 600 !important;
        }

        .form-control {
            display: block;
            width: 100%;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            border-color: #00ac96 !important;
            border-style: solid !important;
            border-width: 0 0 1px 0 !important;
            padding: 0px !important;
            color: #495057;
            height: auto;
            border-radius: 0;
            background-color: #fff;
            background-clip: padding-box;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #fff;
            outline: 0;
            box-shadow: none;
        }

        .birthday-section {
            padding: 15px;
        }

        .btn-class {
            border-color: #00ac96;
            color: #00ac96;
        }

        .btn-class:hover {
            background-color: #00ac96;
            color: #fff;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row content">
            {{-- @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>
            @endif --}}
            @include('auth.partials.truefriends')
            <div class="col-md-6">
                @include('layouts.partials.messages')
                <h3 class="signin-text mb-3"> Sign UP </h3>
                <form method="post" action="{{ route('register.perform') }}">
                    @csrf
                    <div class="form-group my-3">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                            placeholder="" required="required" autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group my-3">
                        <label for="number">Phone Number</label>
                        <input type="number" class="form-control" name="number" id="number" value="{{ old('number') }}"
                            placeholder="" required="required" autofocus>
                        @if ($errors->has('number'))
                            <span class="text-danger text-left">{{ $errors->first('number') }}</span>
                        @endif
                    </div>
                    <div class="form-group my-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="{{ old('username') }}" placeholder="" required="required" autofocus>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="form-group my-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            value="{{ old('password') }}" placeholder="" required="required">
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-class">Register</button>
                        <a href="{{route('login.show')}}"><button type="button" class="btn btn-class mx-2">Existing User? Sign In</button></a>

                        @include('auth.partials.copy')
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <form method="post" action="{{ route('register.perform') }}">
        @csrf

        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="number" class="form-control" name="number" value="{{ old('number') }}"
                placeholder="name@example.com" required="required" autofocus>
            <label for="floatingNumber">number address</label>
            @if ($errors->has('number'))
                <span class="text-danger text-left">{{ $errors->first('number') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"
                required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('auth.partials.copy')
    </form> --}}
@endsection
