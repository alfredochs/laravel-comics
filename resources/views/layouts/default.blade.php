<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.header_scripts')
    <title>@yield('titolo_pagina')</title>
</head>
<body>
    {{-- Header --}}
        @include('partials.the_header')

    <main class="main">
        {{-- @include('partials.jumbotron') --}}
        @yield('content')
    </main>
    {{-- footer --}}
    @include('partials.the_footer')
</body>
</html>