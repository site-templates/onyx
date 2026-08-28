@props([
    'backText' => 'All writings',
    'backUrl' => '/writings',
    'title' => 'Writing',
    'dateFormatted' => '',
    'readTime' => '',
])
<!--
    The article opener: back link, mono date and read time, and the
    display title. Content values are bound from the matched entry.
-->
<section class="pt-8 sm:pt-10">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <a href="{{ $backUrl }}" class="group inline-flex items-center gap-2 font-mono text-xs text-muted hover:text-ink">
            <svg viewBox="0 0 16 16" class="size-4 fill-current transition-transform duration-200 group-hover:-translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/></svg>
            {{ $backText }}
        </a>

        <div class="mx-auto mt-14 max-w-[46rem] sm:mt-20">
            <p class="font-mono text-xs text-faint tabular-nums">{{ $dateFormatted }} · {{ $readTime }}</p>
            <h1 class="mt-5 font-display text-4xl font-medium tracking-tight text-pretty sm:text-5xl">{{ $title }}</h1>
        </div>
    </div>
</section>
