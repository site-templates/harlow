@props([
    'role' => '',
    'duration' => '',
    'year' => '',
    'outcome' => '',
    'quote' => '',
    'quoteAuthor' => '',
    'content' => '',
])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[1fr_2fr] lg:gap-20">

            {{-- The facts rail. Everything a visitor scanning for fit needs
                 before they commit to reading the story beside it. --}}
            <aside data-reveal>
                <dl class="flex flex-col border-t border-line">
                    <div class="border-b border-line py-5">
                        <dt class="text-base text-muted sm:text-sm">Role</dt>
                        <dd class="mt-1 text-base font-medium text-ink sm:text-sm">{{ $role }}</dd>
                    </div>
                    <div class="border-b border-line py-5">
                        <dt class="text-base text-muted sm:text-sm">Duration</dt>
                        <dd class="mt-1 text-base font-medium text-ink tabular-nums sm:text-sm">{{ $duration }}</dd>
                    </div>
                    <div class="border-b border-line py-5">
                        <dt class="text-base text-muted sm:text-sm">Year</dt>
                        <dd class="mt-1 text-base font-medium text-ink tabular-nums sm:text-sm">{{ $year }}</dd>
                    </div>
                    <div class="border-b border-line py-5">
                        <dt class="text-base text-muted sm:text-sm">Outcome</dt>
                        <dd class="mt-1 text-base text-pretty text-ink sm:text-sm">{{ $outcome }}</dd>
                    </div>
                </dl>
            </aside>

            <div data-reveal>
                <div class="prose max-w-[68ch]">{!! $content !!}</div>

                @if ($quote)
                <figure class="mt-14 border-t border-line pt-10">
                    <blockquote class="display-sub max-w-[36ch] font-display font-semibold text-balance text-ink">{{ $quote }}</blockquote>
                    <figcaption class="mt-5 text-base text-muted sm:text-sm">{{ $quoteAuthor }}</figcaption>
                </figure>
                @endif
            </div>

        </div>
    </div>
</section>
