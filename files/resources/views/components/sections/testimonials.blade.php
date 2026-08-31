@props([
    'label' => 'Testimonials',
    'showLink' => '1',
    'linkText' => 'Read on LinkedIn',
    'linkUrl' => 'https://linkedin.com',
])
<!--
    Three columns of quotes from the testimonials collection — hanging
    punctuation on the quote, attribution bottom-aligned across the row —
    with an optional LinkedIn link beside the section label.
-->
<section id="testimonials" class="border-t border-line py-16 sm:py-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <div class="flex items-baseline justify-between gap-6" data-reveal>
            <h2 class="font-mono text-xs tracking-wide text-faint">{{ $label }}</h2>
            @if ($showLink)
            <a href="{{ $linkUrl }}" target="_blank" rel="noopener" class="group inline-flex items-center gap-2 text-sm font-medium text-muted hover:text-ink">
                {{ $linkText }}
                <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
            </a>
            @endif
        </div>

        <ul role="list" class="mt-10 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-3">
            @foreach ($testimonials as $item)
            <li class="flex flex-col justify-between gap-8" data-reveal>
                <blockquote class="relative max-w-[36ch] font-display text-xl/8 font-medium tracking-tight text-pretty text-ink before:absolute before:inline before:-translate-x-full before:content-['\201C'] after:inline after:content-['\201D']">{{ $item->quote }}</blockquote>
                <div class="flex items-center gap-3">
                    <img src="{{ $item->avatar }}" alt="" width="40" height="40" class="size-10 rounded-full object-cover outline-1 -outline-offset-1 outline-ink/10">
                    <div class="text-base sm:text-sm">
                        <p class="font-medium text-ink">{{ $item->name }}</p>
                        <p class="text-muted">{{ $item->role }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
