<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="painting contractor">
    <link rel="icon" href="{{asset('assets/images/logo.jpeg')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>


     <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
<body>
@include('layouts.includes.header')
@yield('content')
@include('layouts.includes.footer')
@include('layouts.scripts.scripts')

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
