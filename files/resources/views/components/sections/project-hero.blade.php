@props([
    'category' => '',
    'discipline' => '',
    'year' => '',
    'title' => 'Project',
    'summary' => '',
    'image' => '',
    'imageAlt' => '',
])
<section class="pt-10 pb-14 sm:pt-16 sm:pb-16">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">

        <div class="max-w-4xl" data-reveal>
            <p class="flex flex-wrap items-center gap-x-3 text-base text-muted sm:text-sm">
                <span>{{ $category }}</span>
                <span class="size-1 rounded-full bg-line" aria-hidden="true"></span>
                <span>{{ $discipline }}</span>
                <span class="size-1 rounded-full bg-line" aria-hidden="true"></span>
                <span class="tabular-nums">{{ $year }}</span>
            </p>
            <h1 class="display-hero mt-6 max-w-[16ch] font-display font-semibold text-balance text-ink">{{ $title }}</h1>
            <p class="mt-7 max-w-[58ch] text-lg text-pretty text-muted sm:text-xl">{{ $summary }}</p>
        </div>

        <div class="mt-12 overflow-hidden rounded-[min(3vw,32px)] bg-surface sm:mt-16" data-reveal>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1067" class="aspect-3/2 w-full object-cover">
        </div>

    </div>
</section>
