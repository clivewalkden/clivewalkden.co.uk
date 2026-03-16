import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const posts = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/posts' }),
  schema: z.object({
    id: z.union([z.number(), z.string()]),
    title: z.string(),
    short_intro: z.string(),
    intro: z.string().optional(),
    meta_title: z.string(),
    meta_description: z.string(),
    published: z.coerce.date(),
    first_published: z.coerce.date().optional().nullable(),
    updated_at: z.coerce.date().optional().nullable(),
    hide: z.boolean().default(false),
    category: z.string(),
    hero: z.string().optional().nullable(),
    author: z.string().default('Clive Walkden'),
  }),
});

const portfolio = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/portfolio' }),
  schema: z.object({
    id: z.union([z.number(), z.string()]),
    type: z.enum(['website', 'application', 'module']),
    title: z.string(),
    client: z.string().optional().nullable(),
    status: z.string(),
    url: z.string().optional().nullable(),
    launched: z.coerce.date(),
    finished: z.coerce.date().optional().nullable(),
    featured: z.boolean().default(false),
    technologies: z.array(z.string()).optional().default([]),
    infrastructure: z.array(z.string()).optional().default([]),
    image_main: z.string(),
    image_small: z.string().optional().nullable(),
    intro: z.string(),
    summary: z.array(z.string()).optional().nullable(),
    meta_title: z.string(),
    meta_description: z.string(),
    seo: z.boolean().default(false),
    github_user: z.string().optional().nullable(),
    github_repo: z.string().optional().nullable(),
    docs: z.string().optional().nullable(),
    issues: z.string().optional().nullable(),
    supported_versions: z.array(z.string()).optional().default([]),
  }),
});

const recipes = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/recipes' }),
  schema: z.object({
    id: z.number(),
    title: z.string(),
    meta_title: z.string(),
    meta_description: z.string(),
    meta_keywords: z.string().optional(),
    published: z.coerce.date(),
    image_main: z.string(),
    prepTime: z.string().optional(),
    cookTime: z.string().optional(),
    totalTime: z.string().optional(),
    category: z.string().optional(),
    cuisine: z.string().optional(),
    difficulty: z.number(),
    servings: z.number(),
    ingredients: z.array(
      z.object({ amount: z.string(), ingredient: z.string() })
    ),
    method: z.array(z.string()),
    intro: z.string().optional(),
    short_intro: z.string().optional(),
  }),
});

export const collections = { posts, portfolio, recipes };
