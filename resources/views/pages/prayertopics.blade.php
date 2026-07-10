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

    <!-- Centered PDF Download Container -->
    <div class="mb-8 flex flex-col items-center justify-center">
        <a 
            href="{{asset(__('prayertopics.download.filepath'))}}" 
            target="_blank" 
            download 
            class="inline-flex items-center gap-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 shadow-xs transition-colors duration-150 hover:bg-gray-50 hover:text-red-600 focus:outline-hidden focus:ring-4 focus:ring-gray-100"
        >
            <!-- Font Awesome PDF Icon -->
            <i class="fa-solid fa-file-pdf text-lg text-red-500 transition-colors duration-150 group-hover:text-red-600"></i>
            
            <span>{{__('prayertopics.download.title')}}</span>
        </a>
    </div>

    {{-- Prayer Topics - Conference --}}

    <div class='w-full grid grid-cols-1 gap-4 md:gap-6 md:grid-cols-3'>

        <!-- Conference Prayer Topics -->
        <x-card icon="icons\logo_ubf_blue.svg" title="Conference Attendees" alt="Prayer Topics for attendees">

            <div class="flex flex-justify text-center p-0">

                <div>
                    <i class="fa-solid fa-house text-black"></i>
                </div>

                <div class='pl-1 text-black'>Chapter Name</div>

            </div>
            
        </x-card>

        <!-- World Missions -->
        <x-card icon="fa-solid fa-globe" title="World Missions" alt="World Missions">

            <div class="flex flex-justify text-center">
                <div>
                    <i class="fa-solid fa-house text-black"></i>
                </div>

                <div class='pl-1 text-black'>Chapter Name</div>
            </div>
            
        </x-card>

        <!-- Country - Belgium -->
        <x-card icon="fi fi-be" title="Belgium" alt="Belguim Prayer Topics">

            <div class="flex flex-col justify-left">
                
                <div id="Brussels Chapter" class="flex align-center justify-left">

                    <div>
                        <i class="fa-solid fa-cross text-black"></i>
                    </div>

                    <div class='pl-1 text-black'>Bruxelles</div>

                </div>

                <div class="pl-10">

                    <ul class="list-disc text-black">
                        <li>Item 1</li>
                    </ul>

                </div>

            </div>
            
        </x-card>

    </div>


</x-layout>
