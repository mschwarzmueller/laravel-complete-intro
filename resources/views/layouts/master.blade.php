<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    @yield('styles')
</head>
<body>
@include('includes.header')
<div class="social-slider">
    FB <br>
    TW
</div>
<div class="main">
    @yield('content')
</div>
@include('includes.footer')
@yield('scripts')
</body>
</html>