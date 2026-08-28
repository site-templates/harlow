@props(['items' => []])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <dl class="flex flex-col border-t border-line stagger">
            @foreach ($items as $item)
            <div class="grid gap-x-16 gap-y-3 border-b border-line py-9 lg:grid-cols-[12rem_1fr]" data-reveal>
                <dt class="font-display text-xl font-semibold tracking-tight text-ink">{{ $item->label }}</dt>
                <dd class="max-w-[64ch] text-lg text-pretty text-muted">{{ $item->body }}</dd>
            </div>
            @endforeach
        </dl>
    </div>
</section>
