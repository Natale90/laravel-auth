<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>MyLayout</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>


        @include('components.header')

        @yield('sectionHomeFree')
        @yield('sectionHomeLogged')
        @yield('sectionEdit')

        @include('components.footer')

    </body>
</html>
