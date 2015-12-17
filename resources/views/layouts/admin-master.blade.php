<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin area</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/admin.css') }}">
    @yield('styles')
</head>
<body>
@include('includes.admin-header')
@yield('content')

@yield('scripts')
</body>
</html>