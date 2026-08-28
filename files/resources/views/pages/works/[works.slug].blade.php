<x-layouts.main :title="$works->title" :description="$works->tagline">
    <x-sections.work-header :title="$works->title" :tagline="$works->tagline" :year="$works->year" :timeframe="$works->timeframe" :tools="$works->tools" :category="$works->category" :image="$works->image" :imageAlt="$works->imageAlt"/>
    <x-sections.work-body :lede="$works->lede" :overview="$works->overview" :problem="$works->problem" :solution="$works->solution"/>
    <x-sections.more-works :skip="$works->slug"/>
    <x-sections.contact-cta/>
</x-layouts.main>
