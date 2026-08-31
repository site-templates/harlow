@props([
    'navigation' => [],
    'socials' => [],
    'signoff' => 'Designing quietly from Copenhagen. Open to one new project each quarter.',
    'colophon' => 'Set in Bricolage Grotesque and Inter. Built to load fast and stay out of the way.',
])
{{-- Paper, not another dark band — the CTA panel above is the only inverted
     plane on the page. Columns come from resources/data/site.json. --}}
<footer class="border-t border-line">
    <div class="mx-auto w-full max-w-6xl px-6 py-16 lg:px-8 lg:py-20">

        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr]">

            <div class="max-w-[46ch]">
                <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 rounded-sm focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                    <x-mark size="size-6 text-ink" />
                    <span class="font-display text-base font-semibold tracking-tight text-ink">{{ $site->name }}</span>
                </a>
                <p class="mt-5 text-base text-pretty text-muted sm:text-sm">{{ $signoff }}</p>
            </div>

            <div>
                <h2 class="text-sm font-medium text-ink">Pages</h2>
                <ul role="list" class="mt-4 flex flex-col gap-3">
                    @foreach ($navigation as $item)
                    <li class="text-base sm:text-sm">
                        <a href="{{ $item->url }}" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $item->text }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h2 class="text-sm font-medium text-ink">Elsewhere</h2>
                <ul role="list" class="mt-4 flex flex-col gap-3">
                    @foreach ($socials as $social)
                    <li class="text-base sm:text-sm">
                        <a href="{{ $social->url }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                            <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current" aria-hidden="true">
                                @if ($social->platform == 'x')
                                <path d="M12.36 1.5h2.3l-5.02 5.74L15.5 14.5h-4.6l-3.6-4.71-4.13 4.71H.86l5.37-6.14L.66 1.5h4.72l3.26 4.3ZM11.55 13.13h1.27L4.7 2.8H3.34Z"/>
                                @endif
                                @if ($social->platform == 'instagram')
                                <path d="M8 1.44c2.14 0 2.39.01 3.23.05.78.03 1.2.16 1.49.27.37.14.64.32.92.6.28.28.46.55.6.92.11.29.24.71.27 1.49.04.84.05 1.09.05 3.23s-.01 2.39-.05 3.23c-.03.78-.16 1.2-.27 1.49-.14.37-.32.64-.6.92-.28.28-.55.46-.92.6-.29.11-.71.24-1.49.27-.84.04-1.09.05-3.23.05s-2.39-.01-3.23-.05c-.78-.03-1.2-.16-1.49-.27-.37-.14-.64-.32-.92-.6a2.5 2.5 0 0 1-.6-.92c-.11-.29-.24-.71-.27-1.49C1.45 10.39 1.44 10.14 1.44 8s.01-2.39.05-3.23c.03-.78.16-1.2.27-1.49.14-.37.32-.64.6-.92.28-.28.55-.46.92-.6.29-.11.71-.24 1.49-.27.84-.04 1.09-.05 3.23-.05Zm0 3.18a3.38 3.38 0 1 0 0 6.76 3.38 3.38 0 0 0 0-6.76Zm0 5.57a2.19 2.19 0 1 1 0-4.38 2.19 2.19 0 0 1 0 4.38Zm4.31-5.7a.79.79 0 1 1-1.58 0 .79.79 0 0 1 1.58 0Z"/>
                                @endif
                                @if ($social->platform == 'linkedin')
                                <path d="M3.6 14.5H.86V5.66H3.6ZM2.23 4.45a1.59 1.59 0 1 1 0-3.18 1.59 1.59 0 0 1 0 3.18ZM15.14 14.5h-2.73V10.2c0-1.02-.02-2.34-1.43-2.34-1.43 0-1.65 1.12-1.65 2.27v4.37H6.6V5.66h2.62V6.87h.04c.36-.69 1.26-1.42 2.59-1.42 2.77 0 3.29 1.82 3.29 4.2Z"/>
                                @endif
                                @if ($social->platform == 'github')
                                <path d="M8 .8a7.2 7.2 0 0 0-2.28 14.03c.36.07.49-.16.49-.35v-1.23c-2 .44-2.43-.96-2.43-.96-.33-.83-.8-1.06-.8-1.06-.65-.45.05-.44.05-.44.72.05 1.1.74 1.1.74.64 1.1 1.69.78 2.1.6.06-.47.25-.79.45-.97-1.6-.18-3.28-.8-3.28-3.56 0-.79.28-1.43.74-1.93-.07-.19-.32-.92.07-1.91 0 0 .61-.2 2 .74a6.9 6.9 0 0 1 3.64 0c1.39-.94 2-.74 2-.74.39.99.14 1.72.07 1.91.46.5.74 1.14.74 1.93 0 2.77-1.69 3.38-3.29 3.55.26.22.49.67.49 1.35v2c0 .2.13.43.49.36A7.2 7.2 0 0 0 8 .8Z"/>
                                @endif
                                @if ($social->platform == 'dribbble')
                                <path d="M8 .8a7.2 7.2 0 1 0 0 14.4A7.2 7.2 0 0 0 8 .8Zm4.76 3.32a6.1 6.1 0 0 1 1.39 3.81 14.4 14.4 0 0 0-4.28-.2 22 22 0 0 0-.6-1.35 8.3 8.3 0 0 0 3.49-2.26ZM8 1.86c1.4 0 2.68.5 3.68 1.34a7 7 0 0 1-3.14 1.98A32 32 0 0 0 6.3 2.09 6.2 6.2 0 0 1 8 1.86ZM5.13 2.53a38 38 0 0 1 2.23 3.05 22 22 0 0 1-5.32.7 6.16 6.16 0 0 1 3.09-3.75ZM1.87 7.7v-.19a24 24 0 0 0 6.02-.86q.28.55.53 1.1A9.4 9.4 0 0 0 3.7 12.1 6.1 6.1 0 0 1 1.87 7.7Zm2.65 5.1a8.3 8.3 0 0 1 4.35-3.9 25.6 25.6 0 0 1 1.32 4.7 6.14 6.14 0 0 1-5.67-.8Zm6.72.22a27 27 0 0 0-1.2-4.42 12.9 12.9 0 0 1 3.76.25 6.14 6.14 0 0 1-2.56 4.17Z"/>
                                @endif
                                @if ($social->platform == 'email')
                                <path d="M1.5 3.75c0-.69.56-1.25 1.25-1.25h10.5c.69 0 1.25.56 1.25 1.25v8.5c0 .69-.56 1.25-1.25 1.25H2.75c-.69 0-1.25-.56-1.25-1.25Zm1.5.42v.34l5 3.13 5-3.13v-.34ZM13 5.92l-4.6 2.88a.75.75 0 0 1-.8 0L3 5.92v5.83h10Z"/>
                                @endif
                            </svg>
                            {{ $social->label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

        <div class="mt-16 flex flex-col gap-4 border-t border-line pt-8 sm:flex-row sm:items-center sm:justify-between">
            <p class="max-w-[60ch] text-base text-pretty text-muted sm:text-sm">{{ $colophon }}</p>
            <p class="text-base text-muted sm:text-sm">© {{ $site->name }}</p>
        </div>

    </div>
</footer>
