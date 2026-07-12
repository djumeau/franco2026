@php

    $en = app()->isLocale('en');

@endphp

<x-layout>

    <style>
        /* Break out of any parent padding/margins imposed by x-layout */
        .fullscreen-media {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>

    <x-slot name="title">
        {{ __('index.site-name') }} | {{ __('program.title') }}
    </x-slot>

    {{-- Page Header --}}
    <header class="text-center mb-8">

        <h1 class="text-xl text-white tracking-tight md:text-2xl uppercase">
            {{ __('program.title') }}
        </h1>

        <div class="viewer-container mt-1 {{ $en ? 'w-23 md:w-28' : 'w-30 md:w-36' }} h-1 bg-white mx-auto"></div>

    </header>

    {{-- Program --}}

    <div class="w-full h-[calc(100dvh-80px)] block p-0 m-0 bg-neutral-800">
        <!-- For PDF Documents -->
        <iframe 
            src="{{ Storage::url('documents/2026_cbfe_programme.pdf') }}#toolbar=1&navpanes=0" 
            class="w-full h-full border-none block m-0 p-0"
            loading="lazy"
            title="Embedded PDF Document"
        ></iframe>
    </div>


</x-layout>