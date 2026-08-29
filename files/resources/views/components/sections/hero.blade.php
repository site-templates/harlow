@props([
    'status' => 'Available for one project from March',
    'heading' => 'I design brands and the things they ship.',
    'intro' => 'Independent designer in Copenhagen. I work with small teams on identity, product and the websites in between — one project at a time, start to finish.',
    'primaryText' => 'See selected work',
    'primaryHref' => '/work',
    'secondaryText' => 'Read the writing',
    'secondaryHref' => '/writing',
    'image' => '/images/portrait.jpg',
    'imageAlt' => 'Harlow Quinn, photographed against a plaster wall',
])
<section class="relative overflow-hidden">
    <div class="mx-auto w-full max-w-6xl px-6 pt-10 pb-20 sm:pt-16 sm:pb-28 lg:px-8 lg:pt-20 lg:pb-32">
        <div class="grid items-center gap-14 lg:grid-cols-[3fr_2fr] lg:gap-20">

            <div data-reveal>
                {{-- A live status, not a label above the headline: the dot says
                     it is current, and it carries information the heading does not. --}}
                <p class="inline-flex items-center gap-2 rounded-full border border-line py-1.5 pr-4 pl-2 text-base sm:text-sm">
                    <span class="flex size-2 rounded-full bg-accent" aria-hidden="true"></span>
                    <span class="text-muted">{{ $status }}</span>
                </p>

                <h1 class="display-hero mt-7 max-w-[20ch] font-display font-semibold text-balance text-ink">{{ $heading }}</h1>

                <p class="mt-7 max-w-[52ch] text-lg text-pretty text-muted sm:text-xl">{{ $intro }}</p>

                <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
                    <a href="{{ $primaryHref }}" class="inline-flex items-center gap-2 rounded-full bg-ink py-3.5 pr-4 pl-6 text-base font-medium text-canvas hover:bg-ink-soft focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:text-sm">
                        {{ $primaryText }}
                        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
                    </a>
                    <a href="{{ $secondaryHref }}" class="text-base font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink sm:text-sm">{{ $secondaryText }}</a>
                </div>
            </div>

            {{-- THE HALO. A lime sweep turning once every 24 seconds behind the
                 portrait — the one piece of motion the site is known for, drawn
                 in CSS so it costs no image bytes. --}}
            <div class="relative mx-auto w-full max-w-sm lg:max-w-none" data-reveal>
                <div class="relative aspect-square">
                    <div class="halo absolute inset-0 rounded-full" aria-hidden="true"></div>
                    {{-- The photograph needs its own absolutely-positioned frame:
                         an <img> is a replaced element, so insets alone resolve
                         to its intrinsic size rather than stretching it. --}}
                    <div class="absolute inset-4 overflow-hidden rounded-full outline-1 -outline-offset-1 outline-black/5">
                        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="720" height="720" class="size-full object-cover">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
