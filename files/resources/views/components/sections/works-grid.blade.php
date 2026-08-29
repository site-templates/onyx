@props(['label' => 'Selected works'])
<!--
    The work grid: a mono section label, then two columns of large rounded
    image cards. Hovering a card
    eases the image up to scale 1.03, raises the white ticker pill with its
    scrolling year and category strip, and shows the project-name chip. On
    touch screens both chips stay visible. Data comes from the global works
    collection; each entry's link points at its detail page.
-->
<section id="works" class="py-16 sm:py-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <h2 class="font-mono text-xs tracking-wide text-faint" data-reveal>{{ $label }}</h2>

        <ul role="list" class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
            @foreach ($works as $item)
            <li data-reveal>
                <a href="{{ $item->link }}" class="group relative block overflow-hidden rounded-2xl bg-well">
                    <img src="{{ $item->image }}" alt="{{ $item->imageAlt }}" width="1600" height="1062" class="aspect-6/5 w-full object-cover transition-transform duration-500 ease-out group-hover:scale-103">

                    <span class="absolute top-4 right-4 inline-flex w-44 max-w-[70%] overflow-hidden rounded-full bg-surface/95 py-2 opacity-100 transition-opacity duration-200 pointer-fine:opacity-0 pointer-fine:group-hover:opacity-100">
                        <span class="ticker-track font-mono text-xs text-ink">
                            <span class="px-2">{{ $item->year }}</span><span aria-hidden="true">✦</span><span class="px-2">{{ $item->category }}</span><span aria-hidden="true">✦</span><span class="px-2">{{ $item->year }}</span><span aria-hidden="true">✦</span><span class="px-2">{{ $item->category }}</span><span aria-hidden="true">✦</span>
                        </span>
                        <span aria-hidden="true" class="pointer-events-none absolute inset-y-0 left-0 w-8 rounded-l-full bg-linear-to-r from-surface to-transparent"></span>
                        <span aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 w-8 rounded-r-full bg-linear-to-l from-surface to-transparent"></span>
                    </span>

                    <span class="absolute bottom-4 left-4 inline-flex rounded-full bg-surface/95 px-4 py-2 text-sm font-medium text-ink opacity-100 transition-opacity duration-200 pointer-fine:opacity-0 pointer-fine:group-hover:opacity-100">{{ $item->title }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
