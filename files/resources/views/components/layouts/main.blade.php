@props(['title' => 'Home', 'description' => '', 'current' => '/'])
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Bricolage Grotesque sets every heading; Inter carries the body and the labels. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Loads Tailwind, then the tokens, the display scale, the halo, the prose rules and the motion system -->
    @vite(['resources/css/site.css'])

    <!-- Flags JavaScript before first paint so scroll reveals never flash -->
    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased">
<!--
    THESIS: one designer's site, not a studio landing page. The work is the
    argument, so the interface gets out of its way: paper, air, hairlines,
    and a single lime that only ever marks the next thing to do.
    OWN-WORLD: white paper, near-black ink, one electric lime, a tight
    grotesque display against Inter, floating pill chrome, big soft radii.
    STORY: who he is, what he has made, what he has been thinking about,
    then how to reach him — in that order, once.
    FIRST VIEWPORT: a 3/5 statement headline on bare paper at the left, the
    portrait at the right inside a lime halo that turns once every 24s.
    FORM: asymmetric portrait hero under floating chrome.
-->

    <x-nav :links="$site->nav_links" :current="$current" />

    <main class="isolate pt-24 sm:pt-28">
        {{ $slot }}
    </main>

    <x-footer :navigation="$site->footer_links" :socials="$site->social_links" />

</body>
</html>
