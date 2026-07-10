<x-layout>

    <x-slot name="title">
        {{ __('index.site-name') }} | {{ __('documents.title') }}
    </x-slot>

    {{-- Page Header --}}
    <header class="text-center mb-8">
        <h1 class="text-xl text-white tracking-tight md:text-2xl uppercase">
            {{ $pageTitle }}
        </h1>
        <div class="mt-1 w-29 md:w-35 h-1 bg-white mx-auto"></div>
    </header>

    @if(empty($categories))

        {{-- Empty State Notification --}}
        <div class="text-center p-12 bg-white rounded-2xl shadow-xs border border-slate-200/80 max-w-md mx-auto">
            <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13h6m-3-3v6m-9 1V4a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 012 2v3a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            </svg>
            <p class="mt-4 text-slate-900 font-medium">No document categories available.</p>
        </div>

    @else

        <div class="space-y-14">

            {{-- 1. Loop Through Categories --}}

            @foreach($categories as $categoryKey => $category)

                <section>
                    {{-- Section Heading --}}
                    <div class="flex items-center gap-3 mb-6 border-b border-slate-200 pb-3">
                        <i class="fa-solid fa-folder-open"></i>
                        <h2 class="text-xl sm:text-2xl text-white tracking-tight">
                            {{ $category['name'] }}
                        </h2>
                        <span class="text-xs font-bold px-2 py-0.5 bg-slate-200 text-slate-600 rounded-full ml-auto">
                            {{ count($category['files'] ?? []) }}
                        </span>
                    </div>
                    
                    @if(empty($category['files']))

                        <p class="text-slate-900 italic bg-white rounded-xl p-6 border border-slate-900">{{__('documents.empty-categories')}}</p>

                    @else

                        {{-- Responsive Grid Engine: 1 Column on Mobile, 2 Columns on Desktop Large Screens --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                            {{-- 2. Loop Through Files --}}
                            @foreach($category['files'] as $fileKey => $file)
                                {{-- 
                                The card container is marked 'relative' and 'group'. 
                                Hover effects are placed here so the whole card responds visually when hovered.
                                --}}
                                <div class="relative bg-white rounded-xl border border-slate-200/80 p-5 shadow-xs hover:shadow-md hover:border-indigo-300 transition-all flex flex-col justify-between group">
                                    
                                    {{-- The Main Document Download Link --}}
                                    {{-- 
                                    The 'absolute inset-0' utility stretches this invisible link to cover the exact dimensions of the card.
                                    The 'z-10' places it cleanly over the text layout.
                                    --}}
                                    <a href="{{ Storage::url($category['directory'] . '/' . $file['filename']) }}" 
                                    target="_blank" 
                                    class="absolute inset-0 z-10 rounded-xl"
                                    aria-label="Download {{ $file['name'] }}">
                                    </a>

                                    <div class="flex items-start gap-4">
                                        {{-- Dynamic Responsive Asset Icons --}}
                                        <div class="p-3 rounded-lg shrink-0 {{ strtolower($file['type']) === 'pdf' ? 'bg-rose-50 text-rose-600' : 'bg-blue-50 text-blue-600' }}">
                                            @if(strtolower($file['type']) === 'pdf')
                                                <i class="fa-solid fa-file-pdf text-xl"></i>
                                            @else
                                                <i class="fa-solid fa-file-word text-xl"></i>
                                            @endif
                                        </div>

                                        {{-- File Metadata --}}
                                        <div class="space-y-1">
                                            <h3 class="font-bold text-black leading-snug group-hover:text-slate-600 transition-colors">
                                                {{ $file['name'] }}
                                            </h3>
                                            
                                            {{-- Bible Passage Metadata Clickable Tag --}}
                                            {{-- 
                                            CRITICAL: 'relative z-20' lifts the Bible Gateway link on top of the invisible document download overlay.
                                            This allows the user to click the text tag directly without triggering the file download.
                                            --}}
                                            @if(!empty($file['passage']) && !empty($file['link']))
                                                <a href="{{ $file['link'] }}" 
                                                target="_blank" 
                                                rel="noopener noreferrer"
                                                class="relative z-20 inline-flex items-center gap-1.5 text-xs font-semibold bg-black text-white hover:bg-black-50 hover:text-white px-2 py-0.5 rounded-sm transition-colors mt-1 sm:mt-0"
                                                title="Open on Bible Gateway">
                                                    <i class="fa-solid fa-book-open text-[10px]"></i>
                                                    <span>{{ $file['passage'] }}</span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Actions Wrapper --}}
                                    <div class="mt-6 border-t border-slate-100 pt-4 flex items-center justify-between">
                                        <span class="text-xs uppercase font-extrabold tracking-wider text-black">
                                            Format: {{ $file['type'] }}
                                        </span>
                                        
                                        {{-- Visual Link indicator (matches the hover transform properties of the parent container) --}}
                                        <span class="inline-flex items-center gap-2 text-sm font-bold text-black group-hover:text-slate-600 transition-colors">
                                            <span>{{__('documents.download')}}</span>
                                            <i class="fa-solid fa-arrow-down-long text-xs transform group-hover:translate-y-0.5 transition-transform"></i>
                                        </span>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endif
                </section>
            @endforeach
        </div>
    @endif
   
</x-layout>
