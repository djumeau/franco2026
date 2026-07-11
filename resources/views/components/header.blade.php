@php

    $oppositeLang = (app()->getLocale('en') === 'en' ? 'fr' : 'en');

@endphp

<!-- Current Locale: {{app()->getLocale()}} -->

<nav class="border-b px-4 bg-black/50 justify-between backdrop-blur-md sticky top-0 left-0 z-50">

    <div class="flex justify-between mx-auto px-4 py-4 md:px-6 h-full">

        <!-- Logo -->
        <div class="flex shrink-0 items-center">

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

        <!-- Navigation Links - Desktop -->
        <div id='desktop-menu' class="hidden md:flex items-center space-x-8 text-sm md:text-base text-white">

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
                <span class="text-base font-bold text-white">{{__('prayertopics/general.title')}}</span>
            @else
                <a href="{{route('prayertopics')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('prayertopics/general.title')}}</a>
            @endif

            <!-- Language to switch: {{$oppositeLang}} -->
            
            <a href="{{ route('lang.switch', ['locale' => $oppositeLang]) }}">
                <i class="fa-solid fa-globe"></i> 
                <span class="hover:underline underline-offset-4">{{ strtoupper($oppositeLang) }}</span>
            </a>
        
        </div>

        <div class="flex items-center md:hidden">
            <button id='hamburger' class='text-white' type='button'>
                <i class="fa fa-bars text-2xl"></i>
            </button>
        </div>
    
    </div>

</nav>

<!-- Mobile Menu -->
<div id='mobile-menu' class='sticky hidden flex-col top-20 left-0 right-0 md:hidden bg-slate-900 text-white/90 py-4 space-y-2 z-50'>
    
    <!-- Navigation Links - Mobile -->
    <div class='flex flex-col pl-4 gap-y-4'>

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
            <span class="text-base font-bold text-white">{{__('prayertopics/general.title')}}</span>
        @else
            <a href="{{route('prayertopics')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('prayertopics/general.title')}}</a>
        @endif

         <!-- Language to switch: {{$oppositeLang}} -->
        
        <a href="{{ route('lang.switch', ['locale' => $oppositeLang]) }}">
            <i class="fa-solid fa-globe"></i> 
            <span class="hover:underline underline-offset-4">{{ strtoupper($oppositeLang) }}</span>
        </a>
    
    </div>

</div>