@props(['items' => []])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        {{-- The index runs two-up so the whole body of work is comparable at a
             glance — the home page already has the slow, one-at-a-time read. --}}
        <div class="grid gap-x-16 gap-y-16 stagger sm:grid-cols-2 sm:gap-y-20">
            @foreach ($items as $item)
            <a href="{{ $item->link }}" class="card group flex flex-col focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink" data-reveal>
                <div class="card-media relative overflow-hidden rounded-[min(2.5vw,28px)] bg-surface outline-1 -outline-offset-1 outline-black/5">
                    <img src="{{ $item->image }}" alt="{{ $item->imageAlt }}" width="1200" height="800" loading="lazy" decoding="async" class="aspect-3/2 w-full object-cover">
                    <span class="card-arrow absolute top-4 right-4 flex size-11 items-center justify-center rounded-full bg-accent text-accent-ink" aria-hidden="true">
                        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current"><path d="M4.4 3.5h8.1v8.1h-1.5V6.06L4.53 12.53 3.47 11.47 9.94 5H4.4z"/></svg>
                    </span>
                </div>
                <p class="mt-6 flex flex-wrap items-center gap-x-3 text-base text-muted sm:text-sm">
                    <span>{{ $item->category }}</span>
                    <span class="size-1 rounded-full bg-muted/50" aria-hidden="true"></span>
                    <span>{{ $item->discipline }}</span>
                    <span class="size-1 rounded-full bg-muted/50" aria-hidden="true"></span>
                    <span class="tabular-nums">{{ $item->year }}</span>
                </p>
                <h2 class="display-sub mt-3 font-display font-semibold text-balance text-ink">{{ $item->title }}</h2>
                <p class="mt-3 max-w-[48ch] text-lg text-pretty text-muted">{{ $item->summary }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
