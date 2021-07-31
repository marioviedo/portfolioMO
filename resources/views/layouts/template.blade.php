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
<body 
    x-data="{ 'isDark': false}" 
    x-init="
        isDark = JSON.parse(localStorage.getItem('isDark'));
        $watch('isDark', value => localStorage.setItem('isDark', JSON.stringify(value)));" 
    :class="{'dark bg-gray-800 ':isDark === true}" 
    class="font-mono ">
    <div class="text-gray-700 bg-white dark:text-gray-200 dark:bg-gray-800 w-screen">
        <!-- header -->
        @include('partials.header')
        <!-- end header -->

        <!-- content -->
        <div class="container px-2 mx-auto">
            @yield('content')
        </div>
        <!-- end content -->

        <!-- footer -->
        @include('partials.footer')
        <!-- end footer -->
    </div>
</body>
</html>