@props(
    ['items']
)

<div class="w-full rounded-xl border border-gray-200 bg-white p-5 shadow-sm">

    <!-- Header Container: This places the icon and title right next to each other -->
    <div class="flex items-center gap-4">

        <!-- Icon -->
        <div class="flex h-15 w-15 shrink-0 items-center justify-center rounded-md bg-gray-100 text-xl text-gray-600">
            @if(str_ends_with($icon, '.svg'))
                <!-- Renders the custom SVG from the public folder inline -->
                <div class="h-12 w-12 flex items-center justify-center">
                    {!! file_get_contents(public_path($icon)) !!}
                </div>
            @else
                <!-- Renders standard Font Awesome i Tag string -->
                <i class="{{ $icon }}"></i>
            @endif
        </div>

        <!-- Title: Positioned immediately to the right of the icon box -->
        <h3 class="m-0 p-0 text-lg font-semibold text-gray-900 leading-snug">
            {{ $title }}
        </h3>

    </div>

    <!-- Bottom Container: Blurb text underneath -->
    <div class="mt-4">
        <p class="text-sm leading-relaxed text-gray-600">
            {{ $slot }}
        </p>
    </div>
</div>
