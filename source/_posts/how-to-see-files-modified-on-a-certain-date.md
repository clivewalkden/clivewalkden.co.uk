---
extends: _layouts.post
id: 82
meta_title: How to see files changed on a certain date
meta_description: As a sysadmin you often need to see which files have been modified on a certain date.
title: How to see files changed on a certain date
short_intro: As a sysadmin you often need to see which files have been modified on a certain date.
intro: As a sysadmin you often need to see which files have been modified on a certain date. This little snippet will show you those files.
published: 2016-12-02 00:00:00
hide: false
category: linux
hero:
author: Clive Walkden
section: content
---

There are a number of times I need to check and see what files have been modified on a given date. This little command line snippet is the way to do this, You can also pipe it through less or more if you have a long list and want to easily look through it.

### Snippet

```shell
find /path -newermt yyyy-mm-dd
```

### Example

```shell
find /var/www/domain.com -newermt 2016-12-02
```

### Return

```shell
/var/www/domain.com/htdocs/index.html
/var/www/domain.com/htdocs/css/style.css
```

If you have a really long list of files you can pipe the command through less or more using the following snippet.

```shell
find /path -newermt yyyy-mm-dd | less
```
