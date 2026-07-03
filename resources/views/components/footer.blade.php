<footer class="mt-auto w-full bg-slate-900 py-6 text-center text-sm text-slate-400">

    <div class="mx-auto max-w-7xl px-4">

        <!-- Row 1: Navigation Links -->
        <nav class="mb-4 flex justify-center gap-x-6 font-medium text-white">
            <a href="{{ route('about') }}" class="hover:text-white transition-colors">À propos</a>
            <a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a>
        </nav>

        <!-- Row 2: Copyright -->
        <p class="text-xs text-slate-300">
            &copy; {{ date('Y') }} CBU Montreal UBF.
        </p>

    </div>

</footer>