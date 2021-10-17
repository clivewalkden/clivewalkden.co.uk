---
extends: _layouts.post
id: 54
title: PHP Email Address Validation Function
short_intro: A PHP function to determine if a supplied email address is valid
intro: One PHP function that i like to use in my validation routines is this little beauty.
meta_title: PHP Email Address Validation Function
meta_description: One PHP function that i like to use in my validation routines is this little beauty.
published: 2013-02-28 00:00:00
hide: false
category: php
author: Clive Walkden
section: content
---

If you want to make sure that an email passed in a form or url variable is actually what you expect it to be then this function can help.

```php
function is_email($email) {
    return preg_match('/^[a-z0-9!#$%&\'*+\/=?^`{}|~_-]+[.a-z0-9!#$%&\'*+\/=?^`{}|~_-]*@[a-z0-9]+[._a-z0-9-]*\.[a-z0-9]+$/ui', $email);
}
```

It simply returns true if the supplied is an email address and nothing (false) if the data passed into it isn't one.
