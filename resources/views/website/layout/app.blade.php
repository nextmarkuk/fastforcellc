<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        @yield('meta')
        @yield('title')
        @yield('description')
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" href="{!! asset('assets/images/favicon.png') !!}" type="image/png">
        <link rel="stylesheet" href="{!! asset('assets/css/slick.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/lineicons.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/default.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
        @yield('css')
    </head>
    <body>
        
        @include('website.layout.partials.header')

        @yield('content')

        @include('website.layout.partials.footer')

        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
        
        <script src="{!! asset('assets/js/vendor/jquery-1.12.4.min.js') !!}"></script>
        <script src="{!! asset('assets/js/vendor/modernizr-3.7.1.min.js') !!}"></script>
        <script src="{!! asset('assets/js/popper.min.js') !!}"></script>
        <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('assets/js/slick.min.js') !!}"></script>
        <script src="{!! asset('assets/js/ajax-contact.js') !!}"></script>
        <script src="{!! asset('assets/js/jquery.appear.min.js') !!}"></script>
        <script src="{!! asset('assets/js/jquery.easing.min.js') !!}"></script>
        <script src="{!! asset('assets/js/scrolling-nav.js') !!}"></script>
        <script src="{!! asset('assets/js/wow.min.js') !!}"></script>
        <script src="{!! asset('assets/js/main.js') !!}"></script>
        @yield('js')
    </body>
</html>
