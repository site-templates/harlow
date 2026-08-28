<x-layouts.main :title="$writings->title" :description="$writings->excerpt" current="/writing">
    <x-sections.post-header
        :category="$writings->category"
        :dateFormatted="$writings->dateFormatted"
        :readTime="$writings->readTime"
        :title="$writings->title"
        :excerpt="$writings->excerpt" />
    <x-sections.post-body :content="$writings->content" />
    <x-sections.entry-nav heading="More writing" primaryText="All writing" primaryHref="/writing" secondaryText="All work" secondaryHref="/work" />
    <x-sections.cta />
</x-layouts.main>
