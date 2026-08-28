@props([
    'heading' => 'Selected work',
    'intro' => 'Six projects from the last two years. Each one is written up properly — what the problem turned out to be, and what it cost to solve.',
    'linkText' => 'All work',
    'linkHref' => '/work',
    'items' => [],
])
<section class="py-20 sm:py-28 lg:py-32">
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

        {{-- Alternating rows rather than a card grid: every second project puts
             its photograph on the other side, so the page has a rhythm instead
             of a wall. One anchor wraps each row — never a nested link. --}}
        <div class="mt-16 flex flex-col gap-16 sm:mt-20 sm:gap-20 lg:gap-24">
            @foreach ($items as $item)
            <a href="{{ $item->link }}" class="card group grid items-center gap-8 lg:grid-cols-2 lg:gap-16" data-reveal>

                <div class="card-media relative overflow-hidden rounded-[min(2.5vw,28px)] bg-surface @if ($loop->even) lg:order-2 @endif">
                    <img src="{{ $item->image }}" alt="{{ $item->imageAlt }}" width="1200" height="800" class="aspect-3/2 w-full object-cover">
                    <span class="card-arrow absolute top-5 right-5 flex size-12 items-center justify-center rounded-full bg-accent text-accent-ink" aria-hidden="true">
                        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current"><path d="M4.4 3.5h8.1v8.1h-1.5V6.06L4.53 12.53 3.47 11.47 9.94 5H4.4z"/></svg>
                    </span>
                </div>

                <div>
                    <p class="flex flex-wrap items-center gap-x-3 text-base text-muted sm:text-sm">
                        <span>{{ $item->category }}</span>
                        <span class="size-1 rounded-full bg-line" aria-hidden="true"></span>
                        <span>{{ $item->discipline }}</span>
                        <span class="size-1 rounded-full bg-line" aria-hidden="true"></span>
                        <span class="tabular-nums">{{ $item->year }}</span>
                    </p>
                    <h3 class="display-sub mt-4 font-display font-semibold text-balance text-ink">{{ $item->title }}</h3>
                    <p class="mt-4 max-w-[52ch] text-lg text-pretty text-muted">{{ $item->summary }}</p>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-base font-medium text-ink underline decoration-line underline-offset-4 group-hover:decoration-ink sm:text-sm">
                        Read the case study
                        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
                    </span>
                </div>

            </a>
            @endforeach
        </div>

    </div>
</section>
