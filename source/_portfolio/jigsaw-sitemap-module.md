---
extends: _layouts.plugins
id: 20221026
title: Jigsaw Sitemap Generator Plugin
status: Live
url: https://github.com/clivewalkden/jigsaw-sitemap
issues: https://github.com/clivewalkden/jigsaw-sitemap/issues
docs: https://github.com/clivewalkden/jigsaw-sitemap/blob/master/README.md
badge_style: flat-square
github_user: clivewalkden
github_repo: jigsaw-sitemap
packagist_user: clivewalkden
packagist_repo: jigsaw-sitemap
launched: 2021-10-24
lastupdate: 2022-11-04
finished: false
featured: false
image_main: jigsaw.png
image_small: jigsaw.png
supported_versions: [Jigsaw 1.3.16+]
section: summary
intro: Generates a sitemap.xml for your jigsaw site during the build process.
meta_title: Jigsaw Static Site Generator Sitemap Generator
meta_description: Generates a sitemap.xml for your jigsaw site during the build process.
---

Whilst building my new site using [Tighten's Jigsaw](https://jigsaw.tighten.com/), I followed the basic setup and tutorials in the documents and generated my sitemap.

I felt this process was something that would benefit from being made into a plugin to save writing the same lines on future sites.

After a quick search, I came across [East Slope Studio's Sitemap Generator](https://github.com/eastslopestudio/jigsaw-sitemap) and after attempting to install the plugin I came up against a version incompatibility. A change in Laravel 6's support for the Str class meant the plugin failed to load.

A quick pull and test and the code were updated and released with the updates in place.

I've since made another code update to fix an issue with double quotes in the link and currently use this on my site. 