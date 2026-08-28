@props([
    'heading' => 'Keep going',
    'primaryText' => 'All work',
    'primaryHref' => '/work',
    'secondaryText' => 'All writing',
    'secondaryHref' => '/writing',
])
<section class="pb-20 sm:pb-24">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between gap-x-10 gap-y-6 border-t border-line pt-10" data-reveal>
            <h2 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $heading }}</h2>
            <div class="flex flex-wrap items-center gap-x-8 gap-y-3">
                <a href="{{ $primaryHref }}" class="inline-flex items-center gap-1.5 text-base font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink sm:text-sm">
                    {{ $primaryText }}
                    <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
                </a>
                <a href="{{ $secondaryHref }}" class="inline-flex items-center gap-1.5 text-base font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink sm:text-sm">
                    {{ $secondaryText }}
                    <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
