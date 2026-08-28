@props([
    'heading' => 'What I can take on',
    'intro' => 'Four things, done properly. If what you need is not on this list, say so anyway — I will tell you honestly whether it is mine to do.',
    'items' => [],
])
<section class="bg-surface py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">

        <div data-reveal>
            <h2 class="display-section max-w-[24ch] font-display font-semibold text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[58ch] text-lg text-pretty text-muted">{{ $intro }}</p>
        </div>

        {{-- A description list on hairlines, not four boxes. The terms are the
             hierarchy; the rules only separate siblings. --}}
        <dl class="mt-14 grid gap-x-16 border-t border-line stagger sm:mt-16 sm:grid-cols-2">
            @foreach ($items as $item)
            <div class="border-b border-line py-8 sm:[&:nth-child(2n)]:border-l sm:[&:nth-child(2n)]:border-l-line sm:[&:nth-child(2n)]:pl-16" data-reveal>
                <dt class="font-display text-xl font-semibold tracking-tight text-ink">{{ $item->title }}</dt>
                <dd class="mt-3 max-w-[52ch] text-lg text-pretty text-muted">{{ $item->description }}</dd>
            </div>
            @endforeach
        </dl>

    </div>
</section>
