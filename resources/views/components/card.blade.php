@props([
    'icon' => 'fa f-bi',
    'title' => 'Country Name',
    'alt' => 'Card thumbnail',
])

<div class="max-w-sm rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
    <!-- Header Container: This places the icon and title right next to each other -->
    <div class="flex items-center gap-4">

        <!-- Strict 60x60px Icon Box -->
        <div class="flex h-15 w-15 shrink-0 items-center justify-center rounded-md bg-gray-100 text-xl text-gray-600">
            <i class="{{ $icon }}"></i>
        </div>

        <!-- Title: Positioned immediately to the right of the icon box -->
        <h3 class="text-lg font-semibold text-gray-900 leading-snug">
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
