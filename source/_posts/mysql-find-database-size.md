---
extends: _layouts.post
id: 20230201
meta_title: How to Find the Size of a MySQL Database from the Command Line
meta_description: If you are managing a MySQL database, you might want to know the size of your database for various reasons, such as monitoring its growth, optimizing storage space, or backing up data. The good news is that you can find the size of a MySQL database from the command line.
title: How to Find the Size of a MySQL Database from the Command Line
short_intro: This article will walk you through how to get the database size from the cli command
intro: If you are managing a MySQL database, you might want to know the size of your database for various reasons, such as monitoring its growth, optimizing storage space, or backing up data. The good news is that you can find the size of a MySQL database from the command line.
published: 2023-02-01 10:55:38
hide: false
category: mysql
hero:
author: Clive Walkden
section: content
---

If you are managing a MySQL database, you might want to know the size of your database for various reasons, such as monitoring its growth, optimizing storage space, or backing up data. The good news is that you can find the size of a MySQL database from the command line.

Here are the steps to find the size of a MySQL database:

### 1. Log in to the MySQL shell
The first step is to log in to the MySQL shell using the following command in your terminal:

```bash
mysql -u username -p
```

Replace "username" with the username that you use to log in to the MySQL server. You will be prompted to enter your password.

### 2. Connect to the database
Once you are logged in to the MySQL shell, you need to connect to the database that you want to find the size of. Use the following command to connect to a database:

```mysql
use database_name;
```

Replace "database_name" with the name of the database you want to connect to.

### 3. Find the size of the database
To find the size of the database, you can use the following SQL query:

```mysql
SELECT table_schema "Database Name", 
sum( data_length + index_length ) / 1024 / 1024 "Database Size in MB" 
FROM information_schema.TABLES 
GROUP BY table_schema;
```

Your result should be something similar to this
```mysql
+-----------------------+----------------------+
| Database Name         | Database Size in MB  |
+-----------------------+----------------------+
| information_schema    |           0.17187500 |
| mysql                 |          12.94631100 |
| your_database         |           0.06250000 |
| performance_schema    |           0.00000000 |
| sys                   |           0.01562500 |
+-----------------------+----------------------+
5 rows in set (0.37 sec)
```

This query will return the size of the database in megabytes.

### 4. Exit the MySQL shell
When you are done finding the size of the database, you can exit the MySQL shell by typing exit or quit and hitting the enter key.

That's it! With these simple steps, you can find the size of a MySQL database from the command line. This information can be useful for monitoring the growth of your database and making sure you have enough storage space.
