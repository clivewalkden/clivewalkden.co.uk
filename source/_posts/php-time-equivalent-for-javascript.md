---
extends: _layouts.post
id: 73
meta_title: PHP Time() Equivalent for Javascript
meta_description: This little snippet of JavaScript is an equivalent to PHP's time() function and has been most useful
title: PHP Time() Equivalent for Javascript
short_intro: This little snippet of JavaScript is an equivalent to PHP's time() function and has been most useful
intro: I've recently been working on an jquery ajax file uploader which displays the image when successful. However, the image is cached by the server and wasn't showing the updated image as the names are identical, passing a timestamp in the file url fixed it.
published: 2014-07-30 10:04:38
hide: false
category: jquery
hero:
author: Clive Walkden
section: content
---

This function utilises the <code class="language-javascript">Date</code> object. When the <code class="language-javascript">Date.getTime()</code> object instance is created it calls the number of seconds since 1 January 1970 UTC. As we only want the number of seconds (not milliseconds) we divide the result by 1000.

The `Math.floor` part rounds the number down to the nearest whole number.

```javascript
function time() {
    var timestamp = Math.floor(new Date().getTime() / 1000)
    return timestamp;
}
```
