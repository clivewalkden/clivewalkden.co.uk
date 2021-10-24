---
extends: _layouts.post
id: 81
meta_title: Setting Nano as the default crontab commandline editor
meta_description: If you prefer to use nano over vim in command line you can use the export the VISUAL value.
title: Setting Nano as the default crontab commandline editor
short_intro: If you prefer to use Nano over Vim in command line you can use the export the VISUAL value.
intro: If you prefer to use Nano to edit the crontab file instead of Vim you can run this command to specify Nano as the default editor.
published: 2016-06-14 00:00:00
hide: false
category: linux
hero:
author: Clive Walkden
section: content
---

There are lots of people that love using Vim in command line. I prefer Nano and this is a quick guide to changing your system to use Nano.

```shell
EDITOR=nano crontab -e
```

To save permanently you can run the following command to set Nano as the default editor.

```shell
export VISUAL=nano; crontab -e
```

To revert to Vim run the following if you prefer Vim is better.

```shell
export VISUAL=vim
```
