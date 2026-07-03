<x-layout>

    <x-slot name="title">
        Conférence biblique francophone d'été 2026 | Acceuil
    </x-slot>

    <div class="mx-2 md:mx-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-left text-white">

        <div>

            <h1 class="text-4xl md:text-5xl font-bold text-white/85 leading-10 md:leading-14 p-0 pb-4 md:pb-8">Bienvenue à la conférence biblique francophone d'été 2026!</h1>

            <div class="mx-4 text-center pb-8">
                <p class="text-white font-bold text-base md:text-xl italic">« Seigneur, à qui irions-nous ? Tu as les paroles de la vie éternelle. »</p>
                <p class="text-white text-sm md:text-xl text-right pr-4">- Jean 6.68</p>
            </div>


            <!-- Dates and location -->
            <div>

                <div class="flex items-center gap-1 pb-4">
                    <i class="fa-solid fa-calendar-days text-center text-xl"></i>
                    <span class="italic">Du 16 au 19 juillet, 2026</span>
                </div>

                <div class="flex items-start gap-1">
                    <i class="fa-solid fa-location-dot pt-1 text-xl"></i>
                    <div class="italic">
                        <p class="font-bold">CEGEP John Abbott</p>
                        <p>Ste-Anne-de-Bellevue, QC</div>
                </div>

            </div>

        </div>

        <div class="flex flex-col justify-center text-left p-4">

            <p class="bg-slate-600 rounded-xl p-4">Ce thème a comme but de joindre des questions sur la vie souvent posées (parfois philosophiques) autant par les non-croyants et les croyants, en fournissant des réponses bibliques qui pointent vers  Jésus. Les messages donneront des ou les pratiques sur comment vivre sa vie en Christ, ou  présenteront ce que ça veut dire être un chrétien (pour les nouveaux).</p>
        </div>

    </div>

    <div class="mt-8 text-center">

            <a href="{{ route('about') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">En savoir plus</a>

    </div>



</x-layout>
