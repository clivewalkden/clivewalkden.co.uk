---
extends: _layouts.post
id: 20221207
meta_title: Magento 2 Finding Products With Different Data in Store View
meta_description: Magento 2 How to location products with mismatched store data in single store mode.
title: Magento 2 Finding Products With Different Data in Store View
short_intro: Magento 2 How to location products with mismatched store data in single store mode.
intro: Magento 2 How to location products with mismatched store data in single store mode.
published: 2022-12-07 13:34:00
hide: false
category: magento-2
hero:
author: Clive Walkden
section: content
---

When using your Magento 2 store with third party application or stock management systems you can find that your product information can sometimes get out of sync between store views, even when the site is in single store mode.

Recently we've come across this with multiple clients using different third party stock / order control systems. We've found this simple query will point you in the right direction to locate the SKU's of affected products which you can then pass to the store owner to check. 

```mysql
SELECT `sku` FROM (
  (SELECT `entity_id` FROM catalog_product_entity_datetime WHERE `store_id` = 1)
  UNION
  (SELECT `entity_id` FROM catalog_product_entity_decimal WHERE `store_id` = 1)
  UNION
  (SELECT `entity_id` FROM catalog_product_entity_int WHERE `store_id` = 1)
  UNION
  (SELECT `entity_id` FROM catalog_product_entity_text WHERE `store_id` = 1)
  UNION
  (SELECT `entity_id` FROM catalog_product_entity_varchar WHERE `store_id` = 1)
) as entities, catalog_product_entity
WHERE entities.`entity_id` = catalog_product_entity.`entity_id`;
``` 

If you have SKU's in your Magento 2 database with store view values set you'll see a similar output with your SKU's. 

```
+--------------------------+
| sku                      |
+--------------------------+
| XXX01XXX                 |
| XXX02XXX                 |
| XXX03XXX                 |
| XXX04XXX                 |
| XXX05XXX                 |
| XXX06XXX                 |
| XXX07XXX                 |
| XXX08XXX                 |
| XXX09XXX                 |
| XXX10XXX                 |
| XXX11XXX                 |
| XXX12XXX                 |
+--------------------------+
12 rows in set (0.01 sec)
```

> Note: These results will show all products regardless of whether they are disabled or out of stock. This could mean the person reviewing the products may see lots of products that aren't displaying those fields on the Magento 2 frontend.

In a follow-up article I will be showing you how to build a command line module to output the same results but using Magento 2's cli command. This could be adapted to include further modifications to only show in stock or enabled products.