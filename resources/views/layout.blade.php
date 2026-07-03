<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/svg+xml" href="{{ asset('logo_ubf_favicon.svg') }}">

    <title>{{ $title ?? 'Conférence Biblique Francophone 2026' }}</title>
</head>

<body style="background-color: value(--color-background);">

    <main>
        {{ $slot }}
    </main>
    
</body>

</html>