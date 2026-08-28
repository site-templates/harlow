@props([
    'heading' => 'Where I have been',
    'items' => [],
])
<section class="bg-surface py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <h2 class="display-section max-w-[24ch] font-display font-semibold text-balance text-ink" data-reveal>{{ $heading }}</h2>
        <dl class="mt-12 flex flex-col border-t border-line stagger sm:mt-14">
            @foreach ($items as $item)
            <div class="grid gap-x-10 gap-y-1 border-b border-line py-6 sm:grid-cols-[12rem_1fr_auto] sm:items-baseline" data-reveal>
                <dt class="text-base text-muted tabular-nums sm:text-sm">{{ $item->period }}</dt>
                <dd class="font-display text-xl font-semibold tracking-tight text-ink">{{ $item->role }}</dd>
                <dd class="text-base text-muted sm:text-sm">{{ $item->org }}</dd>
            </div>
            @endforeach
        </dl>
    </div>
</section>
