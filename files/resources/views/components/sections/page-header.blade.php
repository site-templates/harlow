@props([
    'heading' => 'Page',
    'intro' => '',
    'meta' => '',
])
<section class="pt-10 pb-16 sm:pt-16 sm:pb-20">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div data-reveal>
            @if ($meta)
            <p class="mb-6 text-base text-muted sm:text-sm">{{ $meta }}</p>
            @endif
            <h1 class="display-hero max-w-[18ch] font-display font-semibold text-balance text-ink">{{ $heading }}</h1>
            @if ($intro)
            <p class="mt-7 max-w-[58ch] text-lg text-pretty text-muted sm:text-xl">{{ $intro }}</p>
            @endif
        </div>
    </div>
</section>
