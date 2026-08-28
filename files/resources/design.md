# Onyx — design system

## Atmosphere

A Swiss-minimal personal portfolio in the mold of the best Framer designer
sites: a soft paper-gray canvas, near-black ink, one enormous statement
headline, and product imagery doing the talking. Strictly monochrome — the
single splash of color is the green "available" dot beside the avatar.
Typewriter-mono micro-labels give it a technical, considered voice. Nothing
decorates; the work and the words carry the page.

## Colors

Every color is a semantic token defined once in `resources/css/site.css`
via `@theme`. Markup only ever uses the token utilities — never a raw
`bg-zinc-*` or hex.

| Role | Token | Value |
|---|---|---|
| Page ground | `canvas` | `#f9f9fa` |
| Chips, pills, raised cards | `surface` | `#ffffff` |
| Image grounds, recessed wells | `well` | `#ececee` |
| Headings, primary text | `ink` | `#141415` |
| Secondary text | `muted` | `#656572` |
| Tertiary text, mono labels | `faint` | `#70707f` |
| Hairlines | `line` | `rgba(20,20,21,0.08)` |
| Solid pill buttons | `accent` | `#141415` |
| Text on accent | `accent-ink` | `#f9f9fa` |
| The availability dot — nothing else | `live` | `#2ecc71` |

This template is deliberately light-only: the palette IS the design. Do not
add a dark mode or introduce any new hue when editing; emphasis comes from
scale, weight, and whitespace.

## Typography

- **Display — Inter Tight** (`font-display`): the hero statement, section
  statements, project titles, writing titles. Weight 500–600,
  `tracking-tight`, line-height at or below 1.05 on the biggest sizes.
- **Body — Inter** (`font-sans`): paragraphs and UI. Intro copy runs large
  (1.25–1.5rem) and muted; body is 1rem/1.7.
- **Labels — Fragment Mono** (`font-mono`): section labels, dates, meta
  values, "Scroll to explore". `0.75rem`, `tracking-wide`; dates are
  `tabular-nums`.
- Scale: hero `clamp(3.25rem → 8.25rem)`; section statements
  `clamp(2rem → 3.5rem)`; card/list titles `1.5–1.75rem`.

## Spacing & Radius

- Wide, near-full-bleed container: `max-w-[100rem]` with `px-5 sm:px-8
  lg:px-10` — content breathes to the viewport edges like the reference.
- Section rhythm `py-16` mobile → `py-28` desktop, held everywhere.
- Radius: project images `rounded-2xl`, chips and buttons `rounded-full`,
  everything else square with hairlines.

## Components

- **Hero**: identity row pinned top (avatar with the green live dot, name +
  mono email left, stacked social icons right), then a viewport-filling
  statement — the giant display headline bottom-left, two-line intro, and a
  mono "Scroll to explore" beside a slowly spinning dashed ring bottom-right.
- **Work cards**: large `rounded-2xl` images in a 2-col grid. Hover raises a
  white marquee ticker pill (year ✦ category, scrolling) top-right and the
  white project-name chip bottom-left; the image eases to scale 1.03.
- **Writings ledger**: hairline rows — mono date · display title · read
  time, with an arrow that slides on hover.
- **About**: display statement, one paragraph, then the stacked mono
  parenthetical facts — "(8+ years of experience)" — a signature quirk.
- **Experience**: hairline ledger rows (years | role | company).
- **Buttons**: one solid `accent` pill per page ("Let's talk"); everything
  else is a bordered or ghost pill.

## Motion

One reveal system: fade + 14px rise on scroll, spring ease, staggered with
`reveal-1..4`. The card ticker marquee and the spinning scroll ring are the
only continuous motion. Everything is gated behind
`prefers-reduced-motion: reduce` and fully visible without JavaScript.

## Voice

First person, confident, short. "I inject personality into pixels." Specific
over grand; no "passionate", no exclamation marks, no emoji.

## Anti-patterns

- No new hues, gradients, or glassmorphism — monochrome plus the live dot.
- No heavy shadows; hairlines and whitespace do the separation.
- No uppercase-tracking eyebrows outside the mono label voice.
- Never center every section; the grid is left-anchored except Contact.

## Tokens

```css
@theme {
    --color-canvas: #f9f9fa;
    --color-surface: #ffffff;
    --color-well: #ececee;
    --color-ink: #141415;
    --color-muted: #656572;
    --color-faint: #70707f;
    --color-line: rgb(20 20 21 / 0.08);
    --color-accent: #141415;
    --color-accent-ink: #f9f9fa;
    --color-live: #2ecc71;
    --font-display: "Inter Tight", ui-sans-serif, system-ui, sans-serif;
    --font-sans: "Inter", ui-sans-serif, system-ui, sans-serif;
    --font-mono: "Fragment Mono", ui-monospace, monospace;
}
```
