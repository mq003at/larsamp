<?php
    global $u = '/larsamp/public';
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">    <!-- It's in /public/css directory -->
        @include('inc.navbar')
        <!-- get the variable from .env and make an emergency callback as 'Wins' -->
        <title>{{config('app.name', 'Wins')}}</title>
    </head>
    <body>
        <div id="app">
        <div class="containers">
            {{-- yield the content from another php file --}}
            @yield('content')
        </div>
        </div>
    </body>
</html>
 