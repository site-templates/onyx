@props([
    'location' => 'London, UK',
    'showTime' => '1',
    'copyright' => 'All rights reserved.',
])
<!--
    The footer: the gem-cut mark linking home, the copyright line, the
    persona's location with a live local-time clock, and text social links.
-->
<footer class="border-t border-line">
    <div class="mx-auto flex w-full max-w-[100rem] flex-wrap items-center justify-between gap-x-10 gap-y-6 px-5 py-10 sm:px-8 lg:px-10">
        <a href="/" aria-label="Homepage" class="inline-flex items-center gap-3 text-ink">
            <svg viewBox="0 0 32 32" class="size-6" aria-hidden="true"><circle cx="16" cy="16" r="14" fill="none" stroke="currentColor" stroke-width="2.75"/><path fill="currentColor" d="M 24.32 12.56 L 24.32 19.44 L 19.44 24.32 L 12.56 24.32 L 7.68 19.44 L 7.68 12.56 L 12.56 7.68 L 19.44 7.68 Z"/></svg>
            <span class="text-sm font-medium">{{ $site->name }}</span>
        </a>

        <p class="font-mono text-xs text-faint">
            {{ $location }}
            @if ($showTime)
            <span class="js-only">· <span data-local-time class="tabular-nums">00:00</span></span>
            @endif
        </p>

        <ul role="list" class="flex items-center gap-6">
            @foreach ($site->socials as $item)
            <li>
                <a href="{{ $item->url }}" class="text-sm font-normal text-muted hover:text-ink">{{ $item->label }}</a>
            </li>
            @endforeach
        </ul>

        <p class="w-full text-center font-mono text-xs text-faint sm:w-auto sm:text-right">© {{ $site->name }}. {{ $copyright }}</p>
    </div>
</footer>
