@props([
    'label' => 'Experience',
    'showCv' => '1',
    'cvText' => 'Download CV',
    'cvUrl' => '#',
])
<!--
    The experience ledger: hairline rows of years, role, and company from
    the experience collection, with an optional bordered CV pill below.
-->
<section id="experience" class="border-t border-line py-16 sm:py-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <h2 class="font-mono text-xs tracking-wide text-faint" data-reveal>{{ $label }}</h2>

        <ul role="list" class="mt-10 border-t border-line">
            @foreach ($experience as $item)
            <li class="flex flex-wrap items-baseline gap-x-8 gap-y-1 border-b border-line py-5 sm:flex-nowrap sm:py-6" data-reveal>
                <span class="w-full shrink-0 font-mono text-xs text-faint tabular-nums sm:w-32">{{ $item->from }} — {{ $item->to }}</span>
                <span class="min-w-0 grow font-display text-lg font-medium tracking-tight text-ink sm:text-xl">{{ $item->role }}</span>
                <span class="shrink-0 text-base text-muted sm:text-sm">{{ $item->company }}</span>
            </li>
            @endforeach
        </ul>

        @if ($showCv)
        <div class="mt-10" data-reveal>
            <a href="{{ $cvUrl }}" class="inline-flex items-center rounded-full border border-ink/15 px-5 py-2.5 text-sm font-medium text-ink hover:border-ink/40 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $cvText }}</a>
        </div>
        @endif
    </div>
</section>
