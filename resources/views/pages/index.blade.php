<x-layout>

    <x-slot name="title">
        Conférence biblique francophone d'été 2026 | Acceuil
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 items-center text-left text-white/85">

        <div class="p-4">

            <h1 class="text-4xl md:text-5xl font-bold leading-10 md:leading-14 pb-4 md:pb-6">Bienvenue à la conférence biblique francophone d'été 2026!</h1>

            <div class="mx-4">
                <p class="text-white text-base font-bold md:text-2xl italic">« Seigneur, à qui irions-nous ? Tu as les paroles de la vie éternelle. »</p>
                <p class="text-white text-sm md:text-base text-right pr-4 md:pr-4 italic">- Jean 6.68</p>
            </div>

            <!-- Dates and location -->

            <div class="mt-6 md:mt-8 text-lg md:text-xl">

                <div class="flex items-center pb-6">
                    <i class="fa-solid fa-calendar-days w-5 text-2xl md:text-3xl"></i> 
                    <span class="italic text-sm md:text-xl ml-1">Du 16 au 19 juillet 2026</span>
                </div>
                
                <div class="flex items-start">

                    <i class="fa-solid fa-location-dot w-5 text-2xl md:text-3xl text-center"></i>
                   
                    <div class="ml-1">
                        <p class="text-sm md:text-xl font-medium">CEGEP John Abbott</p>
                        <p class="text-sm md:text-base">Ste-Anne-de-Bellevue, Québec</p>
                    </div>

                </div>
            </div>

        </div>

        <div class="p-4">

            <div class="p-6 bg-slate-900/60 rounded-xl shadow-lg">

                <img src="{{ asset('images/2022_cbu_conf_ete_groupe.jpg') }}" alt="Participants de la conférence biblique francophone d'été 2022" class="mx-auto rounded-xl w-9/10">

                <p class="pt-4">Ce thème a comme but de joindre des questions sur la vie souvent posées (parfois philosophiques) autant par les non-croyants et les croyants, en fournissant des réponses bibliques qui pointent vers  Jésus. Les messages donneront des ou les pratiques sur comment vivre sa vie en Christ, ou  présenteront ce que ça veut dire être un chrétien (pour les nouveaux).</p>

            </div>

        </div>

    </div>

</x-layout>
