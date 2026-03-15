# clivewalkden.co.uk

[![StyleCI](https://github.styleci.io/repos/145961530/shield?branch=master)](https://github.styleci.io/repos/145961530?branch=master)

Personal portfolio and blog site built with [Astro](https://astro.build), Tailwind CSS v4, and Pagefind search.

## Development

Install dependencies:
```sh
npm install
```

Start the dev server:
```sh
npm run dev
```

## Build

Produce the static output in `dist/`:
```sh
npm run build
```

Preview the production build locally:
```sh
npm run preview
```

## Stack

- **Astro** — static site generator
- **Tailwind CSS v4** — CSS-first utility framework
- **Pagefind** — post-build search index
- **Sirv CDN** — image hosting and optimisation

## Hosting

The site is hosted on Cloudflare Pages and auto-deploys on push. The `master` branch goes to production; other branches deploy to [https://development.clivewalkden-co-uk.pages.dev/](https://development.clivewalkden-co-uk.pages.dev/)

## Changelog

See [CHANGELOG.md](./CHANGELOG.md)
