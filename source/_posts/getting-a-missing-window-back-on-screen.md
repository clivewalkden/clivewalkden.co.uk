---
extends: _layouts.post
id: 45
title: PHP Function IP if behind a proxy
short_intro: Following from my last post, here is the method to get your IP address if you are behind a proxy. It's a much better function than the earlier post as it will almost guarantee a return result.
intro: Following from my last post, here is the method to get your IP address if you are behind a proxy. It's a much better function than the earlier post as it will almost guarantee a return result.
meta_title: PHP Function IP if behind a proxy
meta_description: Following from my last post, here is the method to get your IP address if you are behind a proxy. It's a much better function than the earlier post as it will almost guarantee a return result.
published: 2011-06-28 00:00:00
hide: false
category: php
author: Clive Walkden
section: content
---

Following from my last post, here is the method to get your IP address if you are behind a proxy.

```php
function getRealIPAddr() {
    // check ip from share internet
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
        $ip=$_SERVER["HTTP_CLIENT_IP"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        // to check ip is pass from proxy
        $ip=$_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
        $ip=$_SERVER["REMOTE_ADDR"];
    }
    return $ip;
}
```
As this method gets more accurate results it is better to use this than the previous function.
