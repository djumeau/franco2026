@vite('resources/css/flags.css')

<x-layout>

    <x-slot name="title">
        Conférence biblique francophone d'été 2026 | Acceuil
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 text-left text-white/85">

        <div>

            <h1 class="text-base text-center md:text-xl font-bold leading-6 md:leading-6 pb-4 md:pb-6 mx-12 italic">Bienvenue à la conférence biblique francophone d'été 2026!</h1>

            <div class="flex justify-center items-center mx-4 pb-4">

                <img src="{{ asset('images/2026_franco_conf_title_white_transparent.png') }}" alt="Titre" class="align-center w:6/10 md:w-8/10">

            </div>

            <div class="mx-12">
                <p class="text-white text-base font-bold md:text-xl italic">« Seigneur, à qui irions-nous ? Tu as les paroles de la vie éternelle. »</p>
                <p class="text-white text-sm md:text-base text-right pr-4 md:pr-4 italic font-medium">- Jean 6.68</p>
            </div>

            <!-- Dates and location -->

            <div class="mt-6 md:mt-8 text-lg md:text-xl text-white">

                <div class="flex items-center pb-4">
                    <i class="fa-solid fa-calendar-days w-5 text-2xl md:text-3xl"></i> 
                    <span class="italic text-sm md:text-xl ml-1">Du 16 au 19 juillet 2026</span>
                </div>
                
                <div class="flex items-start">

                    <i class="fa-solid fa-location-dot w-5 text-2xl md:text-3xl text-center"></i>
                   
                    <div class="ml-1">
                        <p class="text-sm md:text-xl font-medium hover:underline underline-offset-3"><a href="https://maps.app.goo.gl/dWh3xsbuUeMgwUNK9" target="_blank" alt="CEGEP John Abbott sur Google Maps">CEGEP John Abbott</a></p>
                        <p class="text-sm md:text-base">Ste-Anne-de-Bellevue, Québec</p>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 p-4">

            <div class="p-6 bg-slate-900/60 rounded-xl shadow-lg">

                <img src="{{ asset('images/2022_cbu_conf_ete_groupe.jpg') }}" alt="Participants de la conférence biblique francophone d'été 2022" class="mx-auto rounded-xl w-9/10">

                <p class="pt-4">Ce thème a comme but de joindre des questions sur la vie souvent posées (parfois philosophiques) autant par les non-croyants et les croyants, en fournissant des réponses bibliques qui pointent vers  Jésus. Les messages donneront des ou les pratiques sur comment vivre sa vie en Christ, ou  présenteront ce que ça veut dire être un chrétien (pour les nouveaux).</p>

            </div>

        </div>

    </div>

    <div class="flex flex-col gap-4 my-8 pt-4 text-center x-space-4 bg-slate-900/50 rounded-xl shadow-lg">

        <div>
            <p class="text-2xl font-medium">Pays représentés</p>
        </div>

        <div class="flex flex-wrap justify-center gap-x-6 gap-y-4 pb-8 items-center text-3xl">

            <div>
                <span class="fi fi-ca"></span>
                <p class="text-xs pt-2">Canada</p>
            </div>

            <div>
                <span class="fi fi-fr"></span>
                <p class="text-xs pt-2">France</p>
            </div>

            <div>
                <span class="fi fi-ch"></span>
                <p class="text-xs pt-2">Suisse</p>
            </div>

            <div>
                <span class="fi fi-be"></span>
                <p class="text-xs pt-2">Belgique</p>
            </div>

            <div>
                <span class="fi fi-us"></span>
                <p class="text-xs pt-2">États-Unis</p>
            </div>

        </div>
        
    </div> 

</x-layout>
