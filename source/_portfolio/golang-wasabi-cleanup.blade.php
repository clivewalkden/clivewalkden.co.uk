---
extends: _layouts.plugins
id: 4
title: Wasabi Cleanup Application
status: Live
url: https://github.com/clivewalkden/go-wasabi-cleanup
issues: https://github.com/clivewalkden/go-wasabi-cleanup/issues
docs: https://github.com/clivewalkden/go-wasabi-cleanup/blob/master/README.md
badge_style: flat-square
github_user: clivewalkden
github_repo: go-wasabi-cleanup
packagist_user:
packagist_repo:
launched: 2023-03-01
lastupdate: 2023-04-21
finished: false
featured: false
image_main: cli-application-image.png
image_small: cli-application-small.png
supported_versions: [Linux, MacOS, Windows]
section: summary
intro: An application to cleanup files outside a buckets compliance period.
meta_title: Wasabi Cleanup Application
meta_description: An application to cleanup files outside a buckets compliance period.
---
@section('summary')
<p>This application was written to solve the issue of files needing to be deleted after the compliance timeframe ended on our backup system for log files.</p>
{!! $page->image("/assets/images/portfolio/wasabiCleanup.png", null, null, ['title' => 'wasabiCleanup Command Line Application', 'alt' => 'wasabiCleanup Command Line Application Help Screen']) !!}
<p>This application takes a yml config file which sets the bucket and compliance period and removed anything older than the maximum lifetime.</p>
@endsection