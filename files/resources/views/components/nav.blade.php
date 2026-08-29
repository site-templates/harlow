@props([
    'links' => [],
    'current' => '/',
    'ctaText' => 'Start a project',
    'ctaHref' => '/about',
])
{{-- The floating chrome: three separate pills rather than one bar, so the
     hero's paper runs underneath it. Links live in resources/data/site.json
     (nav_links), so editing them changes every page at once. Below lg the
     centre pill is replaced by a disclosure that works with JavaScript off. --}}
<header data-bar class="fixed inset-x-0 top-0 z-50 pt-4 sm:pt-5 [&.is-stuck_.pill]:shadow-lg [&.is-stuck_.pill]:shadow-ink/5">
    <nav class="mx-auto flex w-full max-w-6xl items-center gap-3 px-6 lg:px-8" aria-label="Main">

        <a href="/" aria-label="Homepage" class="pill flex items-center gap-2.5 rounded-full border border-line bg-canvas/85 py-2 pr-5 pl-2 backdrop-blur-md focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
            <x-mark size="size-7 text-ink" />
            <span class="font-display text-base font-semibold tracking-tight text-ink">{{ $site->name }}</span>
        </a>

        <ul role="list" class="pill mx-auto flex items-center gap-1 rounded-full border border-line bg-canvas/85 p-1.5 backdrop-blur-md max-lg:hidden">
            @foreach ($links as $link)
            <li class="text-sm">
                @if ($link->url == $current)
                <a href="{{ $link->url }}" aria-current="page" class="flex rounded-full bg-surface px-4 py-2 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $link->text }}</a>
                @endif
                @if ($link->url != $current)
                <a href="{{ $link->url }}" class="flex rounded-full px-4 py-2 text-muted hover:bg-surface hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $link->text }}</a>
                @endif
            </li>
            @endforeach
        </ul>

        <div class="ml-auto flex items-center gap-3 lg:ml-0">
            <a href="{{ $ctaHref }}" class="pill flex items-center rounded-full bg-accent px-5 py-3 text-sm font-medium text-accent-ink hover:bg-accent-deep focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink max-sm:hidden">{{ $ctaText }}</a>

            <details class="pill relative rounded-full border border-line bg-canvas/85 backdrop-blur-md lg:hidden">
                <summary class="flex size-11 cursor-pointer list-none items-center justify-center rounded-full text-ink marker:hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink [&::-webkit-details-marker]:hidden">
                    <span class="sr-only">Open the menu</span>
                    <svg viewBox="0 0 24 24" class="size-6 shrink-0 fill-current" aria-hidden="true"><path d="M3 6.25h18v1.5H3zM3 11.25h18v1.5H3zM3 16.25h18v1.5H3z"/></svg>
                </summary>
                <div class="absolute right-0 z-50 mt-3 w-60 rounded-3xl border border-line bg-canvas p-2 shadow-xl shadow-ink/5">
                    <ul role="list" class="flex flex-col">
                        @foreach ($links as $link)
                        <li class="text-base">
                            <a href="{{ $link->url }}" class="flex rounded-2xl px-4 py-3 text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $link->text }}</a>
                        </li>
                        @endforeach
                        <li class="p-1.5 pt-2 text-base">
                            <a href="{{ $ctaHref }}" class="flex justify-center rounded-full bg-accent px-4 py-3 font-medium text-accent-ink hover:bg-accent-deep focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $ctaText }}</a>
                        </li>
                    </ul>
                </div>
            </details>
        </div>

    </nav>
</header>
