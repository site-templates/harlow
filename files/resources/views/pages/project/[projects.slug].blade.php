<x-layouts.main :title="$projects->title" :description="$projects->summary" current="/work">
    <x-sections.project-hero
        :category="$projects->category"
        :discipline="$projects->discipline"
        :year="$projects->year"
        :title="$projects->title"
        :summary="$projects->summary"
        :image="$projects->image"
        :imageAlt="$projects->imageAlt" />
    <x-sections.project-body
        :role="$projects->role"
        :duration="$projects->duration"
        :year="$projects->year"
        :outcome="$projects->outcome"
        :quote="$projects->quote"
        :quoteAuthor="$projects->quoteAuthor"
        :content="$projects->content" />
    <x-sections.entry-nav heading="More work" />
    <x-sections.cta />
</x-layouts.main>
