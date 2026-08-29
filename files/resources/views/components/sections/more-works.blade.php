@props([
    'label' => 'You might also like',
    'skip' => '',
])
<!--
    The other projects, as smaller versions of the home cards. The skip
    attribute carries the current entry's slug so it never lists itself;
    the cards come from the global works collection.
-->
<section class="border-t border-line py-16 sm:py-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <h2 class="font-mono text-xs tracking-wide text-faint" data-reveal>{{ $label }}</h2>

        <ul role="list" class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-3">
            @foreach ($works as $item)
            @if ($item->slug != $skip)
            <li data-reveal>
                <a href="{{ $item->link }}" class="group relative block overflow-hidden rounded-2xl bg-well">
                    <img src="{{ $item->image }}" alt="{{ $item->imageAlt }}" width="1600" height="1062" class="aspect-6/5 w-full object-cover transition-transform duration-500 ease-out group-hover:scale-103">
                    <span class="absolute bottom-4 left-4 inline-flex rounded-full bg-surface/95 px-4 py-2 text-sm font-medium text-ink">{{ $item->title }}</span>
                </a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</section>
