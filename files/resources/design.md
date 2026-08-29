# Harlow — design system

The design brief for this site. The AI reads this before editing anything, so
a change made here changes how everything after it gets designed.

## Atmosphere

One designer's personal site, not a studio landing page. The work is the
argument, so the interface gets out of its way: white paper, a lot of air,
hairline rules instead of boxes, and a single electric lime that only ever
marks the next thing to do.

Quiet, confident, expensive. Closer to a well-printed portfolio book than to
a SaaS marketing site. Nothing on the page should feel like it is trying to
convert you.

## Colours

Every value lives once, in the `@theme` block in `resources/css/site.css`.
Markup uses the token utilities — `bg-canvas`, `text-ink`, `border-line` —
and never writes a hex.

| Token | Hex | Role |
|---|---|---|
| `canvas` | `#ffffff` | The paper. The default ground everywhere. |
| `surface` | `#f6f6f3` | The one recessed plane — services band, thumbnails, chips. |
| `ink` | `#131311` | All primary type, and the inverted closing panel. |
| `muted` | `#6a6a63` | Supporting type and metadata. Clears AA on both neutrals. |
| `line` | `#e7e6e0` | The single hairline weight in the design. |
| `accent` | `#c7f04b` | The lime. A spice, never a base. |
| `accent-ink` | `#1c2b06` | The only type allowed to sit on the lime. |
| `accent-deep` | `#b4de36` | The lime's hover state. |
| `ink-soft` | `#262622` | The ink button's hover, and raised areas on the dark panel. |
| `ink-muted` | `#9d9d94` | Supporting type on the dark panel. |

**The lime is rationed.** It is allowed on: the nav button, the avatar ring, the
work-card arrow, the writing-row hover rule, the status dot, and the closing
panel's button. It appears nowhere else. It has almost no contrast against
white, so it must never carry text or a thin edge on canvas.

## Typography

- **Display** — Bricolage Grotesque 600, for every heading. Tight: tracking
  runs from `-0.024em` down to `-0.04em` as the size grows.
- **Body** — Inter 400/500/600, with `cv02 cv03 cv04 cv11 ss01` on.
- Three fluid display steps, defined once in `site.css`: `.display-hero`
  (2.75→4.75rem), `.display-section` (1.875→3rem), `.display-sub`
  (1.375→1.75rem). Use the class, not a stack of `text-*` breakpoints.
- Body is `text-lg` on paper, `text-base` on mobile, never below `text-sm`
  and never `text-sm` without a `sm:` prefix.
- Measures are capped per element with `max-w-[*ch]` — never on a wrapper.
- `text-balance` on headings, `text-pretty` on paragraphs.

## Spacing and radius

- Container: `max-w-6xl` with `px-6 lg:px-8`. Every section uses it, so the
  content edges line up as you scroll.
- Section rhythm: `py-20 sm:py-28 lg:py-32`. Hold it. Uneven vertical rhythm
  is the fastest way to make this design look cheap.
- Radii scale with the viewport: `rounded-[min(2.5vw,28px)]` on media,
  `rounded-[min(4vw,40px)]` on the closing panel, `rounded-full` on every
  pill. Never a fixed `rounded-2xl` on a large surface.

## Components

- **Separation is the lightest thing that works**: whitespace first, then a
  hairline, then a recessed `surface` well. Cards are reserved for things
  that are independently clickable — a project, and nothing else.
- **Buttons**: one solid ink pill per page as the primary. Everything else is
  an underlined text link with `decoration-line` that darkens on hover. The
  lime pill is the nav's and the closing panel's action only.
- **Every interactive element** has `hover`, and a real
  `focus-visible:outline-2 focus-visible:outline-offset-2 outline-ink` ring.
- **Icons** are drawn inline SVG at their native viewBox size, `fill-current`,
  `shrink-0`. Never an emoji, never a scaled icon.
- **Photographs** get `outline-1 -outline-offset-1 outline-black/5`, never a
  border, and live in an `overflow-hidden` frame that owns the radius.

## Motion

One system, defined in `site.css`. `[data-reveal]` fades and rises 12px on an
exponential ease-out as it enters; `.stagger` on a parent sequences its
children. Everything is gated behind the `.js` class so nothing is hidden
without JavaScript, and `prefers-reduced-motion: reduce` resolves every
reveal to its finished state, parks the marquee, and drops the hover drifts.

The signature is **the ring**: the hero avatar wears a lime arc over roughly
half its circumference, blending into the hairline for the rest. It is static
— a turning arc at 44px reads as a loading spinner. It is the only decorative
use of the accent on the page, and there is no second one.

## Voice

First person. Quiet confidence. Concrete nouns, short sentences, real
numbers. Say what a thing cost and how long it took.

Never: "passionate about", "we believe", "solutions", "seamless",
"cutting-edge", exclamation marks, or a heading that could sit on any other
site. Headings take a period; list items do not.

## Anti-patterns

- Three equal cards as the answer to a section.
- A centred stack of sections with no asymmetry or full-bleed anywhere.
- A decorative eyebrow above a heading that only restates it.
- Lime used as a background for large areas, or as type on white.
- Heavy shadows, glass, gradients on text, or a coloured left border.
- Any raw hex, `bg-zinc-*`, `text-white` or `text-black` in a section file.

## Tokens

```css
@theme {
    --color-canvas: #ffffff;
    --color-surface: #f6f6f3;
    --color-ink: #131311;
    --color-muted: #6a6a63;
    --color-line: #e7e6e0;
    --color-accent: #c7f04b;
    --color-accent-ink: #1c2b06;
    --color-accent-deep: #b4de36;
    --color-ink-soft: #262622;
    --color-ink-muted: #9d9d94;

    --font-display: "Bricolage Grotesque", "Helvetica Neue", sans-serif;
    --font-sans: "Inter", ui-sans-serif, system-ui, -apple-system, sans-serif;
    --font-sans--font-feature-settings: "cv02", "cv03", "cv04", "cv11", "ss01";

    --ease-spring: cubic-bezier(0.16, 1, 0.3, 1);
}
```
