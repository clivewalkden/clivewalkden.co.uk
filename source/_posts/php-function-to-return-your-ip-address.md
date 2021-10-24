---
extends: _layouts.post
id: 44
title: PHP Function to return your IP address
short_intro: Here's a quick little function which can be used to return your IP address. Not as useful as the next method but a simple quick solution
intro: Here's a quick little function which can be used to return your IP address. Not as useful as the next method but a simple quick solution
meta_title: PHP Function to return your IP address
meta_description: Here's a quick little function which can be used to return your IP address. Not as useful as the next method but a simple quick solution
published: 2011-06-27 00:00:00
hide: false
category: php
hero:
author: Clive Walkden
section: content
---

Here's a quick little function which can be used to return your IP address

```php
function getRemoteIPAddress() {
    $ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
}
```

The result can be very handy when combined with an if statement to code parts of a site you don't want the end user to see. Just remember you need to know your IP address before you can create the statement below.

```php
$ip = getRemoteIPAddress();

if ($ip == "insert your IP here") {
    //run the code only you want to see here
}
```
