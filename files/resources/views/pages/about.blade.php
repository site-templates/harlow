<x-layouts.main title="About" description="Eleven years of design practice — in-house, in a studio, and independent. How I work, what it costs, and how long it takes." current="/about">
    <x-sections.page-header
        heading="I am Mira. I design things that have to hold up."
        intro="Independent since 2022, in Copenhagen, working with founders and small teams who would rather have one considered answer than three safe ones." />
    <x-sections.about-intro />
    <x-sections.experience-list :items="$experience" />
    <x-sections.faq :items="$faq" />
    <x-sections.cta />
</x-layouts.main>
