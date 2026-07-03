@php
    $currentLocale = app()->getLocale();
    // Example languages: 'en' and 'fr'
    $oppositeLang = $currentLocale === 'en' ? 'fr' : 'en';
@endphp

<nav
    class="flex items-center border-b px-4 bg-white/50 justify-between py-4 backdrop-blur-md sticky top-0 left-0 z-50">

    <!-- Logo -->
    <div class="flex items-center">

        @if (request()->routeIs('home'))
            <div>
                <img src="{{ asset('icons/logo_ubf_white.svg') }}" alt="Logo" class="h-12" />
            </div>
            <span class="text-white font-bold text-xl md:text-2xl p-0">
                CBFE 2026
            </span>
        @else
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('icons/logo_ubf_white.svg') }}" alt="Logo" class="h-12" />
                </a>
            </div>
            <span class="text-white font-bold text-xl md:text-2xl hover:underline underline-offset-4 p-0">
                <a href="{{ route('home') }}">CBFE 2026</a>
            </span>
        @endif

    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-4">

        <a href="{{ route('about') }}" class="text-white hover:underline underline-offset-4">À propos</a>
        <a href="{{ route('contact') }}" class="text-white hover:underline underline-offset-4">Contact</a>
        
        <a href="#">
            <i class="fa-solid fa-globe"></i> 
            <span>{{ strtoupper($oppositeLang) }}</span>
        </a>
        
    </div>

</nav>
