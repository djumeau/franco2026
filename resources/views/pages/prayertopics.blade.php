@php

    $en = app()->isLocale('en');

@endphp

<x-layout>

    <x-slot name="title">
        {{ __('index.site-name') }} | {{ __('documents.title') }}
    </x-slot>

    {{-- Page Header --}}
    <header class="text-center mb-8">

        <h1 class="text-xl text-white tracking-tight md:text-2xl uppercase">
            {{ __('prayertopics.title') }}
        </h1>

        <div class="mt-1 {{ $en ? 'w-33 md:w-40' : 'w-40 md:w-48' }} h-1 bg-white mx-auto"></div>

    </header>

    {{-- Prayer Topics - Conference --}}



</x-layout>
