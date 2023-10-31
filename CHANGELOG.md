# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

Given a version number MAJOR.MINOR.PATCH, increment the:

* MAJOR version when you make incompatible API changes,
* MINOR version when you add functionality in a backwards-compatible manner, and
* PATCH version when you make backwards-compatible bug fixes.

##### Types of changes
* [Added] for new features.
* [Changed] for changes in existing functionality.
* [Deprecated] for soon-to-be removed features.
* [Removed] for now removed features.
* [Fixed] for any bug fixes.
* [Security] in case of vulnerabilities.


## [Unreleased]
### Changed
- Symfony components updated
- Node updated from v18.18.0 to v20.9.0
- Carbon updated from 2.70.0 to 2.71.0
- Fuse.js updated from v6.6.2 to v7.0.0
- Vue updated from v2.7.13 to v2.7.15
- Vue loader updated from v15.10.0 to v15.11.1
- Vue template compiler updated from v2.7.13 to v2.7.15


## [v1.3.3] - 2023-04-28
### Changed
- Symfony components

### Fixed
- Missing redirects for old posts, portfolio links and contact page


## [v1.3.2] - 2023-02-02
### Changed
- Carbon updated from 2.65.0 to 2.66.0


## [v1.3.1] - 2023-01-25
### Changed
- PostCSS updated from 8.4.19 to 8.4.21
- Carbon updated from 2.64.0 to 2.65.0
- Laravel Mix Jigsaw from 2.0.0 to 2.1.1
- Browser Sync from 2.27.10 to 2.27.11
- PostCSS Import from 15.0.1 to 15.1.0
- Symfony Components
- Portfolio tweaks to keep updated

### Fixed
- Missing redirects for old posts, portfolio links and contact page


## [v1.3.0] - 2022-12-07
### Added
- GA4 analytics tracking code

### Changed
- CSS Styling updated to tweak code text size and highlight color
- Added styling for blockquote
- Carbon updated from 2.63.0 to 2.64.0
- Symfony components update


## [v1.2.5] - 2022-11-12
### Changed
- Added StyleCi build result to the README.md
- Updated postcss-import from 14.1.0 to 15.0.0
- Updated Axios from 0.21.4 to 0.27.2
- Updated Jigsaw Sitemap from 1.3.0 to 1.3.1
- dependabot.yml configured to change target branch


## [v1.2.4] - 2022-11-04
### Changed
- Updated GoogleFonts installation code to the latest version
- Updated Sitemap generator to the latest verion v1.3.0

### Fixed
- Stopped build_staging directory being included in the repo
- `.styleci.yml` configuration manually set
- Updated tech stack in humans.txt
- Small SEO fixes to various parts
- Added missing robots.txt


## [v1.2.3] - 2022-11-02
### Changed
- Updated sitemap module from v1.1.1 to v1.2.0
- Blog article date now shown in the author space near the bottom
- Added left right icons to blog previous/next post links
- Added cloud icon to about page
- SEO meta updates
- Illuminate framework updates

### Fixed
- SEO issues detected in screaming frog
- Styling issues with breadcrumbs
- Image cateogry 404's
- Page 404's added to redirects
- Spelling fixes and updates
- Date format in rich snippets
- Page H1 now not my name for everything
- Added missing styles to the tailwind safelist


## [v1.2.2] - 2022-10-31
### Changed
- Usersnap module text updated for latest release 


## [v1.2.1] - 2022-10-27
### Changed
- Set .nvmrc to 14.19.0 (for cloudflare)
- Tweaked search index fields to include content
- Asset compilation tweaks

### Removed
- Removed highlight.js as it's need used or needed
- Sourcemaps output

### Fixed
- Changed h5 on about page to h3
- Added styles into safelist for tailwind production compilation


## [v1.2.0] - 2022-10-27
### Added
- Recipes section with 2 recipes
- Breadcrumbs to the blog

### Changed
- Updated renovate base branch
- SemverRanges config added
- Tweaked some of teh about page text

### Fixed
- Blog rich snippet data


## [v1.1.0] - 2022-10-26
### Added
- Search capabilities for posts
- JigsawSitemap plugin to portfolio

### Changed
- Experience less than 1 year now displays a bit nicer
- Upgraded sitemap module to fix double slash issue

### Fixed
- Blog article imagery now correctly being served from Sirv
- SEO 404 image reports
- Updated Jigsaw to v1.3.45 (PHP 7.4 last version)


## [v1.0.0] - 2022-10-25
- Initial Stable Release
- Added redirects for /code/ to /portfolio/
- Added CHANGELOG.md
- Updated README.md