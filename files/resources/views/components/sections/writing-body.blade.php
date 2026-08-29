@props([
    'content' => '',
    'nextLabel' => 'Next up',
    'nextTitle' => '',
    'nextLink' => '',
])
<!--
    The article body: the entry's stored HTML inside the prose styles, then
    the next-post pointer. Both values are bound from the matched entry.
-->
<section class="pt-10 pb-16 sm:pt-12 sm:pb-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <div class="prose mx-auto max-w-[46rem]">{!! $content !!}</div>

        <div class="mx-auto mt-16 max-w-[46rem] border-t border-line pt-8 sm:mt-24">
            <p class="font-mono text-xs tracking-wide text-faint">{{ $nextLabel }}</p>
            <a href="{{ $nextLink }}" class="group mt-4 flex items-baseline justify-between gap-6">
                <span class="font-display text-2xl font-medium tracking-tight text-ink sm:text-3xl">{{ $nextTitle }}</span>
                <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current text-muted transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
</section>
