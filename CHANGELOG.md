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