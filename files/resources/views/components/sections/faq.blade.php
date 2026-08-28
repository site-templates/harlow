@props([
    'heading' => 'The practical questions',
    'items' => [],
])
<section class="py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[1fr_2fr] lg:gap-20">

            <h2 class="display-section max-w-[16ch] font-display font-semibold text-balance text-ink" data-reveal>{{ $heading }}</h2>

            {{-- Native disclosure elements: they open with JavaScript off, they
                 are keyboard operable for free, and they print expanded. --}}
            <div class="flex flex-col border-t border-line stagger">
                @foreach ($items as $item)
                <details class="group border-b border-line" data-reveal>
                    <summary class="flex cursor-pointer list-none items-start justify-between gap-6 py-6 marker:hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink [&::-webkit-details-marker]:hidden">
                        <span class="font-display text-xl font-semibold tracking-tight text-balance text-ink">{{ $item->question }}</span>
                        <span class="mt-1 flex size-6 shrink-0 items-center justify-center rounded-full border border-line text-ink group-open:bg-accent group-open:border-accent" aria-hidden="true">
                            <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current"><path d="M7.25 3.5h1.5v3.75h3.75v1.5H8.75v3.75h-1.5V8.75H3.5v-1.5h3.75z" class="group-open:hidden"/><path d="M3.5 7.25h9v1.5h-9z" class="not-group-open:hidden"/></svg>
                        </span>
                    </summary>
                    <p class="max-w-[64ch] pb-7 text-lg text-pretty text-muted">{{ $item->answer }}</p>
                </details>
                @endforeach
            </div>

        </div>
    </div>
</section>
