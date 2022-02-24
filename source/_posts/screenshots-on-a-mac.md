---
extends: _layouts.post
id: 41
title: Screenshots on a Mac
short_intro: Just a quick article outlining the different methods of capturing screen output on a Mac.
intro: Just a quick article outlining the different methods of capturing screen output on a Mac.
meta_title: Screenshots on a Mac
meta_description: Just a quick article outlining the different methods of capturing screen output on a Mac.
published: 2010-10-31 00:00:00
hide: false
category: apple-mac
hero:
author: Clive Walkden
section: content
---

Just a quick article outlining the different methods of capturing screen output on a Mac.

- Command-Shift-3: Take a screenshot of the screen, and save it as a file on the desktop (name is Screen shot YYYY-MM-DD at HH.MM.SS)
- Command-Shift-4, pointer changes, then select an area: Take a screenshot of an area and save it as a file on the desktop (Same filename as above)
- Command-Shift-4, then space, then click a window: Take a screenshot of a window and save it as a file on the desktop (same filename as above)
- Command-Control-Shift-3: Take a screenshot of the screen, and save it to the clipboard
- Command-Control-Shift-4, pointer changes, then select an area: Take a screenshot of an area and save it to the clipboard
- Command-Control-Shift-4, then space, then click a window: Take a screenshot of a window and save it to the clipboard


In Leopard and above, the following keys can be held down while selecting an area (via Command-Shift-4 or Command-Control-Shift-4):

- Space, to lock the size of the selected region and instead move it when the mouse moves
- Shift, to resize only one edge of the selected region
- Option, to resize the selected region with its center as the anchor point

### Formats

Different versions of Mac OS X have different formats for screenshots.

- Mac OS X 10.2 (Jaguar): jpg
- Mac OS X 10.3 (Panther): pdf
- Mac OS X 10.4 (Tiger) and later: png

In Mac OS X 10.4 and later, the default screenshot format can be changed, by opening Terminal (located at /Applications/Utilities/Terminal) and typing in:

```shell
defaults write com.apple.screencapture type image_format killall SystemUIServer
```

Where image_format is one of jpg, tiff, pdf, png, bmp or pict (among others). If you omit the second line, you will need to log out and in again for the change to take effect.

### Using Grab and Preview

Instead of using the keyboard shortcuts above, screenshots can be taken by using the Grab application included with Mac OS X. It is located at /Applications/Utilities/Grab.

In Mac OS X 10.4, the Preview application can also be used to take screenshots, by using the Grab submenu in the File menu.

This article has been written with the help of <a href="http://guides.macrumors.com/Taking_Screenshots_in_Mac_OS_X" rel="nofollow" target="_blank">Mac Rumours</a> mainly because i can never remember the correct key sequence for screen shots.
