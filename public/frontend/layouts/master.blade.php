<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Advisor - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontello/css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    @yield('styles')
</head>
<body>

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom/custom.js') }}"></script>
    @yield('scripts')
</body>
</html>