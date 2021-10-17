---
extends: _layouts.post
id: 46
title: PHP Colour lightness function
short_intro: Here's a quick little function which can be used to return your IP address. Not as useful as the next method but a simple quick solution
intro: Here's a quick little function which can be used to return your IP address. Not as useful as the next method but a simple quick solution
meta_title: PHP Colour lightness function
meta_description: Here's a quick little function which can be used to return your IP address. Not as useful as the next method but a simple quick solution
published: 2011-06-30 00:00:00
hide: false
category: php
author: Clive Walkden
section: content
---

Following on from my other 2 useful functions I thought I would show you another one which I have found useful for determining if a colour background needs a white or black text colour over the top.

I found this function a while back so can't take the credit for writing it myself, I have no idea to give the credit to but whoever you are thank you.

```php
function get_brightness($hex) {
    // returns brightness value from 0 to 255
    // strip off any leading #
    $hex = str_replace('#', '', $hex);
    $c_r = hexdec(substr($hex, 0, 2));
    $c_g = hexdec(substr($hex, 2, 2));
    $c_b = hexdec(substr($hex, 4, 2));
    return (($c_r * 299) + ($c_g * 587) + ($c_b * 114)) / 1000;
}
```

The function takes your hex colour input and returns a value between 0 and 255. 0 is the darkest and 255 is lightest. I find a value around 80-90 is a good place to change the text colour from white to black, but this figure is worth experimenting with.

I hope this function helps you as much as it has me.
