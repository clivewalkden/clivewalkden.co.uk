import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';
import sitemap from '@astrojs/sitemap';
import pagefind from 'astro-pagefind';
import mdx from '@astrojs/mdx';

export default defineConfig({
  site: 'https://clivewalkden.co.uk',
  trailingSlash: 'always',
  build: { format: 'directory' },
  integrations: [
    mdx(),
    sitemap({
      filter: (page) => !page.includes('/404'),
    }),
    pagefind(),
  ],
  vite: {
    plugins: [tailwindcss()],
  },
});
