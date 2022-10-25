---
extends: _layouts.post
id: 70
meta_title: Plex Media Server Cent OS update
meta_description: If you want to update your version of Plex Media Server for Cent OS then you'd best be happy using command line
title: Plex Media Server Cent OS Update
short_intro: This is a short guide showing you how to update your version of Plex Media Server in Cent OS
intro: If you want to update your version of Plex Media Server for Cent OS then you'd best be happy using command line
published: 2014-07-18 11:27:11
hide: false
category: linux
hero: plex-media-server-update-in-centos.png
author: Clive Walkden
---

@section('content')
    <p>I've been using <a href="https://plex.tv/" target="_blank">Plex Media Server</a> now for nearly a year and unfortunately if you run the system through Cent OS command line there is no automatic way of updating it. This little guide will go through the process of ssh&#39;ing&nbsp;into your media server, downloading the latest version and then manually installing it.</p>
    <p>To see which version of Plex you are running simply log into your web interface for your media server and go to Settings &gt; Server &gt; General you will see something similar to the screenshot below.</p>
    {!! $page->image("/assets/images/blog/articles/plex-media-server-settings-general.png", null, null, ['title' => 'Plex Media Server Server Settings - General', 'alt' => 'Plex Media Server Server Settings - General']) !!}
    <p>Now check the <a href="https://plex.tv/downloads" target="_blank">Plex website</a> to see if there is a newer version available for Cent OS. If there is then it&#39;s time to ssh into your media server.</p>
    <pre><code class="language-shell">ssh USER@SERVERADDRESS</code></pre>
    <p>Where USER is the user of your media server and SERVERADDRESS is the IP or domain name of your media server. Now we need to navigate to a directory that the update can be downloaded into. I download mine into /home/install using this example the code would be.</p>
    <pre><code class="language-shell">cd /home/install/</code></pre>
    <p>Now we need to download the update, copy the url from the plex website, as of today that would be http://downloads.plexapp.com/plex-media-server/0.9.9.12.504-3e7f93c/plexmediaserver-0.9.9.12.504-3e7f93c.x86_64.rpm now in your ssh terminal type the following</p>
    <pre><code class="language-shell">wget http://downloads.plexapp.com/plex-media-server/0.9.9.12.504-3e7f93c/plexmediaserver-0.9.9.12.504-3e7f93c.x86_64.rpm</code></pre>
    <p>Were the filename is the link you just copied from Plex. You should then see the download begin, if it doesn't work double check your link.</p>
    <p>After is has completed you need to shut down the Plex service running on the media server. This is done with the following:</p>
    <pre><code class="language-shell">service plexmediaserver stop</code></pre>
    <p>After a couple of seconds you should see something similar to the following</p>
    {!! $page->image("/assets/images/blog/articles/plex-media-service-stop.png", null, null, ['title' => 'Plex Media Server stopped via command line in Cent OS', 'alt' => 'Plex Media Server stopped via command line in Cent OS']) !!}
    <p>Now that Plex is stopped we can run the manual install, run the following command (where the filename is the same as the file you downloaded from plex).</p>
    <pre><code class="language-shell">yum localupdate plexmediaserver-0.9.9.12-504-3e7f93c.x86_64.rpm</code></pre>
    <p>After a minute the update should be installed and you are ready to restart your server. Use the following command:</p>
    <pre><code class="language-shell">service plexmediaserver start</code></pre>
    {!! $page->image("/assets/images/blog/articles/plex-media-service-start.png", null, null, ['title' => 'Plex Media Server started via command line in Cent OS', 'alt' => 'Plex Media Server started via command line in Cent OS']) !!}
    <p>Congratulations, Plex is updated to the latest version.</p>
@endsection