<x-layout>

    <x-slot name="title">
        {{ __('index.site-name') }} | {{ __('documents.title') }}
    </x-slot>

    <div class='container'>

        {{-- Render the main page title --}}
        <h1 class="max-w-4xl mx-auto font-bold text-2xl">{{ $pageTitle }}</h1>

        {{-- Safety check: Ensure categories exist --}}
        @if(empty($categories))
            <p>No document categories available.</p>
        @else

            {{-- 1. Loop through each category tier --}}
            @foreach($categories as $categoryKey => $category)
                <div class="category-block">
                    {{-- Access the category name --}}
                    <h2>{{ $category['name'] }}</h2>
                    
                    {{-- Safety check: Ensure the category has files --}}
                    @if(empty($category['files']))
                        <p>No documents in this category.</p>
                    @else
                        <ul>
                            {{-- 2. Loop through the files array inside this category --}}
                            @foreach($category['files'] as $fileKey => $file)
                                <li>
                                    {{-- Access the file name --}}
                                    <strong>{{ $file['name'] }}</strong>

                                    {{-- Optional check: Render the bible passage only if it exists --}}
                                    @if(!empty($file['passage']))
                                        <span class="passage">({{ $file['passage'] }})</span>
                                    @endif

                                    <br>
                                    
                                    {{-- Dynamic URL building: Concatenate directory, a slash, and the filename --}}
                                    <a href="{{ Storage::url($category['directory'] . '/' . $file['filename']) }}" target="_blank">
                                        Download / View ({{ strtoupper($file['type']) }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach

        @endif

    </div>
   
</x-layout>
