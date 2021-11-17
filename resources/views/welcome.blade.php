<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amber Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- TailwindCss --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    @livewireStyles
</head>

<body class="antialiased">
    {{-- Header --}}
    @livewire('storefront.frontend.header')

    {{-- Frequenty Purchased --}}
    @livewire('storefront.frontend.products')

    {{-- Tiles --}}
    @livewire('storefront.frontend.tiles')


   {{-- Footer --}}
   @livewire('storefront.frontend.footer')


    @livewireScripts
</body>
</html>
