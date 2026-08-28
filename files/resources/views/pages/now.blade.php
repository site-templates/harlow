<x-layouts.main title="Now" description="What Mira Halden is working on, reading and thinking about at the moment, and when the next project slot opens." current="/now">
    <x-sections.page-header
        meta="Updated 14 February 2026"
        heading="What I am doing at the moment."
        intro="A standing answer to the question, kept current so I do not have to write it four times a month." />
    <x-sections.now-list :items="$now" />
    <x-sections.cta />
</x-layouts.main>
