@props(['items' => []])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        {{-- The archive keeps the date in its own rail so the titles start on
             one line down the page — easier to scan than a centred stack. --}}
        <ul role="list" class="flex flex-col border-t border-line stagger">
            @foreach ($items as $item)
            <li class="entry border-b border-line" data-reveal>
                <a href="{{ $item->link }}" class="group grid gap-x-12 gap-y-3 py-9 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink lg:grid-cols-[10rem_1fr]">
                    <div class="flex flex-wrap items-center gap-x-3 lg:flex-col lg:items-start lg:gap-y-2">
                        <p class="text-base text-muted tabular-nums sm:text-sm">{{ $item->dateFormatted }}</p>
                        <p class="rounded-full bg-surface px-2.5 py-1 text-base text-muted sm:text-sm">{{ $item->category }}</p>
                    </div>
                    <div>
                        <h2 class="row-title display-sub font-display font-semibold text-balance text-ink">{{ $item->title }}</h2>
                        <span class="row-rule mt-2 flex h-0.5 w-16 bg-accent" aria-hidden="true"></span>
                        <p class="mt-4 max-w-[66ch] text-lg text-pretty text-muted">{{ $item->excerpt }}</p>
                        <p class="mt-4 text-base text-muted sm:text-sm">{{ $item->readTime }} read</p>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
