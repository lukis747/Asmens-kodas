<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Styles -->
        <link rel="stylesheet"  href="{{ asset("css/bootstrap.min.css") }}" />
    </head>
    <body>
        @include('sections.navbar')
        <div class="container">
            @yield('content')
        </div>
        {{-- Scripts--}}
        <script src="{{ asset("js/jquery-3.5.1.min.js") }}"></script>
        @yield('scripts')
    </body>
</html>
