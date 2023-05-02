<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Comics</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="main-container">
            <!-- include header -->
            @include('shared.header')
            <!-- include main -->
            @include('shared.main')
            <!-- include footer -->
            @include('shared.footer')
        </div>
    </body>
</html>