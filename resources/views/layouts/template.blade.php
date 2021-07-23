<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title')</title>

    <!-- styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- JS scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="font-mono" x-data="{ 'isDark': false}">
    <!-- header -->
    @include('partials.header')
    <!-- end header -->

    <!-- content -->
    @yield('content')

</body>
</html>