<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Aafeshun') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/daisyui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/spinner.js') }}"></script>
    </head>
    <body class="font-sans antialiased">

        @php
            /*
                Products would usually be taken from a database
            */
            $products = array(
                [
                    'name'  => 'Hat',
                    'img'   => '1.jpg',
                    'desc'  => 'Lorem ipsum dolor sit amet',
                    'qty'   => 12, 
                    'price' => 12.22,
                ],
                [
                    'name'  => 'Not Hat',
                    'img'   => '2.jpg',
                    'desc'  => 'Lorem ipsum dolor sit amet',
                    'qty'   => 12, 
                    'price' => 12.22,
                ],
            );

            $total = 0;
        @endphp

        <!-- Spinner initializes before all content -->
        {{--@include('layouts.spinner')--}}
        <div class="min-h-screen af-bg">
            @include('layouts.navigation')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @include('layouts.footer')
    </body>
</html>
