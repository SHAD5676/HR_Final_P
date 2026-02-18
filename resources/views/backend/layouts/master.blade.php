<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biz Admin | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('dist/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ url('dist/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('dist/css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('dist/css/simple-lineicon/simple-line-icons.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    @yield("head")
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

    @if(Auth::guard('admin')->check())
        @include("backend.layouts.adminHeader") 
        @include("backend.layouts.adminLeftbar") 
    @elseif(Auth::guard('employee')->check())
        @include("backend.layouts.employeeHeader")    
        @include("backend.layouts.employeeLeftbar")    
    @endif
  
    @yield("content")
    
    @include("backend.layouts.footer")
</div>

<script src="{{ url('dist/js/jquery.min.js') }}"></script>
<script src="{{ url('dist/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('dist/js/bizadmin.js') }}"></script>

@yield("scripts")
</body>
</html>