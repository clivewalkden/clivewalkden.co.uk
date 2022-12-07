---
extends: _layouts.post
id: 20220728
meta_title: Magento 2 How to identify duplicate product URLs
meta_description: Magento 2 How to identify duplicate product URLs in the database.
title: How to identify duplicate product URLs
short_intro: Magento 2 How to identify duplicate product URLs in the database.
intro: Magento 2 How to identify duplicate product URLs in the database.
published: 2022-07-28 14:50:00
hide: false
category: magento-2
hero:
author: Clive Walkden
section: content
---

We recently had reports from a client that products were failing with an error stating that the product URL was already in use.

I decided to look and see what existing products would cause the problem while we dug into the cause of the problem.

In this article, I'll run through the MySQL queries run and the reason behind them so we can see which products are affected. I hope this article helps others find duplicated product URLs in Magento 2.

We'll start with the attribute `url_key` in my database it's 121 but it may not be in other installations. To get the value we'll run the following
```mysql
SELECT eav_attribute.attribute_id FROM eav_attribute WHERE attribute_code = 'url_key' AND entity_type_id = '4';
``` 
This query will check product-specific attributes named `url_key`.

With that value know we can work on checking the `catalog_product_entity_varchar` table for the duplicated URLs. To do that we will be grouping the `value` field and counting the results. Any over 1 is a duplicate.

```mysql
SELECT `value`
FROM `catalog_product_entity_varchar`
WHERE `attribute_id` = 121 AND `store_id` = 0
GROUP BY `value`
HAVING COUNT(`value`) > 1
```

We are running this against the default store view, if you want to run against other stores change the `store_id` = 0 to the store in question.

To combine this into a single query we can change the `121` absolute value to the sub-query we generated earlier.

```mysql
SELECT `value`
FROM `catalog_product_entity_varchar`
WHERE `attribute_id` = (
    SELECT `eav_attribute`.`attribute_id` 
    FROM `eav_attribute` 
    WHERE `attribute_code` = 'url_key' AND `entity_type_id` = '4'
    ) 
AND `store_id` = 0
GROUP BY `value`
HAVING COUNT(`value`) > 1
```

We found a total of 7 duplicated URLs. We can now notify the customer that they need to update those 7 products while we dig further into where the issue came from.

I hope this helps you find any similar issues in your stores and saves needless support time. If we determine the what caused the duplication problem, I'm sure I'll add an article on that.
