---
extends: _layouts.post
id: 63
title: Turning off your CentOS Firewall
short_intro: Ever wondered how to turn off your firewall on CentOS. Here's how.
intro: If you need to relax your server firewall policy in CentOS then this short guide shows you how.
meta_title: How to turn off the Firewall on CentOS
meta_description: If you need to relax your server firewall policy in CentOS then this short guide shows you how.
published: 2013-10-13 08:21:00
hide: false
category: linux
hero:
author: Clive Walkden
section: content
---

If you are having issues connecting to your CentOS machine and think that the firewall could be causing the issue then here is how to disable it.

```shell
# service iptables save
# service iptables stop
# chkconfig iptables off
```

When you've finished your testing you can re-enable the firewall with the following.

```shell
# service iptables start
# chkconfig iptables on
```

This helped me a lot when trying to determine whether my machine or router was blocking connection to a certain port.
