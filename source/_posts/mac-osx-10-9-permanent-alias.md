---
extends: _layouts.post
id: 68
meta_title: Creating a permanent alias shortcut in Mac OS X 10.9
meta_description: I find creating aliases is a real time saver in terminal. Some of the most useful involve starting or stopping certain services such as Apache or MySQL.
title: Creating a permanent alias shortcut in Mac OS X 10.9
short_intro: I find creating aliases is a real time saver in terminal.
intro: I find creating aliases is a real time saver in terminal. Some of the most useful involve starting or stopping certain services such as Apache or MySQL. To create a new alias you need to open up your .bash_profile file.
published: 2014-04-03 18:50:49
hide: false
category: apple-mac
hero:
author: Clive Walkden
section: content
---

I find creating aliases is a real time saver in terminal. Some of the most useful involve starting or stopping certain services such as Apache or MySQL. To create a new alias you need to open up your .bash_profile file which is located in your user home directory. Nano is my terminal editor of choice so i open up the file directly from the command line using the following:

```shell
nano ~/.bash_profile
```

If this is a new install then the bash_profile might be empty, if you&rsquo;ve installed RVM or other programs they may have already created the file and added their own requirements. Either way we don&rsquo;t need to modify anything that has already been entered. Move the cursor to the end of the file and we can add our alias as follows:

```shell
alias phpini="sudo nano /etc/php.ini"
```

Once the file is saved and the bash is restarted this alias will be available to use. But let&#39;s break down what we&rsquo;ve just created. <code class="language-bash">alias phpini</code> This is saying that we want bash to recognise that whenever phpini is entered as a command that we want to do something with it. <code class="language-bash">&quot;sudo nano /etc/php.ini&quot;</code> This is saying that the alias phpini should run the following code. sudo means run the command after as root user (which is needed for php.ini) nano is the program we need to run and /etc/php.ini is the location of the php.ini file that i want to edit. So you can see it can be quite simple to add some alias&rsquo;s to your .bash_profile and save yourself remembering complicated commands. Here are a few that i use frequently:

```shell
alias mysqlstart="sudo /Library/StartupItems/MySQLCOM/MySQLCOM start"
alias mysqlstop="sudo /Library/StartupItems/MySQLCOM/MySQLCOM stop"
alias mysqlstatus="ps aux | grep mysql | grep -v grep"

alias editvhosts="sudo nano /etc/apache2/extra/httpd-vhosts.conf"
alias edithosts="sudo nano /etc/hosts/"
alias phpini="sudo nano /etc/php.ini"

alias serverstop="sudo apachectl stop"
alias serverstart="sudo apachectl start"
alias serverrestart="sudo apachectl restart"

alias composer="/usr/bin/composer.phar"
```
