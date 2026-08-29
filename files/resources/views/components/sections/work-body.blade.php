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
    The case-study story on one 12-column editorial grid: a mono label rail
    in the first two columns, the display lede beside it, and the supporting
    prose in the last four. Problem and solution drop onto the same column
    edges below, so the whole page reads down two clean gutters. Content
    arrives bound from the works entry.
-->
<section class="py-16 sm:pt-24 sm:pb-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 border-t border-line pt-10 lg:grid-cols-12">
            <h2 class="font-mono text-xs tracking-wide text-faint lg:col-span-2" data-reveal>{{ $overviewLabel }}</h2>
            <p class="max-w-[34ch] font-display text-2xl/9 font-medium tracking-tight text-pretty sm:text-3xl/10 lg:col-span-6" data-reveal>{{ $lede }}</p>
            <p class="max-w-[52ch] text-base/7 text-pretty text-muted lg:col-span-4" data-reveal>{{ $overview }}</p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:mt-24 lg:grid-cols-12">
            <div class="border-t border-line pt-8 lg:col-span-6 lg:col-start-3" data-reveal>
                <h2 class="font-mono text-xs tracking-wide text-faint">{{ $problemLabel }}</h2>
                <p class="mt-5 max-w-[52ch] text-base/7 text-pretty text-muted">{{ $problem }}</p>
            </div>
            <div class="border-t border-line pt-8 lg:col-span-4" data-reveal>
                <h2 class="font-mono text-xs tracking-wide text-faint">{{ $solutionLabel }}</h2>
                <p class="mt-5 max-w-[52ch] text-base/7 text-pretty text-muted">{{ $solution }}</p>
            </div>
        </div>
    </div>
</section>
