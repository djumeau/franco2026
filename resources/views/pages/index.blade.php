<x-layout>

    <x-slot name="title">
        {{__('index.site-name')}} | {{__('index.title')}}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 text-left text-white/85">

        <div>

            <h1 class="text-base text-center md:text-xl font-bold leading-6 md:leading-6 pb-4 md:pb-6 mx-12 italic">{{ __('index.welcome') }}</h1>

            <div class="flex justify-center items-center mx-4 pb-4">

                <img src="{{ asset('images/2026_franco_conf_title_white_transparent.png') }}" alt="Titre" class="align-center w:6/10 md:w-8/10">

            </div>

            <div class="mx-14">
                <p class="text-white text-base font-bold md:text-xl italic">{{ __('index.quote') }}</p>
                <p class="text-white text-sm md:text-base text-right md:pr-4 italic font-medium">- {{ __('index.verse') }}</p>
            </div>

            <!-- Dates and location -->

            <div class="mt-6 md:mt-8 text-lg md:text-xl text-white">

                <div class="flex items-center pb-4">
                    <i class="fa-solid fa-calendar-days w-5 text-2xl md:text-3xl"></i> 
                    <span class="italic text-sm md:text-xl ml-1">{{ __('index.dates') }}</span>
                </div>
                
                <div class="flex items-start">

                    <i class="fa-solid fa-location-dot w-5 text-2xl md:text-3xl text-center"></i>
                   
                    <div class="ml-1">
                        <p class="text-sm md:text-xl font-medium hover:underline underline-offset-3"><a href="https://maps.app.goo.gl/dWh3xsbuUeMgwUNK9" target="_blank" alt="CEGEP John Abbott sur Google Maps">{{ __('index.location') }}</a></p>
                        <p class="text-sm md:text-base">{{ __('index.city') }}</p>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 p-4">

            <div class="p-6 bg-slate-900/60 rounded-xl shadow-lg">

                <img src="{{ asset('images/2022_cbu_conf_ete_groupe.jpg') }}" alt="Participants de la conférence biblique francophone d'été 2022" class="mx-auto rounded-xl w-9/10">

                <p class="pt-4">{{ __('index.introduction.text-1') }}</p>

                <p class="pt-4">{{ __('index.introduction.text-2') }}</p>

                <ul class='list-disc pl-6 pr-4'>
                    <li>{{ __('index.introduction.item-1') }}</li>
                    <li>{{ __('index.introduction.item-2') }}</li>
                    <li>{{ __('index.introduction.item-3') }}</li>
                    <li>{{ __('index.introduction.item-4') }}</li>
                </ul>

            </div>

        </div>

    </div>

    <div id="countries" class="w-full md:w-max md:mx-auto my-8 pt-4 text-center x-space-4 bg-slate-900/50 rounded-xl shadow-lg">

        <!-- Row 1 -->
        <div class="pb-4">
            <p class="text-2xl font-medium">{{ __('index.participating-countries') }}</p>
        </div>

        <!-- Row 2 -->
        <div class="flex flex-wrap justify-center gap-x-8 gap-y-4 px-8 pb-8 items-center text-3xl">

            <div>
                <span class="fi fi-be"></span>
                <p class="text-xs pt-2">{{ __('index.countries.Belgium') }}</p>
            </div>

            <div>
                <span class="fi fi-ca"></span>
                <p class="text-xs pt-2">{{ __('index.countries.Canada') }}</p>
            </div>

            <div>
                <span class="fi fi-us"></span>
                <p class="text-xs pt-2">{{ __('index.countries.USA') }}</p>
            </div>

            <div>
                <span class="fi fi-fr"></span>
                <p class="text-xs pt-2">{{ __('index.countries.France') }}</p>
            </div>

            <div>
                <span class="fi fi-ch"></span>
                <p class="text-xs pt-2">{{ __('index.countries.Switzerland') }}</p>
            </div>

        </div>
        
    </div> 

</x-layout>
