@props([
    'location' => 'London, UK',
    'showTime' => '1',
    'copyright' => 'All rights reserved.',
])
<!--
    The footer, in two tiers: the gem-cut mark and the text social links sit
    on the first line, then a hairline and a mono legal line carrying the
    copyright and the persona's location with a live local-time clock.
-->
<footer class="border-t border-line">
    <div class="mx-auto w-full max-w-[100rem] px-5 py-12 sm:px-8 sm:py-14 lg:px-10">
        <div class="flex flex-wrap items-center justify-between gap-x-10 gap-y-6">
            <a href="/" aria-label="Homepage" class="inline-flex items-center gap-3 text-sm font-medium text-ink">
                <svg viewBox="0 0 32 32" class="size-6 shrink-0" aria-hidden="true"><circle cx="16" cy="16" r="14" fill="none" stroke="currentColor" stroke-width="2.75"/><path fill="currentColor" d="M 24.32 12.56 L 24.32 19.44 L 19.44 24.32 L 12.56 24.32 L 7.68 19.44 L 7.68 12.56 L 12.56 7.68 L 19.44 7.68 Z"/></svg>
                {{ $site->name }}
            </a>

            <ul role="list" class="flex flex-wrap items-center gap-x-6 gap-y-2 text-base sm:text-sm">
                @foreach ($site->socials as $item)
                <li>
                    <a href="{{ $item->url }}" class="font-normal text-muted hover:text-ink">{{ $item->label }}</a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-8 flex flex-wrap items-center justify-between gap-x-10 gap-y-2 border-t border-line pt-6 font-mono text-xs text-faint">
            <p>© {{ $site->name }}. {{ $copyright }}</p>
            <p>
                {{ $location }}
                @if ($showTime)
                <span class="js-only">· <span data-local-time class="tabular-nums">00:00</span></span>
                @endif
            </p>
        </div>
    </div>
</footer>
