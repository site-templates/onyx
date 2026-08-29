@props([
    'label' => 'Writing',
    'showDescriptions' => '0',
    'showAll' => '1',
    'allText' => 'All writings',
    'allUrl' => '/writings',
])
<!--
    The writings ledger: a mono section label, then hairline rows of
    date, display-face title, and read time, each row one anchor with an
    arrow that slides out on hover. The archive page reuses this component
    with descriptions switched on and the all-writings link switched off.
-->
<section id="writing" class="py-16 sm:py-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <div class="flex items-baseline justify-between gap-6" data-reveal>
            <h2 class="font-mono text-xs tracking-wide text-faint">{{ $label }}</h2>
            @if ($showAll)
            <a href="{{ $allUrl }}" class="group inline-flex items-center gap-2 text-sm font-medium text-muted hover:text-ink">
                {{ $allText }}
                <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
            </a>
            @endif
        </div>

        <ul role="list" class="mt-10 border-t border-line">
            @foreach ($writings as $item)
            <li class="border-b border-line" data-reveal>
                <a href="{{ $item->link }}" class="group flex flex-wrap items-baseline gap-x-8 gap-y-2 py-6 sm:flex-nowrap sm:py-7">
                    <span class="w-full shrink-0 font-mono text-xs text-faint tabular-nums sm:w-32">{{ $item->dateFormatted }}</span>
                    <span class="min-w-0 grow">
                        <span class="block font-display text-xl font-medium tracking-tight text-ink sm:text-2xl">{{ $item->title }}</span>
                        @if ($showDescriptions)
                        <span class="mt-2 block max-w-[64ch] text-base text-pretty text-muted">{{ $item->description }}</span>
                        @endif
                    </span>
                    <span class="flex shrink-0 items-center gap-3 font-mono text-xs text-faint">
                        {{ $item->readTime }}
                        <svg viewBox="0 0 16 16" class="size-4 fill-current text-muted transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
                    </span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
