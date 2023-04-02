@extends('layouts.app-master')
@section('style')
    <style>
        html,
        body {
            font-size: 100%;
            font-family: 'Slabo 27px', serif;
            background: #ffffff;
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Slabo 27px', serif;
            margin: 0;
            letter-spacing: 1px;
        }

        ul,
        label {
            margin: 0;
            padding: 0;
        }

        body a:hover {
            text-decoration: none;
        }

        .banner1 {
            background: #003e57;
            min-height: 220px;
        }

        .wthree_banner1_info {
            padding: 70px;
            text-align: center;
        }

        .wthree_banner1_info h3 {
            font-size: 2.5em;
            color: #fff;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 5px;
        }

        .sub_para_agile {
            text-align: center;
            padding-top: 18px;
            font-style: italic;
            font-size: 20px;
        }

        .wthree_banner1_info h3 span {
            color: #47cf73;
        }

        .team {
            padding: 5em 0;
            background: #f0f0f0;
        }

        .header {
            font-size: 2.5em;
            color: #262c38;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            font-weight: 700;
            text-align: center;
        }

        h3.header.agileits_header.two {
            color: #fff;
        }

        .header:after {
            border-top: 2px solid #47cf73;
            display: block;
            width: 81px;
            content: "";
            margin: 8px auto 0;
        }

        .agile_team_grids_top {
            margin-top: 3em;
        }

        .input {
            position: relative;
            z-index: 1;
            display: inline-block;
            margin: 1em 0 0;
            width: 100%;
            vertical-align: top;
        }

        .input__field {
            position: relative;
            display: block;
            float: right;
            border: none;
            border-radius: 0;
            -webkit-appearance: none;
        }

        .input__field:focus {
            outline: none;
        }

        .input__label {
            display: inline-block;
            float: right;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .input__label-content {
            position: relative;
            display: block;
            padding: 1.6em 0;
            width: 100%;
        }

        /* Nariko */
        .input--nariko {
            overflow: hidden;
            padding-top: 2em;
        }

        .input__field--nariko {
            width: 100%;
            background: transparent;
            opacity: 0;
            padding: 0.7em;
            z-index: 100;
            color: #212121;
            font-size: 16px;
        }

        .input__label--nariko {
            width: 100%;
            bottom: 0;
            position: absolute;
            pointer-events: none;
            text-align: left;
            color: #666;
            padding: 0 0.5em;
            font-weight: 600;
        }

        .input__label--nariko::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 3.5em;
            top: 100%;
            left: 0;
            background: #e3e3e3;
            border-top: 2px solid #e3e3e3;
            -webkit-transform: translate3d(0, -3px, 0);
            transform: translate3d(0, -3px, 0);
            -webkit-transition: -webkit-transform 0.4s;
            transition: transform 0.4s;
            -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
            transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
        }

        .input__label-content--nariko {
            padding: 0.5em 0;
            -webkit-transform-origin: 0% 100%;
            transform-origin: 0% 100%;
            -webkit-transition: -webkit-transform 0.4s, color 0.4s;
            transition: transform 0.4s, color 0.4s;
            -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
            transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
        }

        .input__field--nariko:focus,
        .input--filled .input__field--nariko {
            cursor: text;
            opacity: 1;
            -webkit-transition: opacity 0s 0.4s;
            transition: opacity 0s 0.4s;
        }

        .input__field--nariko:focus+.input__label--nariko::before,
        .input--filled .input__label--nariko::before {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
            -webkit-transform: translate3d(0, -3.3em, 0);
            transform: translate3d(0, -3.3em, 0);
        }

        .input__field--nariko:focus+.input__label--nariko .input__label-content--nariko,
        .input--filled .input__label-content--nariko {
            color: #6B6E6E;
            -webkit-transform: translate3d(0, -3.3em, 0) scale3d(0.81, 0.81, 1);
            transform: translate3d(0, -3.3em, 0) scale3d(0.81, 0.81, 1);
        }

        .agileinfo_mail_grid_left textarea {
            font-size: 16px;
            color: #212121;
            outline: none;
            width: 100%;
            min-height: 125px;
            resize: none;
            margin: 3em 0;
            background: none;
            border: none;
            border-bottom: 3px solid #e3e3e3;
            padding: 1em .3em;
            font-weight: 600;
            font-family: 'Slabo 27px', serif;
        }

        .agileinfo_mail_grid_left textarea::-webkit-input-placeholder {
            color: #666 !important;
        }

        .agileinfo_mail_grid_left input[type="submit"] {
            font-size: 1.1em;
            color: #fff;
            outline: none;
            width: 100%;
            background: #09347a;
            border: none;
            padding: .7em 0;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .agileinfo_mail_grid_left input[type="submit"]:hover {
            background: #47cf73;
        }

        .agileinfo_mail_social_rightl,
        .agileinfo_mail_social_rightr {
            width: 48.52%;

            text-align: center;
        }

        .agileinfo_mail_social_rightl a,
        .agileinfo_mail_social_rightr a,
        .agileinfo_mail_social_right_social a {
            padding: 3.5em;
            display: block;
            text-decoration: none;
        }

        .agileinfo_mail_social_rightl {
            float: left;
        }

        .agileinfo_mail_social_rightr {
            float: right;
            margin-left: 1em;
        }

        .phpkida_contact_facebook {
            background: #3b5998;
        }

        .phpkida_contact_facebook:hover {
            background: #4e72bd;
        }

        .phpkida_contact_twitter {
            background: #1da1f2;
        }

        .phpkida_contact_twitter:hover {
            background: #51b8f7;
        }

        .phpkida_contact_google {
            background: #dd4b39;
        }

        .phpkida_contact_google:hover {
            background: #f95945;
        }

        .contact_instagram {
            background: #833ab4;
        }

        .contact_instagram:hover {
            background: #a850e2;
        }

        .phpkida_contact_rss {
            background: #f26522;
        }

        .phpkida_contact_rss:hover {
            background: #ec763e;
        }

        .agileinfo_mail_social_rightl i,
        .agileinfo_mail_social_rightr i,
        .agileinfo_mail_social_right_social i {
            color: #fff;
            font-size: 3em;
        }

        .agileinfo_mail_social_rightl p,
        .agileinfo_mail_social_rightr p,
        .agileinfo_mail_social_right_social p {
            color: #fff;
            font-size: 1em;
            margin-top: .5em;
        }

        .agileinfo_mail_social_right:nth-child(2) {
            margin: 1em 0;
        }

        .agileinfo_mail_social_right_social {
            text-align: center;
        }

        .agile_map iframe {
            width: 100%;
            min-height: 400px;
            margin-bottom: -6px;
        }
    </style>
@endsection
@section('content')
    <!-- //banner -->
    <div class="banner1">
        <div class="wthree_banner1_info">
            <h3><span>Contact Us</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- mail -->
    <div class="team">
        <div class="container">
            <h3 class="header agileits_header">Leave Mail Us</h3>
            <p class="sub_para_agile">We will back to soon!</p>
            <div class="agile_team_grids_top">
                <div class="col-md-6 agileinfo_mail_grid_left" style="float: left;margin:-20px 0 0 0">
                    <form action="#">
                        <span class="input input--nariko">
                            <input class="input__field input__field--nariko" name="Name" type="text" id="input-20"
                                placeholder=" " required="" />
                            <label class="input__label input__label--nariko" for="input-20">
                                <span class="input__label-content input__label-content--nariko">Your Name</span>
                            </label>
                        </span>
                        <span class="input input--nariko">
                            <input class="input__field input__field--nariko" name="Email" type="email" id="input-21"
                                placeholder=" " required="" />
                            <label class="input__label input__label--nariko" for="input-21">
                                <span class="input__label-content input__label-content--nariko">Your Email</span>
                            </label>
                        </span>
                        <span class="input input--nariko">
                            <input class="input__field input__field--nariko" name="Subject" type="text" id="input-22"
                                placeholder=" " required="" />
                            <label class="input__label input__label--nariko" for="input-22">
                                <span class="input__label-content input__label-content--nariko">Your Subject</span>
                            </label>
                        </span>
                        <textarea name="Message" placeholder="Your Message..." required=""></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="col-md-6 agileinfo_mail_grid_right" style="float: right;margin:40px 0 0 0">
                    <div class="agileinfo_mail_social_right">
                        <div class="agileinfo_mail_social_rightl">
                            <a href="#" class="phpkida_contact_facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <p>Facebook</p>
                            </a>
                        </div>
                        <div class="agileinfo_mail_social_rightr">
                            <a href="#" class="phpkida_contact_twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <p>Twitter</p>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileinfo_mail_social_right">
                        <div class="agileinfo_mail_social_rightl">
                            <a href="#" class="phpkida_contact_google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                <p>Google+</p>
                            </a>
                        </div>
                        <div class="agileinfo_mail_social_rightr">
                            <a href="#" class="contact_instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <p>Instagram</p>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="agile_map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.420338346262!2d72.83949831421218!3d19.045247957889085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c92fb093d785%3A0x38854a716f0ca945!2sXavier%20Institute%20of%20Engineering!5e0!3m2!1sen!2sin!4v1667934414103!5m2!1sen!2sin"
            style="border:0"></iframe>
    </div>
@endsection
@section('js')
@endsection
