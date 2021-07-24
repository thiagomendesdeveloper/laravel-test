<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link href="/css/all.css" rel="stylesheet">

        <!-- font awesome -->

        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

        <!-- Countup.js -->

        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.7.1/countUp.min.js"></script>
 
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- AOS animate -->
        
        <link defer href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


        <title>@yield('title')</title>

    </head>
    <body>

        <x-menu/>
        
        @yield('content')


        <x-footer/>


    </body>
</html>
