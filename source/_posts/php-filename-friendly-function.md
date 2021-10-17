---
extends: _layouts.post
id: 50
title: PHP Filename Friendly Function
short_intro: This function outputs a string that is filename friendly.
intro: This function outputs a string that is filename friendly.
meta_title: PHP Filename Friendly Function
meta_description: This function outputs a string that is filename friendly.
published: 2011-11-21 00:00:00
hide: false
category: php
author: Clive Walkden
section: content
---

This function outputs a string that is filename friendly. It removes all non-characters and punctuation from the input and converts to lowercase. I find this useful for seo friendly cms pages. This function is still being tweaked so any improvements would be most appreciated.

```php
function checkCharacters($title) {
	$final_text = ”;
	$title = strtolower(trim(stripslashes($title)));
	for ($i = 0; $i &lt; strlen($title); $i++) {
		$letter = substr($title,$i,1); 
		$ascii = ord($letter); 
		if (($ascii &gt;= 97 &amp;&amp; $ascii &lt;= 122) || ($ascii&gt;=48 &amp;&amp; $ascii &lt;= 57))
		{
			$final_text .= $letter; 
		}
		else 
		{
			$final_text .= "-"; 
		}

	return $final_text;
}
```
