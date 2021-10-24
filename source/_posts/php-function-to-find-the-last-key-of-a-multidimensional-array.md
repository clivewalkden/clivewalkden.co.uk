---
extends: _layouts.post
id: 47
title: PHP Function to find the last key of a multidimensional array
short_intro: This function is great for retrieving the last key of a multidimensional array. I use this function on a site that stores cake options such as size, shape, ribbon colour, icing colour and text fields for use in a shopping basket.
intro: This function is great for retrieving the last key of a multidimensional array. I use this function on a site that stores cake options such as size, shape, ribbon colour, icing colour and text fields for use in a shopping basket.
meta_title: PHP Function to find the last key of a multidimensional array
meta_description: This function is great for retrieving the last key of a multidimensional array. I use this function on a site that stores cake options such as size, shape, ribbon colour, icing colour and text fields for use in a shopping basket.
published: 2011-07-20 00:00:00
hide: false
category: php
hero:
author: Clive Walkden
section: content
---

This function is great for retrieving the last key of a multidimensional array. I use this function on a site that stores cake options such as size, shape, ribbon colour, icing colour and text fields for use in a shopping basket. Not all cakes have all the options so i need to know where the end of the array is, hence this function.

Hope this helps people, if there is a better way of doing it, please feel free to discuss in the comments.

```php
array_push($_SESSION["cake"]["items"], array(
	"product" =&gt; $_POST["id"],
	"size" =&gt; $_POST["cake-size"],
	"message" =&gt; $_POST["cake-message"],
	"style" =&gt; $_POST["shape"],
	"flavour" =&gt; $cakeflavour[0],
	"qty" =&gt; 1));

	$arkey = array_pop(array_keys($_SESSION["cake"]["items"]));
```
