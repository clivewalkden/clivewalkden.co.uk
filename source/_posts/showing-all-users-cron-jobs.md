---
extends: _layouts.post
id: 84
meta_title: Output all users cron jobs
meta_description: This command will show you how to output all users cron jobs
title: Output All Users Cron Jobs
short_intro: If you want to check all users cron jobs this little command will output them to the command line
intro: If you want to check all users cron jobs this little command will output them to the command line
published: 2017-11-21 00:00:00
hide: false
category: linux
hero:
author: Clive Walkden
section: content
---

Viewing all the cron jobs running on your system can be very useful. This command (which I found on <a href="https://stackoverflow.com/a/18028103/790561" target="_blank">Stack Overflow</a>, thanks to <a href="https://stackoverflow.com/users/638488/j%c3%b8rgen">J&oslash;rgen</a>) outputs all the jobs to the screen for you.

```shell
tail -n 1000 /var/spool/cron/*
```

I find this particularly useful when making sure all my <a href="/blog/magento/">Magento </a>sites are running the correct cron jobs at the correct intervals.

If you have more that a 1000 cron jobs you can update the number to display more.
