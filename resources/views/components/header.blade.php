<nav
    class="flex items-center border-b border-border px-6 bg-white/50 justify-between py-4 backdrop-blur-md sticky top-0 left-0 z-50">

    <!-- Logo -->
    <div class="space-x-2 flex items-center">

        @if (request()->routeIs('home'))
            <!-- Plain text when on the home page (Not clickable) -->
            <img src="{{ asset('icons/logo_ubf_white.svg') }}" alt="Logo" class="h-12 w-auto" />
            <span class="text-white font-bold text-2xl md:text-xl">
                CBFE 2026
            </span>
        @else
            <!-- Clickable link when on any other page -->
            <a href="{{ route('home') }}">
                <img src="{{ asset('icons/logo_ubf_white.svg') }}" alt="Logo" class="h-12 w-auto" />
                <span class="text-white font-bold text-2xl md:text-xl hover:underline underline-offset-4">
                    CBFE 2026
                </span>
            </a>
        @endif


    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-4">
        <a href="{{ route('about') }}" class="text-white hover:underline underline-offset-4">À propos</a>
        <a href="{{ route('contact') }}" class="text-white hover:underline underline-offset-4">Contact</a>
    </div>

</nav>
