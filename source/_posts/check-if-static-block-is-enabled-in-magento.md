---
extends: _layouts.post
id: 74
meta_title: Check if a static block is enabled in Magento
meta_description: This short article explains how to check if a static block is enabled in your Magento project
title: Check if a static block is enabled in Magento
short_intro: This short article explains how to check if a static block is enabled in your Magento project.
intro: This short article explains how to check if a static block is enabled in your Magento project.
published: 2014-09-10 14:22:45
hide: false
category: magento
hero:
author: Clive Walkden
section: content
---

I've only been using Magento for a short period and I&#39;ve noticed that it is extremely powerful, yet very flexible. This little snippet of code has helped me no end in my projects.

If you wish to check if a static block is enabled or disabled in your phtml files then simply use this bit of code with the identifier of your static block in place of static-block-identifier.

```php
Mage::getModel('cms/block')->load('static-block-identifier')->getIsActive();
```
