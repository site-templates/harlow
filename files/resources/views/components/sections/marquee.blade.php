@props(['items' => []])
<section class="border-y border-line py-7">
    {{-- Runs edge to edge, past the page container. The list is printed twice
         so the second copy takes over exactly as the first leaves — which is
         why the animation translates by half. --}}
    <div class="relative flex overflow-hidden">
        <div class="marquee-track flex w-max shrink-0 items-center">
            {{-- Each copy is floored at the viewport width. The half the track
                 translates by is therefore never narrower than the screen, which
                 is what keeps the loop seamless on a wide monitor; a short client
                 list spreads across that floor rather than leaving a hole. --}}
            <div class="flex w-max min-w-[100vw] shrink-0 items-center justify-around">
                @foreach ($items as $item)
                <span class="flex items-center gap-10 pr-10 font-display text-xl font-medium tracking-tight text-muted sm:text-2xl">
                    {{ $item->name }}
                    <span class="size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                </span>
                @endforeach
            </div>
            <div class="flex w-max min-w-[100vw] shrink-0 items-center justify-around" aria-hidden="true">
                @foreach ($items as $item)
                <span class="flex items-center gap-10 pr-10 font-display text-xl font-medium tracking-tight text-muted sm:text-2xl">
                    {{ $item->name }}
                    <span class="size-1.5 shrink-0 rounded-full bg-accent"></span>
                </span>
                @endforeach
            </div>
        </div>
    </div>
</section>
