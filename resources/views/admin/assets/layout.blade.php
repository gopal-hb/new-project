<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Back TO School - @yield('title')</title>
    @include('admin.assets.css')
    @stack('css')
</head>

<body>
    @include('admin.assets.header')
    @yield('content')
    @include('admin.assets.footer')
    @include('admin.assets.js')
    @stack('js')

</body>

</html>
