@props([
    'heading' => 'Latest writing',
    'intro' => 'Short pieces about how the work actually goes, published when I have something worth saying rather than on a schedule.',
    'linkText' => 'All writing',
    'linkHref' => '/writing',
    'items' => [],
])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">

        <div class="flex flex-wrap items-end justify-between gap-x-8 gap-y-4" data-reveal>
            <div>
                <h2 class="display-section max-w-[24ch] font-display font-semibold text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-5 max-w-[58ch] text-lg text-pretty text-muted">{{ $intro }}</p>
            </div>
            <a href="{{ $linkHref }}" class="inline-flex items-center gap-1.5 text-base font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink sm:text-sm">
                {{ $linkText }}
                <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
            </a>
        </div>

        {{-- Rows on hairlines, not cards: these are siblings in one list, and
             the lightest separation that works is the right one. The title
             steps right and a lime rule grows under it on hover. --}}
        <ul role="list" class="mt-12 flex flex-col border-t border-line stagger sm:mt-16">
            @foreach ($items as $item)
            <li class="entry border-b border-line" data-reveal>
                <a href="{{ $item->link }}" class="group grid gap-x-8 gap-y-2 py-7 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:grid-cols-[8rem_1fr_5rem] sm:items-baseline">
                    <p class="text-base text-muted tabular-nums sm:text-sm">{{ $item->dateFormatted }}</p>
                    <div>
                        <h3 class="row-title display-sub font-display font-semibold text-balance text-ink">{{ $item->title }}</h3>
                        <span class="row-rule mt-2 flex h-0.5 w-16 bg-accent" aria-hidden="true"></span>
                        <p class="mt-3 max-w-[62ch] text-lg text-pretty text-muted">{{ $item->excerpt }}</p>
                    </div>
                    <p class="text-base text-muted sm:justify-self-end sm:text-sm">{{ $item->readTime }}</p>
                </a>
            </li>
            @endforeach
        </ul>

    </div>
</section>
