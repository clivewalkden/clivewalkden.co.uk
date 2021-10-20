---
extends: _layouts.post
id: 42
title: Useful PHP date function
short_intro: I've been using jQuery now for a few months and thought I'd share some observations.
intro: I've been using the jQuery library now for a few months and thought I'd share some observations.
meta_title: Useful PHP date function
meta_description: I've been using the jQuery library now for a few months and thought I'd share some observations.
published: 2010-11-01 00:00:00
hide: false
category: php
hero:
author: Clive Walkden
section: content
---

Here's a useful function that I use a lot for taking a database date and converting it into something human readable.

```php
function dateFormat($dbDate, $newFormat='jS F Y') {
    // split the date into it&#39;s component parts
    $year=substr($dbDate, 0,4);
    $month=substr($dbDate, 5,2);
    $day=substr($dbDate, 8,2);
    $hour=substr($dbDate, 11,2);
    $minute=substr($dbDate, 14,2);
    $second=substr($dbDate, 17,2);
    
    // recompile in the required format
    return date($newFormat, mktime($hour,$minute,$second,$month,$day,$year));
}
```

### Uses

The function can be used in the following way.

```php
echo dateFormat("2010-11-01 18:00:00", "l jS")
```

returns

`Monday 1st`

```php
echo dateFormat("2010-11-01 18:00:00")
```

returns

`1st November 2010`

### Breakdown

Now I'll break the code down

```php
function dateFormat($dbDate, $newFormat='jS F Y') {
```

This line sets the function name <em>dateFormat</em>. It also sets the parameters used throughout the function <em>$dbDate</em> and <em>$newFormat</em> also included is a default parameter for <em>$newFormat</em>. This is used if you do not pass a parameter when calling the function.

```php
// split the date into it&#39;s component parts
$year=substr($dbDate, 0,4);
$month=substr($dbDate, 5,2);
$day=substr($dbDate, 8,2);
$hour=substr($dbDate, 11,2);
$minute=substr($dbDate, 14,2);
$second=substr($dbDate, 17,2);
```

This splits the passed date into it&#39;s component parts so that it can be reformed into the desired format.

```php
// recompile in the required format
return date($newFormat, mktime($hour,$minute,$second,$month,$day,$year));
```

The final line of the function uses the mktime and date function to reprocess your date into the <em>$newFormat</em> supplied.

I hope you find this function useful, I use it for many sites with great success.
