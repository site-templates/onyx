@props([
    'avatar' => '/images/avatar.jpg',
    'showStatus' => '1',
    'email' => 'hello@miloashe.studio',
    'eyebrow' => 'Available for new work',
    'heading' => 'Designer and Builder',
    'intro' => 'I inject personality into pixels, designing digital experiences that connect and feel human. Based in London.',
    'showScroll' => '1',
    'scrollText' => 'Scroll to explore',
])
<!--
    The opening viewport: identity row pinned to the top (avatar with the
    green live dot, name and mono email, stacked social icons on the right),
    then the statement block anchored low: a mono availability eyebrow, the
    giant display headline, and a bottom rail carrying the intro copy and
    the spinning scroll ring.
-->
<section id="top" class="relative">
    <div class="mx-auto flex min-h-[84svh] w-full max-w-[100rem] flex-col justify-between gap-16 px-5 pt-6 pb-12 sm:px-8 sm:pt-8 sm:pb-16 lg:px-10">

        <div class="flex items-start justify-between gap-6">
            <div class="flex items-center gap-4">
                <span class="relative inline-flex shrink-0">
                    <img src="{{ $avatar }}" alt="" width="48" height="48" class="size-12 rounded-full object-cover outline-1 -outline-offset-1 outline-ink/10">
                    @if ($showStatus)
                    <span class="absolute right-0 bottom-0 size-3 rounded-full bg-live ring-2 ring-canvas"></span>
                    @endif
                </span>
                <span class="flex min-w-0 flex-col gap-1">
                    <span class="block text-sm font-medium text-ink">{{ $site->name }}</span>
                    <span class="block font-mono text-xs text-muted"><a href="mailto:{{ $email }}" class="hover:text-ink">{{ $email }}</a></span>
                </span>
            </div>

            <ul role="list" class="flex flex-col items-end gap-5 pt-1">
                @foreach ($site->socials as $item)
                <li>
                    <a href="{{ $item->url }}" aria-label="{{ $item->label }}" class="relative text-muted hover:text-ink">
                        @if ($item->icon == 'x')
                        <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231Zm-1.161 17.52h1.833L7.084 4.126H5.117Z"/></svg>
                        @endif
                        @if ($item->icon == 'twitter')
                        <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true"><path d="M23 4.9c-.8.4-1.7.6-2.6.8a4.5 4.5 0 0 0 2-2.5c-.9.5-1.9.9-2.9 1.1a4.5 4.5 0 0 0-7.7 4.1A12.8 12.8 0 0 1 2.5 3.7a4.5 4.5 0 0 0 1.4 6 4.4 4.4 0 0 1-2-.5v.1a4.5 4.5 0 0 0 3.6 4.4 4.6 4.6 0 0 1-2 .1 4.5 4.5 0 0 0 4.2 3.1A9 9 0 0 1 1 18.7a12.7 12.7 0 0 0 6.9 2c8.3 0 12.8-6.8 12.8-12.8v-.6c.9-.6 1.6-1.4 2.2-2.4Z"/></svg>
                        @endif
                        @if ($item->icon == 'dribbble')
                        <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm6.6 4.6a8.5 8.5 0 0 1 1.9 5.3c-.3-.1-3-.6-5.7-.3l-.5-1.1-.5-1c3-1.2 4.4-2.9 4.8-2.9ZM12 3.5c2.2 0 4.1.8 5.6 2.1-.3.4-1.5 2-4.4 3.1A30.3 30.3 0 0 0 9.9 3.8c.7-.2 1.4-.3 2.1-.3ZM8.2 4.4a36 36 0 0 1 3.3 4.8A34 34 0 0 1 3.7 10a8.6 8.6 0 0 1 4.5-5.6ZM3.5 12v-.3c.4 0 4.8.1 9-1.2l.9 1.8a13.7 13.7 0 0 0-6.9 6A8.5 8.5 0 0 1 3.5 12Zm8.5 8.5a8.5 8.5 0 0 1-5.2-1.8c.2-.5 1.7-3.4 6.4-5.4 1.2 3.1 1.7 5.7 1.8 6.4-1 .5-1.9.8-3 .8Zm4.5-1.5c-.1-.6-.5-3-1.6-6 2.5-.4 4.8.3 5 .4a8.6 8.6 0 0 1-3.4 5.6Z" clip-rule="evenodd"/></svg>
                        @endif
                        @if ($item->icon == 'instagram')
                        <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2a3.9 3.9 0 0 1-2.3 2.3c-.4.2-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4a3.9 3.9 0 0 1-2.3-2.3c-.2-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4 1.2-.1 1.6-.1 4.8-.1Zm0 1.8c-3.1 0-3.5 0-4.7.1-1.1.1-1.7.2-2.1.4-.5.2-.9.4-1.2.8-.4.3-.6.7-.8 1.2-.2.4-.3 1-.4 2.1-.1 1.2-.1 1.6-.1 4.7s0 3.5.1 4.7c.1 1.1.2 1.7.4 2.1.2.5.4.9.8 1.2.3.4.7.6 1.2.8.4.2 1 .3 2.1.4 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c1.1-.1 1.7-.2 2.1-.4.5-.2.9-.4 1.2-.8.4-.3.6-.7.8-1.2.2-.4.3-1 .4-2.1.1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c-.1-1.1-.2-1.7-.4-2.1a2.6 2.6 0 0 0-.8-1.2 2.6 2.6 0 0 0-1.2-.8c-.4-.2-1-.3-2.1-.4-1.2-.1-1.6-.1-4.7-.1Zm0 3a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8a3.2 3.2 0 1 0 0 6.4 3.2 3.2 0 0 0 0-6.4Zm5.2-3.1a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4Z"/></svg>
                        @endif
                        @if ($item->icon == 'linkedin')
                        <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true"><path d="M20.4 3H3.6C2.7 3 2 3.7 2 4.6v14.8c0 .9.7 1.6 1.6 1.6h16.8c.9 0 1.6-.7 1.6-1.6V4.6c0-.9-.7-1.6-1.6-1.6ZM8 18.2H5.3V9.7H8v8.5ZM6.6 8.5a1.6 1.6 0 1 1 0-3.1 1.6 1.6 0 0 1 0 3.1Zm11.6 9.7h-2.6v-4.1c0-1 0-2.3-1.4-2.3s-1.6 1.1-1.6 2.2v4.2H10V9.7h2.5v1.2h.1c.3-.7 1.2-1.4 2.5-1.4 2.7 0 3.2 1.8 3.2 4v4.7Z"/></svg>
                        @endif
                        @if ($item->icon == 'github')
                        <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M12 2a10 10 0 0 0-3.2 19.5c.5.1.7-.2.7-.5v-1.7C6.7 19.9 6.1 18 6.1 18c-.4-1.2-1.1-1.5-1.1-1.5-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.6 2.4 1.1 3 .9.1-.7.4-1.1.6-1.4-2.2-.3-4.6-1.1-4.6-5 0-1.1.4-2 1-2.7 0-.3-.4-1.3.1-2.7 0 0 .9-.3 2.8 1a9.5 9.5 0 0 1 5 0c1.9-1.3 2.8-1 2.8-1 .5 1.4.2 2.4.1 2.7.6.7 1 1.6 1 2.7 0 3.9-2.4 4.7-4.6 5 .4.3.7.9.7 1.9v2.8c0 .3.2.6.7.5A10 10 0 0 0 12 2Z" clip-rule="evenodd"/></svg>
                        @endif
                        <span class="absolute top-1/2 left-1/2 size-[max(100%,3rem)] -translate-1/2 pointer-fine:hidden" aria-hidden="true"></span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        <div>
            @if ($eyebrow)
            <p class="font-mono text-xs tracking-wide text-faint" data-reveal>{{ $eyebrow }}</p>
            @endif

            <h1 class="mt-6 font-display text-[clamp(2.75rem,8vw,7.0625rem)]/[1.05] font-medium tracking-tight text-balance sm:mt-8" data-reveal>{{ $heading }}</h1>

            <div class="mt-8 flex flex-wrap items-end justify-between gap-x-16 gap-y-10 sm:mt-10">
                <p class="max-w-[56ch] text-xl/8 text-pretty text-muted sm:text-2xl/9" data-reveal>{{ $intro }}</p>

                @if ($showScroll)
                <a href="#works" class="group flex items-center gap-4 text-muted hover:text-ink" data-reveal>
                    <span class="font-mono text-xs tracking-wide">{{ $scrollText }}</span>
                    <span class="relative inline-flex size-11 items-center justify-center">
                        <svg viewBox="0 0 44 44" class="scroll-ring absolute inset-0 size-11" aria-hidden="true"><circle cx="22" cy="22" r="21" fill="none" stroke="currentColor" stroke-opacity="0.35" stroke-dasharray="3 5"/></svg>
                        <svg viewBox="0 0 16 16" class="size-4 fill-current transition-transform duration-200 group-hover:translate-y-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M8 2a.75.75 0 0 1 .75.75v8.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.22 3.22V2.75A.75.75 0 0 1 8 2Z" clip-rule="evenodd"/></svg>
                    </span>
                </a>
                @endif
            </div>
        </div>

    </div>
</section>
