<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/svg+xml" href="{{ asset('logo_ubf_favicon.svg') }}">

    <title>{{ $title ?? "Conférence Biblique Francophone d'été 2026" }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black font-sans text-white">

     @if (request()->routeIs('home'))
        <!-- Static Background Video -->
        <video autoplay loop muted playsinline class="fixed top-0 left-0 -z-10 h-full w-full object-cover">
            <source src="{{ asset('videos/2026_cbu_conf_ete_bg.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

         <!-- Dark Overlay (Optional but recommended for text readability) -->
        <div class="absolute top-0 left-0 h-full w-full bg-black/55 -z-5"></div>
    @endif

    <x-header />

    <main class="px-4 py-8 max-w-7xl mx-auto">
        {{ $slot }}
    </main>

    <x-footer />
    
</body>

</html>