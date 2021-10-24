---
extends: _layouts.post
id: 69
meta_title: Running Linux Commands in the Background
meta_description: If you've ever wondered how to run a command in the background of your linux terminal then this article will show you all you need to know.
title: Running Linux Commands in the Background
short_intro: Ever wanted to run commands in the background of your terminal. Using this extra keystroke you can.
intro: If you've ever wondered how to run a command in the background of your linux terminal then this article will show you all you need to know.
published: 2014-04-08 00:00:00
hide: false
category: linux
hero:
author: Clive Walkden
section: content
---

When running a large complex command or time consuming command such as moving a large quantity of files from one drive to another or running a mass rename script, your terminal will become locked and only become available when that command has finished running.

To bypass this and run the command in the background simply append an &amp; to the command. You will then be given a process ID of the command as it runs in the background.

### Syntax:

```shell
command &
```

Here is a working example. I want to move all my .arw files from one drive to another, as i have quite a few large arw files this process takes up a lot of time. I also tend to access my linux box via ssh so don&#39;t want multiple connections to the terminal. This is the command i run:

```shell
mv *.arw /media/photos/ &
```

To see what jobs you have running use the following command

```shell
jobs
```

The following is a sample output that will be returned by this command

```shell
[1]+ Running mv *.arw /media/photos/ &
```

The [1] returned is the job ID, if you want to see the process ID then pass the -l option as below

```shell
jobs -l
```

This will return the same information as the main command but also include the process ID which is&nbsp; useful if you want to kill a process. See sample output below:

```shell
[1]+ 30125 Running mv *.arw /media/photos/ &
```

If you want to bring the job to the foreground use the following syntax:

```shell
%JOB_ID
```

so for our example:

```shell
%1
```

This will then show the command that you are running with any output in my case it will just display:

```shell
mv *.arw /media/photos/
```

To send it to the background again simply `ctrl + z` and then `%1 &` this will run it again in the background
