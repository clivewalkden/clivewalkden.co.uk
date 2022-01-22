---
extends: _layouts.post
id: 20220122
meta_title: Magento 2.4.x Logging
meta_description: How to log to information to a file in different Magento 2.4.x versions 
title: Magento 2.4.x Writing to a Log File
short_intro: How to log to information to a file in different Magento 2.4.x versions
intro: How to log to information to a file in different Magento 2.4.x versions
published: 2022-01-22 15:30:00
hide: false
category: magento-2
hero:
author: Clive Walkden
section: content
---

Magento 2.4.x has changed it's logging method several times. This guide will help you determine which you should be using for the version you are running.

### Magento below version 2.4.2
```php
$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/yourlog.log');
$logger = new \Zend\Log\Logger();
$logger->addWriter($writer);
$logger->info('Your text message');
```

### Magento 2.4.2
```php
$writer = new \Laminas\Log\Writer\Stream(BP . '/var/log/yourlog.log');
$logger = new  \Laminas\Log\Logger();
$logger->addWriter($writer);
$logger->info('Your text message');
```

### Magento including and after version 2.4.3
```php
$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/yourlog.log');
$logger = new \Zend_Log();
$logger->addWriter($writer);
$logger->info('Your text message');
```

Let's hope we get some stability now for the next few releases as this has caught me out a few times.
