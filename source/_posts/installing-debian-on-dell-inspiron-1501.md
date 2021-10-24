---
extends: _layouts.post
id: 52
title: Installing Debian Linux on  Dell Inspiron 1501
short_intro: Ever wondered how to install linux wireless network drivers on your Dell Inspiron 1501.
intro: Ever wondered how to install linux wireless network drivers on your Dell Inspiron 1501. I've recently given it a go and succeeded. Follow this guide and you'll soon have your laptop running smoothly.
meta_title: Installing Debian Linux on  Dell Inspiron 1501
meta_description: Ever wondered how to install linux wireless network drivers on your Dell Inspiron 1501.
published: 2011-12-09 00:00:00
hide: false
category: linux
hero:
author: Clive Walkden
section: content
---

<p>&nbsp;</p>

Recently I've been setting up Debian Linux on a Dell Inspiron 1501 that I've had lying around refusing to load windows. While the install and setup procedure has been quite easy, I have found that the wireless device doesn't want to work. This is a bit of a problem as I don't want to be tied to 1 room in my house. After lots of Googling and cursing at failed attempts I have found a solution that works.

Open /etc/apt/sources.list

Click Third-Party Software tab

Add deb http://ftp.us.debian.org/debian squeeze main contrib non-free

Click Close

Open Root Terminal

type `aptitude update`

wait for the system to get the new package information

type `aptitude install wireless-tools`

Wait for those to download and install

type `aptitude install firmware-b43-installer`

Again wait for these to download and install.

type `reboot` and the machine will restart your wireless light will turn on before you get to your login screen. Upon logging in you will be able to connect your Dell Inspiron 1501 to a wireless network and surf wirelessly till you hearts content

I hope this helps if you have a Dell Inspiron 1501 or any other laptop with Broadcom wireless device based on the b43 driver.
