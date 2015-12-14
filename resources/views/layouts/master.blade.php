<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    @yield('styles')
</head>
<body>
@include('includes.header')

<div class="main">
    @yield('content')
</div>

@include('includes.footer')
@yield('scripts')
</body>
</html>