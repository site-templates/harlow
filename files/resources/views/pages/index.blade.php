<x-layouts.main title="Home" description="Mira Halden is an independent brand and product designer in Copenhagen, working with small teams on identity, product and the websites in between." current="/">
    <x-sections.hero />
    <x-sections.marquee :items="$clients" />
    <x-sections.work-rows :items="$projects" />
    <x-sections.writing-list :items="$writings" />
    <x-sections.services :items="$services" />
    <x-sections.process :items="$process" />
    <x-sections.cta />
</x-layouts.main>
