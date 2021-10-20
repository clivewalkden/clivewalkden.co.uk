---
extends: _layouts.post
id: 58
title: PHP function to find links in a string
short_intro: This function will allow you to search a string and convert urls to anchor tags
intro: This handy little function searches a string for urls and converts them into anchor tags. This is particularly useful for tweets pulled from Twitter using the API. This is used to prepare the links in my Twitter feed at the bottom of my site.
meta_title: PHP function to find links in a string
meta_description: This handy little function searches a string for urls and converts them into anchor tags. This is particularly useful for tweets pulled from Twitter.
published: 2013-08-14 08:21:00
hide: false
category: php
hero:
author: Clive Walkden
section: content
---

This handy little function searches a string for urls and converts them into anchor tags. This is particularly useful for tweets pulled from Twitter using the API. This is used to prepare the links in my Twitter feed at the bottom of my site.

```php
function make_links($str) {
	$reg_ex_url = &quot;/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/&quot;;
	$urls = array();
	$urls_to_replace = array();
		
	if (preg_match_all($reg_ex_url, $str, $urls)) {
		$numOfMatches = count($urls[0]);
		$url_count = 0;
		
		for ($i=0; $i&lt;$numOfMatches; $i++) {
			$alreadyAdded = false;
			$url_count = count($urls_to_replace);
				
			for ($j=0; $j&lt;$url_count; $j++) {
				if ($urls_to_replace[$j] == $urls[0][$i]) {
					$alreadyAdded = true;
				}
			}
				
			if (!$alreadyAdded) {
				array_push($urls_to_replace, $urls[0][$i]);
			}
		}
			
		$url_count = count($urls_to_replace);
			
		for ($i=0; $i&lt;$url_count; $i++) {
			$str = str_replace($urls_to_replace[$i], &quot;<a _blank="" href="\" target="\">&quot;.$urls_to_replace[$i].&quot;</a> &quot;, $str);
		}
			
		return $str;
	} else {
		return $str;
	}
}
```
