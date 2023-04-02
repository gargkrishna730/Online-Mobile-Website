<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        ._3SkBxJ {
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            line-height: 20px;
            font-size: 16px;
            letter-spacing: .1px;
            font-weight: 500;
            color: #fff;
            position: relative;
            font-family: Roboto, Arial, sans-serif;
        }

        ._3SkBxJ .KK-o3G {
            position: absolute;
            left: 18px;
            top: -14px;
            text-align: center;
            border-radius: 7px;
            width: 18px;
            height: 18px;
            background-color: #ff6161;
            border: 1px solid #fff;
            font-weight: 400;
            color: #f0f0f0;
            line-height: 16px;
            font-size: 12px;
        }

        a:-webkit-any-link {
            cursor: pointer;
        }

        ._3SkBxJ span {
            font-weight: 600;
            font-size: 20px;
        }

        a,
        img {
            text-decoration: none;
            border: none;
            outline: none;
            margin: 0px 10px 0px 1px
        }

        ._3SkBxJ .V3C5bO {
            width: 16px;
            height: 16px;
            margin: 0 8px;
        }
    </style>

    <!-- Custom styles for this template -->
    <link rel="icon" href="{{ asset('assets/logo/akirulogo.png') }}" type="image/icon type">
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    @yield('style')
</head>

<body>

    @include('layouts.partials.navbar')
    @yield('content')

    {{ View::make('layouts.partials.footer') }}
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    @yield('js')
</body>
{{-- <script src="https://code.jquery.com/jquery-3.6.1.js" ></script> --}}
<script>
    var loc = "{{ Request::url() }}";
    //alert(loc)
    var li = document.querySelectorAll('#navbar a');
    li.forEach(function(element, index) {

        if (window.location.href == element.getAttribute("href")) {
            alert(element.getAttribute("href"));
            element.classList.remove("text-white");
            element.classList.add("text-secondary");
        } else {
            element.classList.remove("text-secondary");
            element.classList.add("text-white");
        }
    });
    // $('#navbar').find('a').each(function() {
    //     console.log($(this).attr('href'));

    //     if ($(this).attr('href') == loc) {
    //         $(this).removeClass('text-white');
    //         $(this).addClass('text-secondary');
    //     } else {
    //         $(this).removeClass('text-secondary');
    //         $(this).addClass('text-white');
    //     }
    // });
    // console.log(loc);
</script>

</html>
