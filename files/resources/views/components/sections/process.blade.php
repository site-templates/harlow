@props([
    'heading' => 'How a project runs',
    'intro' => 'The same four stages every time, with the dates agreed before we start. The numbers are the order things actually happen in.',
    'items' => [],
])
<section class="py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">

        <div data-reveal>
            <h2 class="display-section max-w-[24ch] font-display font-semibold text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[58ch] text-lg text-pretty text-muted">{{ $intro }}</p>
        </div>

        {{-- Numbered because the sequence is the content: stage three cannot
             happen before stage two. Separated by a rule per column, not by
             four boxes. --}}
        <ol role="list" class="mt-14 grid gap-x-12 gap-y-10 stagger sm:mt-16 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-10">
            @foreach ($items as $item)
            <li class="border-t border-line pt-6" data-reveal>
                <p class="font-display text-sm font-semibold text-ink tabular-nums">{{ $item->step }}</p>
                <h3 class="mt-4 font-display text-xl font-semibold tracking-tight text-balance text-ink">{{ $item->title }}</h3>
                <p class="mt-3 text-base text-pretty text-muted sm:text-sm">{{ $item->description }}</p>
            </li>
            @endforeach
        </ol>

    </div>
</section>
