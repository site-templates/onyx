@props([
    'backText' => 'Back to homepage',
    'backUrl' => '/',
    'label' => '',
    'heading' => 'Page',
    'body' => '',
])
<!--
    A simple page opener for secondary pages: back link, mono label,
    display heading, and an optional standfirst.
-->
<section class="pt-8 sm:pt-10">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <a href="{{ $backUrl }}" class="group inline-flex items-center gap-2 font-mono text-xs text-muted hover:text-ink">
            <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current transition-transform duration-200 group-hover:-translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/></svg>
            {{ $backText }}
        </a>

        <div class="mt-14 sm:mt-20">
            @if ($label)
            <p class="font-mono text-xs tracking-wide text-faint">{{ $label }}</p>
            @endif
            <h1 class="mt-5 max-w-[20ch] font-display text-5xl font-medium tracking-tight text-balance sm:text-7xl">{{ $heading }}</h1>
            @if ($body)
            <p class="mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            @endif
        </div>
    </div>
</section>
