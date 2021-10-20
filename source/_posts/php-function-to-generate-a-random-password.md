---
extends: _layouts.post
id: 59
title: PHP function to generate a random password
short_intro: This function will generate a random password of a given length (if specified)
intro: This handy little function generates a random password using alphanumeric characters. It may not be the most secure but it beats a standard dictionary word and could help secure your users accounts.
meta_title: PHP function to generate a random
meta_description: This function will generate a random password of a given length (if specified)
published: 2013-08-21 08:21:00
hide: false
category: php
hero:
author: Clive Walkden
section: content
---

This simple function generates a random password using all alphanumeric characters. While this won't be the most secure password, it is better than a dictionary word. The function accepts an integer to determine the password length, but if one isn't passed defaults to 16.

```php
function password_generator($length = 16)
{
    $str = 'abcdefghijkmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for ($i = 0, $password = ''; $i &lt; $length; $i++) {
        $password .= substr($str, mt_rand(0, strlen($str) - 1), 1);
    }
    return $password;
}
```