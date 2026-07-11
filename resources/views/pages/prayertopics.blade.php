@php

    $en = app()->isLocale('en');

    $pageTitle = __('prayertopics/general.title');
    $downloadTitle = __('prayertopics/general.download.title');
    $filepath = __('prayertopics/general.download.filepath');

    // Define tabs matching your file names and their respective visual display elements
    $tabs = [
        'world' => ['label' => $en ? 'General' : 'Générale', 'icon' => 'fa-solid fa-globe', 'file' => 'general'],
    ];

    /*
    $tabs = [
        'world' => ['label' => $en ? 'World' : 'Monde', 'icon' => 'fa-solid fa-globe', 'file' => 'general'],
        'belgium' => ['label' => $en ? 'Belgium' : 'Bruxelles', 'icon' => 'fi fi-be', 'file' => 'belgium'],
        'canada' => ['label' => $en ? 'Canada' : 'Canada', 'icon' => 'fi fi-ca', 'file' => 'canada'],
        'france' => ['label' => $en ? 'France' : 'France', 'icon' => 'fi fi-fr', 'file' => 'france'],
        'switzerland' => ['label' => $en ? 'Switzerland' : 'Suisse', 'icon' => 'fi fi-ch', 'file' => 'switzerland'],
    ];
    */

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
            class="inline-flex items-center gap-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 shadow-xs transition-colors duration-150 hover:bg-gray-50 hover:underline hover:text-red-600 focus:outline-hidden focus:ring-4 focus:ring-gray-100"
        >
            <!-- Font Awesome PDF Icon -->
            <i class="fa-solid fa-file-pdf text-lg text-red-500 transition-colors duration-150 group-hover:text-red-600"></i>
            
            <span>{{$downloadTitle}}</span>
        </a>
    </div>

    {{-- Prayer Topics --}}

    <!-- 1. The Interactive Flag/Tab Navigation Bar -->
    <div class="flex flex-wrap gap-2 border-b border-gray-200 pb-4 mb-6">
        @foreach($tabs as $tabKey => $tabInfo)
            <button 
                type="button"
                onclick="switchTab('{{ $tabKey }}')"
                id="tab-btn-{{ $tabKey }}"
                class="tab-button flex items-center gap-2 px-4 py-2 border rounded-full text-sm font-medium transition cursor-pointer"
            >
                <i class="{{$tabInfo['icon']}}"></i> {{ $tabInfo['label'] }}
            </button>
        @endforeach
    </div>

    <!-- 2. The Data Cards Workspace -->
    <div class="">
        @foreach($tabs as $tabKey => $tabInfo)

            @php
                // Fetch the country group data object from the localization file
                $countryFileName = "prayertopics/" . $tabInfo['file'] . ".group";
                $countryData = __( $countryFileName );  
            @endphp

            {{-- Safety Check: Verify that the country group object is a valid array with a cards collection --}}
            @if(is_array($countryData) && isset($countryData['cards']) && is_array($countryData['cards']))

                <!-- Card visibility tracking container tagged with its country/tab key -->
                <div class="country-group-wrapper grid grid-cols-1 md:grid-cols-2 gap-4 space-y-4" data-country="{{ $tabKey }}">

                   <!-- {{$countryData['title']}} -->
                    
                   @foreach($countryData['cards'] as $cardKey => $card)
                        {{-- This will print the title if it exists, or 'Untitled Card' if it doesn't --}}
                        <x-card
                          title="{{$card['title'] ?? 'Untitled Card'}}"
                          icon="{{$card['icon'] ?? 'fa-solid fa-church'}}">
                          
                          @if(!empty($card['key-verse']))

                            <div class='w-fit bg-slate-800 text-white shrink rounded-xl mt-2 p-3 px-3'>
                                
                                @if(!empty($card['key-verse-link']))
                                    <a href="#" class="hover:underline" _target="blank">{{$card['key-verse']}}</a>
                                @else
                                    {{$card['key-verse']}}
                                @endif

                            </div>

                          @endif

                          <ul class="list-disc text-black pt-2 pl-5">

                          @foreach($card['prayer-topics'] as $prayerKey => $prayerTopic) 

                            <li>{{$prayerTopic}}</li>

                          @endforeach

                          </ul>

                        </x-card>
                                    
                    @endforeach

                </div> <!-- End country-group-wrapper -->

            @endif
            
        @endforeach
    </div>

</x-layout>
