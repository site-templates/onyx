@props([
    'label' => 'Contact',
    'heading' => 'I am not just here to design products; I am here to connect with people.',
    'body' => 'Say hello for a project, a question, or a very long conversation about typography.',
    'buttonText' => "Let's talk",
    'buttonUrl' => 'mailto:hello@miloashe.studio',
])
<!--
    The closing statement: the one centered section on the page, and the
    one solid accent pill on the site.
-->
<section id="contact" class="border-t border-line py-20 sm:py-32">
    <div class="mx-auto w-full max-w-[100rem] px-5 text-center sm:px-8 lg:px-10">
        <h2 class="font-mono text-xs tracking-wide text-faint" data-reveal>{{ $label }}</h2>
        <p class="mx-auto mt-8 max-w-[24ch] font-display text-4xl/[1.1] font-medium tracking-tight text-balance sm:text-5xl/[1.08]" data-reveal>{{ $heading }}</p>
        <p class="mx-auto mt-6 max-w-[48ch] text-lg text-pretty text-muted" data-reveal>{{ $body }}</p>
        <div class="mt-10" data-reveal>
            <a href="{{ $buttonUrl }}" class="inline-flex items-center rounded-full bg-accent px-7 py-3.5 text-base font-medium text-accent-ink hover:bg-ink/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $buttonText }}</a>
        </div>
    </div>
</section>
