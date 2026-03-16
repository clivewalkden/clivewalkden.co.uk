# Site Improvement TODO

Improvements and updates grouped by priority. Each item notes the benefit it brings to the site.

---

## High Priority

These items have a direct impact on SEO, discoverability, or fix existing bugs.

### Fix Nav.astro spacing typo
The Blog nav item has a class of `fmr-3` instead of `mr-3`, which means the spacing rule is silently ignored.
**Benefit:** Restores correct horizontal spacing between nav items, particularly on mobile.

### Open Graph & Twitter Card meta tags
`BaseLayout.astro` only sets `<meta name="description">` and a canonical URL. There are no `og:title`, `og:description`, `og:image`, `og:type`, or `twitter:card` tags. Every share to LinkedIn, Twitter/X, Slack, Discord, or iMessage generates a blank or broken preview card.
**Benefit:** Properly formatted social sharing cards increase click-through rates when content is shared and give the site a professional appearance in social feeds.

### JSON-LD schema for Portfolio items
Blog posts have a `BlogPosting` schema and recipes have a `Recipe` schema, but portfolio items have no structured data at all. A `SoftwareApplication` or `CreativeWork` schema would allow Google to understand and surface the projects correctly.
**Benefit:** Improved search appearance for portfolio items and consistency across the site's three main content types.

### RSS feed for the blog
There is no `/rss.xml` or `/feed.xml`. Astro ships with an official `@astrojs/rss` package that requires minimal setup. A dev blog without a feed misses readers who use RSS readers (Feedly, Reeder, NetNewsWire), and some aggregators and content discovery tools rely on feeds.
**Benefit:** Expands reach to RSS-driven audiences and enables syndication to aggregator sites.

### robots.txt
There is no `robots.txt` in the project. Cloudflare Pages will not auto-generate one. Without it, crawlers have no explicit guidance and tools like Google Search Console flag the absence.
**Benefit:** Gives crawlers clear instructions, prevents any admin or draft pages from being indexed in future, and satisfies Search Console requirements.

---

## Medium Priority

These items improve user experience, content discoverability, and code quality.

### Add Recipes to the primary navigation
The recipes section is only linked from the footer. The nav currently has Home, Portfolio, Blog, and About. Recipes is a distinct content section and deserves a nav entry.
**Benefit:** Visitors are more likely to discover the recipes section. The footer-only link suggests it is an afterthought rather than a first-class section of the site.

### Show applications and modules on the homepage
`PortfolioSegment.astro` filters to `type: website` only. This means the four open-source CLI tools — which now have live GitHub stats and are arguably the most technically interesting work on the site — are invisible on the homepage.
**Benefit:** Applications and modules get exposure to first-time visitors without them having to navigate to the full portfolio page. Consider showing one item from each type, or the three most recently launched items regardless of type.

### Blog post estimated reading time
None of the post metadata or layouts calculate or display reading time. A rough calculation of `Math.ceil(wordCount / 200)` minutes is straightforward to add at build time in `PostLayout.astro`.
**Benefit:** Sets reader expectations before they commit to an article and is a standard UX pattern on developer blogs.

### Improve the 404 page
The current `404.astro` is a minimal placeholder. It does not include the Pagefind search widget, no suggestions of where to go, and no link to the blog or portfolio.
**Benefit:** Reduces bounce rate when visitors land on a dead link. Offering search and navigation suggestions converts a dead end into a usable page.

### Mobile navigation accessibility
The hamburger toggle opens the menu but there is no close button inside the open drawer, no focus trap while the menu is open, and no `aria-expanded` attribute on the toggle. This is a WCAG 2.1 AA failure.
**Benefit:** Keyboard and screen reader users can properly navigate and dismiss the mobile menu. Improves accessibility compliance.

### Review and consolidate legacy blog categories
The category list includes PS3, PSP, Xbox, Wii, Bitcoin, and Android — categories with few or no active posts that are unlikely to receive new content. They appear in the category sidebar on every blog page.
**Benefit:** A tighter, more relevant category list reduces noise in the sidebar, improves the blog's perceived focus, and makes category navigation more useful. Old posts can be recategorised to General or left in a hidden/archived state.

### Remove `.styleci.yml`
This file is a leftover from the previous Laravel-based site. StyleCI is a PHP code style tool and has no relevance to an Astro/TypeScript project.
**Benefit:** Keeps the repository clean and avoids confusion for anyone who looks at the project config.

---

## Low Priority

Longer-term improvements that would add polish or new functionality.

### Dark mode
The site uses a fixed light colour palette with a yellow accent (`#ffae00`). Adding a dark mode via a `prefers-color-scheme` media query and a Tailwind `dark:` variant would require a design pass but is now much more straightforward with Tailwind CSS v4.
**Benefit:** A large proportion of developers browse in dark mode by default. Providing it is a quality signal on a developer portfolio.

### Expand the Recipes section
There are currently only two recipes. The section has a full schema implementation (`SeoRecipe.astro`), a recipe layout, and a listing page — the infrastructure is solid. It just needs content.
**Benefit:** A more populated recipes section adds personality to the site and gives visitors a reason to return for non-technical content.

### Add more portfolio content for applications and modules
Several of the Go CLI tools and Magento 2 modules have minimal descriptions (two or three sentences). Adding context — problem being solved, technical approach, lessons learned — makes these entries more useful to visitors evaluating skills.
**Benefit:** More detailed portfolio entries better demonstrate expertise and give search engines richer content to index.

### Sitemap `lastmod` and `changefreq`
The `@astrojs/sitemap` integration generates a sitemap but without `lastmod` dates or `changefreq` hints. These can be populated using the `updated_at` field already present in the blog post schema and equivalent dates on portfolio and recipe entries.
**Benefit:** Helps search engines prioritise recrawling recently updated content rather than treating all pages equally.

### Migrate to Astro Image component
Images are currently served through the Sirv CDN via a manual utility function (`src/utils/image.ts`) that constructs query strings. Astro's native `<Image />` component could handle format conversion (WebP/AVIF), responsive `srcset`, and `sizes` automatically for locally-stored images.
**Benefit:** Removes the manual image URL construction, improves build-time optimisation, and reduces dependence on Sirv for anything other than the hosted originals.

### Related posts by technology on portfolio pages
Portfolio items already store a `technologies` array. These values overlap with blog post categories. A "Related Reading" block that links to blog posts tagged with the same technologies (e.g., a Magento 2 module page linking to Magento 2 blog posts) would add useful cross-links.
**Benefit:** Increases time on site, improves internal linking for SEO, and helps visitors see the depth of knowledge behind a portfolio item.
