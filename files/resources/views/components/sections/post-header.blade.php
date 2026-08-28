@props([
    'category' => '',
    'dateFormatted' => '',
    'readTime' => '',
    'title' => 'Post',
    'excerpt' => '',
])
<section class="pt-10 pb-10 sm:pt-16 sm:pb-12">
    <div class="mx-auto w-full max-w-3xl px-6 lg:px-8">
        <div data-reveal>
            <p class="flex flex-wrap items-center gap-x-3 text-base text-muted sm:text-sm">
                <span>{{ $category }}</span>
                <span class="size-1 rounded-full bg-line" aria-hidden="true"></span>
                <span class="tabular-nums">{{ $dateFormatted }}</span>
                <span class="size-1 rounded-full bg-line" aria-hidden="true"></span>
                <span>{{ $readTime }} read</span>
            </p>
            <h1 class="display-hero mt-6 max-w-[18ch] font-display font-semibold text-balance text-ink">{{ $title }}</h1>
            <p class="mt-7 max-w-[52ch] text-lg text-pretty text-muted sm:text-xl">{{ $excerpt }}</p>
        </div>
    </div>
</section>
