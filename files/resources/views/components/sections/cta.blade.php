@props([
    'heading' => 'Got something you want made properly?',
    'intro' => 'Tell me what it is, when it needs to exist, and what you have tried already. I answer every email within two days, including the ones I have to say no to.',
    'buttonText' => 'hello@harlowquinn.com',
    'buttonHref' => 'mailto:hello@harlowquinn.com',
    'note' => 'Currently booking from March 2026.',
])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        {{-- The one inverted plane on the site. It is a contained panel rather
             than a full-bleed band so the closing note still sits on paper. --}}
        <div class="rounded-[min(4vw,40px)] bg-ink px-6 py-20 text-center sm:px-12 sm:py-24 lg:py-28" data-reveal>
            <h2 class="display-section mx-auto max-w-[22ch] font-display font-semibold text-balance text-canvas">{{ $heading }}</h2>
            <p class="mx-auto mt-6 max-w-[56ch] text-lg text-pretty text-ink-muted">{{ $intro }}</p>
            <div class="mt-10 flex flex-col items-center gap-5">
                <a href="{{ $buttonHref }}" class="inline-flex items-center gap-2 rounded-full bg-accent py-4 pr-5 pl-7 text-base font-medium text-accent-ink hover:bg-accent-deep focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    {{ $buttonText }}
                    <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
                </a>
                <p class="text-base text-ink-muted sm:text-sm">{{ $note }}</p>
            </div>
        </div>
    </div>
</section>
