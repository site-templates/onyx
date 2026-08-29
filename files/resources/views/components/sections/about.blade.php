@props([
    'label' => 'About',
    'headingInk' => 'Hi, I am Milo Ashe',
    'headingMuted' => 'A Digital Designer',
    'body' => 'I have spent the last nine years with startups, making sure design lifts the brand and still answers to the business. I move between branding, UX, UI, and web — and I am happiest when a product starts to feel like a person you would want to talk to.',
])
<!--
    The about statement: mono label, a two-tone display heading, one body
    paragraph, and the stacked parenthetical mono facts — the template's
    signature quirk. Facts live in site.json under the facts key.
-->
<section id="about" class="border-t border-line py-16 sm:py-28">
    <div class="mx-auto w-full max-w-[100rem] px-5 sm:px-8 lg:px-10">
        <h2 class="font-mono text-xs tracking-wide text-faint" data-reveal>{{ $label }}</h2>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-12 lg:grid-cols-12">
            <div class="min-w-0 lg:col-span-7">
                <p class="max-w-[24ch] font-display text-4xl/[1.1] font-medium tracking-tight text-balance sm:text-5xl/[1.08] lg:text-[3.5rem]/[1.06]" data-reveal>
                    {{ $headingInk }}<br>
                    <span class="text-muted">{{ $headingMuted }}</span>
                </p>
                <p class="mt-8 max-w-[52ch] text-lg/8 text-pretty text-muted" data-reveal>{{ $body }}</p>
            </div>

            <ul role="list" class="flex flex-col gap-4 lg:col-span-5 lg:col-start-8 lg:pt-3" data-reveal>
                @foreach ($site->facts as $item)
                <li class="font-mono text-sm text-muted">({{ $item->text }})</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
