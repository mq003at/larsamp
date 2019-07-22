{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">    <!-- It's in /public/css directory -->
        <!-- get the variable from .env and make an emergency callback as 'Wins' -->
        <title>{{config('app.name', 'Wins')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.message')
        <div id="app">
        <div class="containers">
            <!-- yield the content from another php file -->
            @yield('content')
        </div>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        @include('inc.message')
        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
