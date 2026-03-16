# Site Improvement TODO

Improvements and updates grouped by priority. Each item notes the benefit it brings to the site.

---

## High Priority

These items have a direct impact on SEO, performance, or fix real bugs.

### Remove Sirv CDN script and preconnects from BaseLayout
`BaseLayout.astro` still loads `sirv.nospin.js` and has four Sirv preconnect/dns-prefetch hints. The image migration removed all `sirvImage()` usage, so this external script now loads on every page for no reason.
**Benefit:** Removes a render-blocking third-party script and two unnecessary DNS lookups from every page.

### Fix `justify-starts` typo in portfolio/index.astro
`justify-starts` is not a valid Tailwind class — it should be `justify-start`. This appears three times (lines ~61, 101, 141) in the technology tag rows for Websites, Applications, and Modules sections, meaning the tags are not aligned correctly.
**Benefit:** Restores correct flex alignment on technology tag lists across all portfolio sections.

### Empty `aria-label` on Tagline portfolio link
In `Tagline.astro` line 38, the Portfolio anchor has `aria-label=""` — an empty label is worse than none, as it gives screen readers nothing to announce.
**Benefit:** Screen reader users can understand the purpose of the link.

### JSON-LD schema for Portfolio items
Blog posts have a `BlogPosting` schema and recipes have a `Recipe` schema, but portfolio items have no structured data at all. A `SoftwareApplication` or `CreativeWork` schema would allow Google to understand and surface the projects correctly.
**Benefit:** Improved search appearance for portfolio items and consistency across the site's three main content types.

### RSS feed for the blog
There is no `/rss.xml` or `/feed.xml`. Astro ships with an official `@astrojs/rss` package that requires minimal setup. A dev blog without a feed misses readers who use RSS readers (Feedly, Reeder, NetNewsWire), and some aggregators and content discovery tools rely on feeds.
**Benefit:** Expands reach to RSS-driven audiences and enables syndication to aggregator sites.

---

## Medium Priority

These items improve user experience, accessibility, content discoverability, and code quality.

### Mobile navigation accessibility
The hamburger toggle (`Header.astro` line 20) has no `aria-label`, no `aria-expanded` attribute, no focus trap while the menu is open, and no close button inside the drawer. This is a WCAG 2.1 AA failure.
**Benefit:** Keyboard and screen reader users can properly navigate and dismiss the mobile menu.

### Add breadcrumbs to portfolio item pages
Blog posts and recipes both show breadcrumb navigation, but portfolio item pages (`PortfolioLayout.astro`) have none. Users lose navigation context when arriving at a portfolio item directly.
**Benefit:** Consistent navigation and an additional internal link layer for SEO.

### Fix hardcoded image URLs in structured data
`SeoBlog.astro` (line 15) and `SeoRecipe.astro` (line 40) build image URLs by concatenating hardcoded `https://www.clivewalkden.co.uk/assets/images/...` strings rather than using `site.baseUrl`. If the domain or path ever changes, schema markup silently breaks.
**Benefit:** Schema image URLs stay correct and are maintained from a single source of truth.

### Add preconnect hint for Boxicons CDN
`BaseLayout.astro` has preconnect hints for Google Fonts but not for `https://unpkg.com` which serves the Boxicons CSS on every page. This causes an unnecessary connection delay.
**Benefit:** Slightly faster icon font load, consistent with how Google Fonts is handled.

### Add Recipes to the primary navigation
The recipes section is only linked from the footer. The nav currently has Home, Portfolio, Blog, and About. Recipes is a distinct content section and deserves a nav entry.
**Benefit:** Visitors are more likely to discover the recipes section.

### Blog post estimated reading time
None of the post metadata or layouts calculate or display reading time. A rough calculation of `Math.ceil(wordCount / 200)` minutes is straightforward to add at build time in `PostLayout.astro`.
**Benefit:** Sets reader expectations before they commit to an article and is a standard UX pattern on developer blogs.

### Improve the 404 page
The current `404.astro` is a minimal placeholder with no Pagefind search widget, no suggestions of where to go, and no links to the blog or portfolio.
**Benefit:** Reduces bounce rate when visitors land on a dead link.

### Review and consolidate legacy blog categories
The category list includes PS3, PSP, Xbox, Wii, Bitcoin, and Android — categories with few or no active posts unlikely to receive new content. They appear in the category sidebar on every blog page.
**Benefit:** A tighter category list reduces noise in the sidebar and improves the blog's perceived focus.

### Remove `.styleci.yml`
This file is a leftover from the previous Laravel-based site. StyleCI is a PHP code style tool and has no relevance to an Astro/TypeScript project.
**Benefit:** Keeps the repository clean and avoids confusion.

---

## Low Priority

Longer-term improvements that would add polish or new functionality.

### Dark mode
The site uses a fixed light colour palette with a yellow accent (`#ffae00`). Adding a dark mode via a `prefers-color-scheme` media query and a Tailwind `dark:` variant would require a design pass but is now more straightforward with Tailwind CSS v4.
**Benefit:** A large proportion of developers browse in dark mode. Providing it is a quality signal on a developer portfolio.

### Extract shared date formatting utility
`formatDate()` is defined separately in `PostLayout.astro`, `BlogLayout.astro`, and potentially elsewhere. It should live in a single `src/utils/date.ts` file.
**Benefit:** Single point of change if the date format ever needs updating.

### Expand the Recipes section
There are currently only two recipes. The section has a full schema implementation, a recipe layout, and a listing page — the infrastructure is solid. It just needs content.
**Benefit:** A more populated recipes section adds personality to the site and gives visitors a reason to return.

### Add more portfolio content for applications and modules
Several of the Go CLI tools and Magento 2 modules have minimal descriptions. Adding context — problem being solved, technical approach, lessons learned — makes these entries more useful to visitors evaluating skills.
**Benefit:** More detailed portfolio entries better demonstrate expertise and give search engines richer content to index.

### Sitemap `lastmod` and `changefreq`
The `@astrojs/sitemap` integration generates a sitemap but without `lastmod` dates or `changefreq` hints. These can be populated using the `updated_at` field already present in the blog post schema.
**Benefit:** Helps search engines prioritise recrawling recently updated content.

### Related posts by technology on portfolio pages
Portfolio items already store a `technologies` array that overlaps with blog post categories. A "Related Reading" block linking to blog posts tagged with the same technologies would add useful cross-links.
**Benefit:** Increases time on site, improves internal linking for SEO, and helps visitors see depth of knowledge.
