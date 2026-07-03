<x-layout>

    <x-slot name="title">
        Conférence biblique francophone d'été 2026 | Acceuil
    </x-slot>

    <div class="flex flex-col min-h-screen text-left text-white/85">

        <div>

            <h1 class="text-4xl md:text-5xl font-bold text-white/85 leading-10 md:leading-16 p-0 pb-4 md:pb-8">Bienvenue à la conférence biblique francophone d'été 2026!</h1>

            <div class="mx-4 text-center">
                <p class="text-white font-bold text-base md:text-xl italic">« Seigneur, à qui irions-nous ? Tu as les paroles de la vie éternelle. »</p>
                <p class="text-white text-sm md:text-xl text-right pr-4">- Jean 6.68</p>
            </div>

        </div>

        <div class="mt-8 text-center">

            <a href="{{ route('about') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">En savoir plus</a>

        </div>

    </div>



</x-layout>
