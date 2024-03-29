---
extends: _layouts.post
id: 65
meta_title: Viewing Disk space remaining in Linux Command Line
meta_description: If, like me, you run a command line Linux distro then seeing useful stats like disk space remaining on your hard drive is a must. This short article explains the command needed to view all the information.
title: Viewing Disk space remaining in Linux Command Line
short_intro: If, like me, you run a command line Linux distro then disk space remaining is useful to know.
intro: If, like me, you run a command line Linux distro then seeing useful stats like disk space remaining on your hard drive is a must. This short article explains the command needed to view all the information.
published: 2013-11-25 08:23:00
hide: false
category: linux
hero:
author: Clive Walkden
---

@section ('content')

    <p>If, like me, you run a command line Linux distro then seeing useful stats like disk space remaining on your hard drive is a must. To see the current hard drive usage of all mounted partitions simply type the following command into a terminal.</p>
    <pre><code class="language-shell">df -h</code></pre>
    <p>You should see something similar to the image below.</p>
    {!! $page->image("/assets/images/blog/articles/viewing-disk-space-remaining-in-linux-command-line.png", null, null, ['title' => 'CLI Output from df -h command in Linux', 'alt' => 'CLI Output from df -h command in Linux']) !!}
    <p>The -h simply puts the drive space into human-readable format eg. 10K, 45G, 1.1T.</p>
    <p>There are other options available for the df command but nothing else that needs covering in this post.</p>
    <p>If you have other/better ways of getting the same information in Linux command line then please feel free to comment below.</p>

@endsection