<x-layouts.main :title="$writings->title" :description="$writings->description">
    <x-sections.writing-header :title="$writings->title" :dateFormatted="$writings->dateFormatted" :readTime="$writings->readTime"/>
    <x-sections.writing-body :content="$writings->content" :nextTitle="$writings->nextTitle" :nextLink="$writings->nextLink"/>
    <x-sections.contact-cta/>
</x-layouts.main>
