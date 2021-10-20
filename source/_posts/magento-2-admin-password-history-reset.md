---
extends: _layouts.post
id: 83
meta_title: Magento 2 admin password history reset
meta_description: Do you want to clear the password history on your staging test site (not recommended for live)?
title: Magento 2 admin password history reset
short_intro: Do you want to clear the password history on your staging test site (not recommended for live)?
intro: Magento 2 (by default) forces admin users to reset their passwords every 90 days. This is great for security and I'm extremely happy that I don't have to remind clients to update their password every x number of days.
published: 2017-08-08 00:00:00
hide: false
category: magento-2
hero: magento-2-admin-password-history-reset.png
author: Clive Walkden
section: content
---

Magento 2 (by default) forces admin users to reset their passwords every 90 days. This is great for security and I&#39;m extremely happy that I don&#39;t have to remind clients to update their password every x number of days.

The only issue I have is that the staging environment admin is worked on by many different people in the office and we like a consistent password for this development process. Rather than turning the system off and the settings being pushed to the live site accidentally we can access the database and reset the password history for a user.

When you access your database you should see something similar to the below image.

<img alt="Magento 2 Admin Password history table" src="/assets/images/blog/articles/admin_passwords.png" style="width: 650px; height: 307px;" title="Magento 2 admin_passwords Table" />

This table records the user, password hash, the date the password expires and the time it was last updated. If you try to change your password in the Magento 2 Admin area it will check this table against the new password and reject the change if it matches your new hash against any hash recorded against your user.

In my example I'm going to update the user_id 1. Simply delete all **but the last record** for that user. In this case it would be records 3, 4, 8, 9. Now when I change my password I can use something that has been used before without Magento 2 returning an error.

> **Important**
> 
> **Please do not do this on a live environment as it is there to protect your admin accounts security.**
