@props([
    'greeting' => 'Hello, I’m Harlow Quinn',
    'role' => 'Developer/Designer',
    'avatar' => '/images/portrait.jpg',
    'avatarAlt' => 'Harlow Quinn',
    'heading' => 'Design and front-end, in one pair of hands.',
    'intro' => 'Copenhagen-based. I work with small teams on identity, product and the websites in between — one project at a time, start to finish.',
    'primaryText' => 'See selected work',
    'primaryHref' => '/work',
    'secondaryText' => 'Read the writing',
    'secondaryHref' => '/writing',
    'status' => 'Available for one project from March',
])
<section class="relative overflow-hidden">
    <div class="mx-auto flex w-full max-w-6xl flex-col items-center px-6 pt-12 pb-20 text-center sm:pt-20 sm:pb-28 lg:px-8 lg:pt-24 lg:pb-32">

        {{-- The identity chip. It introduces the person before the claim does,
             which is why the headline underneath can be about the work rather
             than another "I am". The avatar wears the halo at badge scale. --}}
        <div class="flex items-center gap-3 rounded-full border border-line py-2 pr-5 pl-2" data-reveal>
            <span class="avatar-ring flex size-12 shrink-0 rounded-full p-1 sm:size-11">
                <img src="{{ $avatar }}" alt="{{ $avatarAlt }}" width="96" height="96" class="size-full rounded-full object-cover">
            </span>
            <div class="text-left">
                <p class="text-base font-medium text-ink sm:text-sm">{{ $greeting }}</p>
                <p class="text-base text-muted sm:text-sm">{{ $role }}</p>
            </div>
        </div>

        <h1 class="display-hero mt-9 max-w-[19ch] font-display font-semibold text-balance text-ink sm:mt-10">{{ $heading }}</h1>

        <p class="mt-7 max-w-[52ch] text-lg text-pretty text-muted sm:text-xl">{{ $intro }}</p>

        <div class="mt-10 flex flex-wrap items-center justify-center gap-x-8 gap-y-4">
            <a href="{{ $primaryHref }}" class="inline-flex items-center gap-2 rounded-full bg-ink py-3.5 pr-4 pl-6 text-base font-medium text-canvas hover:bg-ink-soft focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:text-sm">
                {{ $primaryText }}
                <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
            </a>
            <a href="{{ $secondaryHref }}" class="text-base font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink sm:text-sm">{{ $secondaryText }}</a>
        </div>

        {{-- Kept out of the chip on purpose: availability changes far more often
             than a name does, and it is the last thing to read, not the first. --}}
        <p class="mt-10 flex items-center gap-2 text-base text-muted sm:text-sm">
            <span class="flex size-2 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
            {{ $status }}
        </p>

    </div>
</section>
