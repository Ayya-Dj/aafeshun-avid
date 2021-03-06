<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')

        <title>{{ config('app.name', 'Aafeshun') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/daisyui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        @yield('custom-styles')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/spinner.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        @yield('custom-scripts')
    </head>
    <body class="font-sans antialiased">
        <!-- Spinner initializes before all content -->
        @include('layouts.spinner')
        <div class="min-h-screen af-bg">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <!-- Down here since it was messing with the z-index of carousel -->
            @include('layouts.navigation')
        </div>
        @include('layouts.footer')
    </body>
</html>
