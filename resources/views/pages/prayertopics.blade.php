@php

    $en = app()->isLocale('en');

    $pageTitle = __('prayertopics/general.title');
    $downloadTitle = __('prayertopics/general.download.title');
    $filepath = __('prayertopics/general.download.filepath');

@endphp

<x-layout>

    <x-slot name="title">
        {{ __('index.site-name') }} | {{ $pageTitle }}
    </x-slot>

    {{-- Page Header --}}
    <header class="text-center mb-8">

        <h1 class="text-xl text-white tracking-tight md:text-2xl uppercase">
            {{ $pageTitle }}
        </h1>

        <div class="mt-1 {{ $en ? 'w-33 md:w-40' : 'w-40 md:w-48' }} h-1 bg-white mx-auto"></div>

    </header>

    <!-- Centered PDF Download Container -->
    <div class="mb-8 flex flex-col items-center justify-center">
        <a 
            href="{{Storage::url($filepath)}}"
            target="_blank" 
            download 
            class="inline-flex items-center gap-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 shadow-xs transition-colors duration-150 hover:bg-gray-50 hover:text-red-600 focus:outline-hidden focus:ring-4 focus:ring-gray-100"
        >
            <!-- Font Awesome PDF Icon -->
            <i class="fa-solid fa-file-pdf text-lg text-red-500 transition-colors duration-150 group-hover:text-red-600"></i>
            
            <span>{{$downloadTitle}}</span>
        </a>
    </div>

    {{-- Prayer Topics - Button Layout --}}

    <div class='w-full grid grid-cols-1 gap-4 md:gap-6 md:grid-cols-3'>

    </div>


</x-layout>
