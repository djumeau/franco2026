<footer class="z-20 mt-auto w-full bg-slate-900 py-6 text-center text-sm text-slate-400">

    <div class=" mx-auto max-w-7xl px-4">

        <!-- Row 1: Links -->

        <div class="pb-4 text-white">

            @if(request()->routeIs('program'))
                <span class="font-bold text-white">{{__('program.title')}}</span>
            @else
                <a href="{{route('program')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('program.title')}}</a>
            @endif

            |

            @if(request()->routeIs('documents'))
                <span class="font-bold text-white">{{__('documents.title')}}</span>
            @else
                <a href="{{route('documents')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('documents.title')}}</a>
            @endif

            |

            @if(request()->routeIs('prayertopics'))
                <span class="font-bold text-white">{{__('prayertopics.title')}}</span>
            @else
                <a href="{{route('prayertopics')}}" class="hover:text-white hover:underline underline-offset-2 transition-colors">{{__('prayertopics.title')}}</a>
            @endif
            
        </div>

        <!-- Row 2: Copyright -->

        <p class="text-xs text-slate-300">
            &copy; {{ date('Y') }} <a href="https://www.montrealubf.org" class="hover:text-white hover:underline underline-offset-2 transition-colors">CBU Montréal UBF</a>
        </p>

    </div>

</footer>