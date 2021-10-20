---
extends: _layouts.post
id: 67
meta_title: Accessing MySQL through the command line
meta_description: Accessing MySQL through the command line
title: Accessing MySQL through the command line
short_intro: Accessing MySQL through the command line
intro: Accessing MySQL through the command line
published: 2014-02-11 08:14:00
hide: true
category: mysql
hero:
author: Clive Walkden
section: content
---

This article has been written for people using Mac OSX. Some commands may work on other OS&#39;s.

Since installing MySQL on my MacBook i&#39;ve been using it for local development quite a bit. I use public transport to get to work and the reliability of using my mobile phone to keep a constant internet connection is somewhat frustrating.

The following command allows you to access MySQL from terminal.

```shell
mysql -u root -p
```

After typing this you will be prompted to enter your password. Once correctly entered you will notice the cursor pointer changes to mysql&gt;. Every command you enter in MySQL command line ends with a ; if you ommit this you will be presented with another line to follow you previous command.

To show all your databases type.

```mysql
show databases;
```

This will list them all in a table.

To create a new database called database_name use the command.

```mysql
create database database_name;
```

To set the default database for commands type.

```mysql
use database_name;
```

To show the tables with the associated database type.

```mysql
show tables;
```

To import a .sql backup into the system use the following command outside of mysql.

```shell
mysql -u root -p database_name &lt; file.sql
```

To export a .sql backup out of the system use the following command outside of the mysql command line.

```shell
mysqldump -u root -p database_name &gt; file.sql
```

To export a single table out of the system use the following command.

```shell
mysqldump -u root -p database_name table_name > file.sql
```

To exit the MySQL command prompt enter.

```mysql
quit;
```
