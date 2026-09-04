@props(['title' => 'Home', 'description' => ''])
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Inter Tight carries the display voice, Inter the body, Fragment Mono the labels. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono&family=Inter+Tight:wght@500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Loads Tailwind plus the token layer and motion system in resources/css/site.css -->
    @vite(['resources/css/site.css'])

    <!-- Flag JS support before first paint so the scroll reveals never flash (see main.js) -->
    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased" data-instant-navigation>

    <main class="isolate">
        {{ $slot }}
    </main>

    <x-footer/>

</body>
</html>
