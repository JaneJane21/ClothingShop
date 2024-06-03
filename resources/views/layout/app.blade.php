<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('public\css\aos.css')}}">
    <link rel="stylesheet" href="{{asset('public\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public\css\jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('public\css\magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public\css\owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public\css\owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public\css\style.css')}}">
</head>
<body>
    <script src="{{asset('public\js\aos.js')}}"></script>
    <script src="{{asset('public\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('public\js\jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public\js\jquery-ui.js')}}"></script>
    <script src="{{asset('public\js\jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public\js\main.js')}}"></script>
    <script src="{{asset('public\js\owl.carousel.min.js')}}"></script>
    <script src="{{asset('public\js\popper.min.js')}}"></script>

    @include('layout.navbar')

    @yield('content')
    @include('layout.footer')
</body>
</html>