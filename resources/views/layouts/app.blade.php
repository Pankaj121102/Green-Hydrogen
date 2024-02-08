<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>Leverage - Your next level of website building</title>

        <meta name="description" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
        <meta name="subject" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
        <meta name="author" content="Codings">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="{{asset('../images/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{asset('../images/apple-touch-icon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('../images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('../images/apple-touch-icon-114x114.png')}}">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{asset('../css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('../css/vendor/slider.min.css')}}">
        <link rel="stylesheet" href="{{asset('../css/main.css')}}">
        <link rel="stylesheet" href="{{asset('../css/vendor/icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('../css/vendor/animation.min.css')}}">
        <link rel="stylesheet" href="{{asset('../css/vendor/gallery.min.css')}}">
        <link rel="stylesheet" href="{{asset('../css/vendor/cookie-notice.min.css')}}">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{asset('../css/default.css')}}">


</head>

<body class="theme-mode-dark">

    <div id="wrapper" class="clearfix">

        @include('layouts.parts.header')
        @yield('content')
        @include('layouts.parts.footer')

    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <script src="{{asset('../js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('../js/vendor/jquery.easing.min.js')}}"></script>
        <script src="{{asset('../js/vendor/jquery.inview.min.js')}}"></script>
        <script src="{{asset('../js/vendor/popper.min.js')}}"></script>
        <script src="{{asset('../js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('../js/vendor/ponyfill.min.js')}}"></script>
        <script src="{{asset('../js/vendor/slider.min.js')}}"></script>
        <script src="{{asset('../js/vendor/animation.min.js')}}"></script>
        <script src="{{asset('../js/vendor/progress-radial.min.js')}}"></script>
        <script src="{{asset('../js/vendor/bricklayer.min.js')}}"></script>
        <script src="{{asset('../js/vendor/gallery.min.js')}}"></script>
        <script src="{{asset('../js/vendor/shuffle.min.js')}}"></script>
        <script src="{{asset('../js/vendor/cookie-notice.min.js')}}"></script>
        <script src="{{asset('../js/vendor/particles.min.js')}}"></script>
        <script src="{{asset('../js/main.js')}}"></script>
</body>

</html>
