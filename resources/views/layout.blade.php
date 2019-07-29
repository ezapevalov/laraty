<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/logo.svg">

    <!-- FONTS  -->
    <link rel="stylesheet" href="/css/fonts/nunito.css">
    <link rel="stylesheet" href="/css/fonts/roboto.css">

    <!-- STYLES  -->
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>{{ config('app.name') }}</title>
</head>
<body>

@include('topbar')
@include('header')

@yield('content')

@include('footer')
@include('mobmenu')

<script src="/js/app.js"></script>

</body>
</html>
