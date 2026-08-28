@props([
    'overviewLabel' => 'Overview',
    'lede' => '',
    'overview' => '',
    'problemLabel' => 'Problem',
    'problem' => '',
    'solutionLabel' => 'Solution',
    'solution' => '',
])
<!--
    The case-study story: an overview with its display lede, then problem
    and solution side by side. Content arrives bound from the works entry.
-->
<section class="py-12 sm:py-20">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <div class="flex flex-wrap gap-x-16 gap-y-8 border-t border-line pt-10">
            <h2 class="w-32 shrink-0 font-mono text-xs tracking-wide text-faint" data-reveal>{{ $overviewLabel }}</h2>
            <div class="min-w-0 max-w-[62ch]">
                <p class="font-display text-2xl/9 font-medium tracking-tight text-pretty sm:text-3xl/10" data-reveal>{{ $lede }}</p>
                <p class="mt-6 text-base/7 text-pretty text-muted" data-reveal>{{ $overview }}</p>
            </div>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-x-6 gap-y-10 sm:mt-20 sm:grid-cols-2">
            <div class="border-t border-line pt-8" data-reveal>
                <h2 class="font-mono text-xs tracking-wide text-faint">{{ $problemLabel }}</h2>
                <p class="mt-5 max-w-[52ch] text-base/7 text-pretty text-muted">{{ $problem }}</p>
            </div>
            <div class="border-t border-line pt-8" data-reveal>
                <h2 class="font-mono text-xs tracking-wide text-faint">{{ $solutionLabel }}</h2>
                <p class="mt-5 max-w-[52ch] text-base/7 text-pretty text-muted">{{ $solution }}</p>
            </div>
        </div>
    </div>
</section>
