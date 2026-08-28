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
            <svg viewBox="0 0 32 32" class="size-6 fill-current" aria-hidden="true"><path d="M 26.31 23.91 A 13 13 0 0 1 8.09 5.69 Z"/><path d="M 5.69 8.09 A 13 13 0 0 1 23.91 26.31 Z"/></svg>
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
