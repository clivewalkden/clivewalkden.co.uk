---
extends: _layouts.post
id: 80
meta_title: Magento Format Date Core Helper Method
meta_description: Magento Format Date Core Helper Method
title: Magento Format Date Core Helper Method
short_intro: The Magento Core Helper formatDate method has 4 options that you can pass into it.
intro: The Magento Core Helper formatDate method has 4 options that you can pass into it, these will change the output based on the default locale you have selected.
published: 2016-03-23 17:13:41
hide: false
category: magento
hero:
author: Clive Walkden
section: content
---

To use the dateFormat method you use the core helper.

```php
<?php echo Mage::helper('core')->formatDate($customer->getCreatedAt(), 'full', false); ?>
```

The second argument accepts 4 options; full, long, medium and short.

The third argument is a boolean value and determines if you want to include the time portion of the date.

Output of each of these formats is shown below for enGB locale

Full: Wednesday, 23rd March 2016

Long: 23 March 2016

Medium: 23 Mar 2016

Short: 23/03/2016
