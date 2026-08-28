@props([
    'heading' => 'A short version',
    'body' => 'I have been designing for eleven years — four of them in-house at a fintech, three in a studio doing books, and the last four on my own. What has stayed constant is a preference for work that has to survive contact with reality: a label that gets printed 40,000 times, a screen someone opens while stressed, a system a junior designer has to operate after I have gone.',
    'bodyTwo' => 'I take one project at a time. That is partly temperament and partly arithmetic — the middle stretch of a project, where a direction becomes a system, is the part that suffers when attention is split, and it is also the part that decides whether the work lasts.',
    'image' => '/images/studio.jpg',
    'imageAlt' => 'A desk under a window with printed proofs and a lime mug',
])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[3fr_2fr] lg:items-start lg:gap-20">

            <div data-reveal>
                <h2 class="display-section max-w-[24ch] font-display font-semibold text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-7 max-w-[62ch] text-lg text-pretty text-ink">{{ $body }}</p>
                <p class="mt-6 max-w-[62ch] text-lg text-pretty text-muted">{{ $bodyTwo }}</p>
            </div>

            <div class="overflow-hidden rounded-[min(3vw,32px)] bg-surface" data-reveal>
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1200" height="800" class="aspect-4/5 w-full object-cover">
            </div>

        </div>
    </div>
</section>
