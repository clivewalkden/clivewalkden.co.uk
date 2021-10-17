---
extends: _layouts.post
id: 40
title: jQuery A Beginning
short_intro: I've been using jQuery now for a few months and thought I'd share some observations.
intro: I've been using the jQuery library now for a few months and thought I'd share some observations.
meta_title: jQuery A Beginning
meta_description: I've been using the jQuery library now for a few months and thought I'd share some observations.
published: 2010-10-30 00:00:00
hide: false
category: jquery
author: Clive Walkden
section: content
---

I've been using <a href="http://www.jquery.com" rel="nofollow" target="_blank" title="jQuery - Write less, do more">jQuery</a> now for a few months and thought I&#39;d share some observations.

First point is that the libraries are available for free on Google&#39;s server. This has some great benefits to your site including, Decreased latency and better caching.

### Decreased Latency

When you request the script from Google, your location is given to Google and they can then serve you the file closest to your location. This means that if your site is in London, UK and you&#39;re in California, USA, Google will serve you the jQuery code from USA.

### Better Caching

When someone visits your site for the first time they have to download your copy of jQuery, this is then cached for subsequent visits. The chances are that someone has already visited a site with Google&#39;s jQuery script so when requested the browser returns a 304 not modified. This means one less request and a quicker loading site.

### Implementation

After reading the benefits I&#39;m sure you&#39;re all asking &quot;How do i set this up on my websites!&quot; Well it&#39;s simple. Add the code below in your

tags of your website. Job Done!

```html
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
```
