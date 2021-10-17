---
extends: _layouts.post
id: 56
title: Showing hidden files in Mac OS X 10.7 and above
short_intro: Using my Mac laptop as a dev machine is great but sometimes I need my hidden files, here's how.
intro: Using my Mac laptop as a dev machine is great but sometimes I need to have access to all my files, including those which begin with a . such as .git or .ssh.
meta_title: Showing hidden files in Mac OS X 10.7 and above
meta_description: Using my Mac laptop as a dev machine is great but sometimes I need to have access to all my files, including those which begin with a . such as .git or .ss
published: 2013-05-01 06:20:00
hide: false
category: apple-mac
author: Clive Walkden
section: content
---

Using my Mac laptop as a dev machine is great but sometimes I need to have access to all my files, including those which begin with a &quot;.&quot; such as .git or .ssh.

Here's a quick terminal command which will show these by default.

To enable hidden files/folders in finder windows:

1. Open a terminal window
2. Copy and paste the following line in `defaults write com.apple.Finder AppleShowAllFiles YES`
3. Press return
4. Now hold &lsquo;alt&rsquo; on the keyboard and right click on the Finder icon
5. Click on Relaunch

When Finder relaunches you should see all your hidden files and folders. If you ever want to reverse the command and re-hide all hidden files and folders. Go through the same proceedure except change step 2 to:
```shell
defaults write com.apple.Finder AppleShowAllFiles NO
```


When Finder relaunches you will notice that all the hidden files and folders have now disappeared again.
