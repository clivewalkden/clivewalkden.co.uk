---
extends: _layouts.post
id: 59
title: CSS center content within a div
short_intro: Here's an old bit of code that I found to position something centrally inside an element.
intro: Here's an old bit of code that I found to position something centrally inside an element.
meta_title: CSS center content within a div
meta_description: Here's an old bit of code that I found to position something centrally inside an element.
published: 2001-07-23
hide: false
category: css
author: Clive Walkden
section: content
---

Here's an old bit of code that I found to position something centrally inside an element.

```css
#idOfTheDiv {
    width: 400px; /* here you put the width that you need */
    height: 200px; /* here you put the height that you need */
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -200px; /* this number always to be the width divided two in negative */
    margin-top: -100px; /* this number always to be the height divided two in negative */
}
```
