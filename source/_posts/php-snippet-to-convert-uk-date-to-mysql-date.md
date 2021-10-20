---
extends: _layouts.post
id: 53
title: PHP Snippet to convert UK date to MySQL date
short_intro: A simple PHP preg_replace statement that will convert uk date format ready for a database
intro: A simple PHP preg_replace statement that will convert uk date format ready to be inserted into a mysql table. 23/06/1981 returns 1981-06-23
meta_title: PHP Snippet to convert UK date to MySQL date
meta_description: A simple PHP preg_replace statement that will convert uk date format ready to be inserted into a mysql table. 23/06/1981 returns 1981-06-23
published: 2012-02-23 00:00:00
hide: false
category: php
hero:
author: Clive Walkden
section: content
---

This little bit of code is a great little time saver, while there are more specialised expressions that will check the different attributes of the date fall between specific numbers, this is simple and assumes the information has already been validated through checkdate or something client side.

```php
$date = "23/06/1981";
$data = preg_replace("/(\d{2})[\/-](\d{2})[\/-](\d{4})/" , "\\3-\\2-\\1" , $data);
// $data would now be 1981-06-23
```

or as a function

```php
function db_date($date) {
	$value = preg_replace("/(\d{2})[\/-](\d{2})[\/-](\d{4})/" , "\\3-\\2-\\1" , $data);
	return $value;
}

$data = db_date("23/06/1981");Ã¢â‚¬Â¨// $data would be 1981-06-23
```

Example:

23/06/1981 returns 1981-06-23
