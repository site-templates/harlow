@props(['items' => []])
<section class="border-y border-line py-7">
    {{-- Runs edge to edge, past the page container. The list is printed twice
         so the second copy takes over exactly as the first leaves — which is
         why the animation translates by half. --}}
    <div class="relative flex overflow-hidden">
        <div class="marquee-track flex w-max shrink-0 items-center">
            @foreach ($items as $item)
            <span class="flex items-center gap-10 pr-10 font-display text-xl font-medium tracking-tight text-muted sm:text-2xl">
                {{ $item->name }}
                <span class="size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
            </span>
            @endforeach
            @foreach ($items as $item)
            <span aria-hidden="true" class="flex items-center gap-10 pr-10 font-display text-xl font-medium tracking-tight text-muted sm:text-2xl">
                {{ $item->name }}
                <span class="size-1.5 shrink-0 rounded-full bg-accent"></span>
            </span>
            @endforeach
        </div>
    </div>
</section>
