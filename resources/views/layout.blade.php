<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/svg+xml" href="{{ asset('logo_ubf_favicon.svg') }}">

    <title>{{ $title ?? "Conférence biblique francophone d'été 2026" }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body class="bg-black font-sans text-white">

    <!-- Static Background Video -->
    @if (request()->routeIs('index'))
        
        <video autoplay loop muted playsinline class="fixed top-0 left-0 -z-10 h-full w-full object-cover">
            <source src="{{ asset('videos/2026_cbu_conf_ete_bg.mp4') }}" type="video/mp4">
            {{__('index.video-support')}}
        </video>

        <!-- Dark Overlay -->
        <div class="fixed top-0 left-0 w-full h-full bg-black/60 -z-5"></div>

    @endif

    @if (request()->routeIs('documents'))
        
        <video autoplay loop muted playsinline class="fixed top-0 left-0 -z-10 h-full w-full object-cover">
            <source src="{{ asset('videos/bible_reading_generic.mp4') }}" type="video/mp4">
            {{__('index.video-support')}}
        </video>

        <!-- Dark Overlay -->
        <div class="fixed top-0 left-0 w-full h-full bg-black/80 -z-5"></div>

    @endif

    @if (request()->routeIs('prayertopics'))
        
        <video autoplay loop muted playsinline class="fixed top-0 left-0 -z-10 h-full w-full object-cover">
            <source src="{{ asset('videos/men_praying_720p.mp4') }}" type="video/mp4">
            {{__('index.video-support')}}
        </video>

        <!-- Dark Overlay -->
        <div class="fixed top-0 left-0 w-full h-full bg-black/50 -z-5"></div>

    @endif

    <x-header />

    <main class="relative px-4 py-8 max-w-7xl mx-auto">
        {{ $slot }}
    </main>

    <x-footer />
    
</body>

</html>