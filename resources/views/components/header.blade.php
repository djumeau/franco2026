@php
    $currentLocale = app()->getLocale();
    // Example languages: 'en' and 'fr'
    $oppositeLang = $currentLocale === 'en' ? 'fr' : 'en';
@endphp

<nav
    class="flex items-center border-b px-4 bg-black/50 justify-between py-4 backdrop-blur-md sticky top-0 left-0 z-50">

    <!-- Logo -->
    <div class="flex items-center">

        @if (request()->routeIs('index'))
            <div>
                <img src="{{ asset('icons/logo_ubf_white.svg') }}" alt="Logo" class="h-12" />
            </div>
            <span class="text-white font-bold text-xl md:text-2xl p-0 ml-1">
                CBFE 2026
            </span>
        @else
            <div>
                <a href="{{ route('index') }}">
                    <img src="{{ asset('icons/logo_ubf_white.svg') }}" alt="Logo" class="h-12" />
                </a>
            </div>
            <span class="text-white font-bold text-xl md:text-2xl hover:underline underline-offset-4 p-0 ml-1">
                <a href="{{ route('index') }}">CBFE 2026</a>
            </span>
        @endif

    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-4 text-sm md:text-base text-white">

        @if(request()->routeIs('program'))
            <span class="font-bold">{{__('program.title')}}</span>
        @else
            <a href="{{route('program')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('program.title')}}</a>
        @endif

        @if(request()->routeIs('documents'))
            <span class="font-bold">{{__('documents.title')}}</span>
        @else
            <a href="{{route('documents')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('documents.title')}}</a>
        @endif

        @if(request()->routeIs('prayertopics'))
            <span class="text-base font-bold text-white">{{__('prayertopics.title')}}</span>
        @else
            <a href="{{route('prayertopics')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('prayertopics.title')}}</a>
        @endif
        
        <a href="{{ route('lang.switch', ['locale' => $oppositeLang]) }}">
            <i class="fa-solid fa-globe"></i> 
            <span class="hover:underline underline-offset-4">{{ strtoupper($oppositeLang) }}</span>
        </a>
        
    </div>

</nav>
