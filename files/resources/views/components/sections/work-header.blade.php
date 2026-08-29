@props([
    'backText' => 'Back to homepage',
    'backUrl' => '/',
    'title' => 'Project',
    'tagline' => '',
    'yearLabel' => 'Year:',
    'year' => '',
    'timeframeLabel' => 'Timeframe:',
    'timeframe' => '',
    'toolsLabel' => 'Tools:',
    'tools' => '',
    'categoryLabel' => 'Category:',
    'category' => '',
    'image' => '',
    'imageAlt' => '',
])
<!--
    The case-study opener: back link, display title and tagline, the
    four-column mono meta strip, and the full-width hero image. Content
    values arrive as bound attributes from the matched works entry.
-->
<section class="pt-8 sm:pt-10">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <a href="{{ $backUrl }}" class="group inline-flex items-center gap-2 font-mono text-xs text-muted hover:text-ink">
            <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current transition-transform duration-200 group-hover:-translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/></svg>
            {{ $backText }}
        </a>

        <h1 class="mt-12 max-w-[20ch] font-display text-5xl font-medium tracking-tight text-balance sm:mt-16 sm:text-7xl" data-reveal>{{ $title }}</h1>
        <p class="mt-5 max-w-[44ch] text-xl/8 text-pretty text-muted sm:text-2xl/9" data-reveal>{{ $tagline }}</p>

        <dl class="mt-12 grid grid-cols-2 gap-x-6 gap-y-6 border-t border-line pt-8 sm:mt-16 lg:grid-cols-4" data-reveal>
            <div class="flex flex-col gap-2">
                <dt class="font-mono text-xs text-faint">{{ $yearLabel }}</dt>
                <dd class="text-base font-medium text-ink tabular-nums sm:text-sm">{{ $year }}</dd>
            </div>
            <div class="flex flex-col gap-2">
                <dt class="font-mono text-xs text-faint">{{ $timeframeLabel }}</dt>
                <dd class="text-base font-medium text-ink sm:text-sm">{{ $timeframe }}</dd>
            </div>
            <div class="flex flex-col gap-2">
                <dt class="font-mono text-xs text-faint">{{ $toolsLabel }}</dt>
                <dd class="text-base font-medium text-ink sm:text-sm">{{ $tools }}</dd>
            </div>
            <div class="flex flex-col gap-2">
                <dt class="font-mono text-xs text-faint">{{ $categoryLabel }}</dt>
                <dd class="text-base font-medium text-ink sm:text-sm">{{ $category }}</dd>
            </div>
        </dl>

        <div class="mt-12 overflow-hidden rounded-2xl bg-well sm:mt-16" data-reveal>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1062" class="aspect-video w-full object-cover">
        </div>
    </div>
</section>
