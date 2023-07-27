---
extends: _layouts.post
id: 20230726
meta_title: Mastering MySQL Database Imports on Linux - A Comprehensive Guide
meta_description: Learn efficient ways to import MySQL databases on Linux using the mysql command-line client. Explore the --source option and < operator for seamless data migration. Master MySQL imports on Linux with our comprehensive guide.
title: Mastering MySQL Database Imports on Linux
short_intro: Learn efficient ways to import MySQL databases on Linux using the mysql command-line client. Explore the --source option and < operator for seamless data migration. Master MySQL imports on Linux with our comprehensive guide.
intro: Learn efficient ways to import MySQL databases on Linux using the mysql command-line client. Explore the --source option and < operator for seamless data migration. Master MySQL imports on Linux with our comprehensive guide.
published: 2023-07-26 20:16:43
hide: false
category: mysql
hero:
author: Clive Walkden
section: content
---

Importing a MySQL database is a common task for developers and system administrators when setting up new applications or migrating data. As a popular open-source relational database management system, MySQL offers a variety of methods to import databases via the Linux command line. In this comprehensive guide, we will explore different ways to import MySQL databases on Linux, with a special focus on using the mysql command-line client and the `--source` option.

## Method 1: Using MySQL Command-Line Client with `--source` Option
The MySQL command-line client provides a powerful option, `--source`, to import data from a file directly while also allowing you to enter the MySQL database for the import. Here's how to use it:

Step 1: Ensure that MySQL is installed on your Linux system. If it's not installed, you can do so using the package manager of your Linux distribution.

Step 2: Open a terminal and navigate to the directory containing the SQL file you wish to import.

Step 3: Enter the MySQL database where you want to import the data. You can do this by using the following command:
```shell
mysql -u your_username -p
```

Replace "your_username" with your MySQL username. You will be prompted to enter your MySQL password.

Step 4: Once you are inside the MySQL shell, use the `--source` option to import the database:
```shell
USE your_database_name;
SOURCE your_sql_file.sql;
```

Replace "your_database_name" with the name of the database you want to import into, and "your_sql_file.sql" with the name of the SQL file containing the data to import.

Using the `--source` option within the MySQL shell allows you to execute SQL commands directly from the file, eliminating the need to leave the shell and execute commands separately.

## Method 2: Using MySQL Command-Line Client with < Operator (Standard Input)
An alternative method to import a MySQL database is by using the < operator to read data from the SQL file, as well as entering the MySQL database within the command. Here's how to do it:

Step 1: Ensure that MySQL is installed on your Linux system.

Step 2: Open a terminal and navigate to the directory containing the SQL file you want to import.

Step 3: Use the following command to import the database and enter the MySQL database simultaneously:
```shell
mysql -u your_username -p your_database_name < your_sql_file.sql
```

Replace "your_username" with your MySQL username, "your_database_name" with the name of the database you want to import into, and "your_sql_file.sql" with the name of the SQL file containing the data.

## Conclusion:
When it comes to importing MySQL databases on Linux, the mysql command-line client offers powerful options for seamless data migration. Whether you choose to use the `--source` option within the MySQL shell or the < operator to enter the MySQL database and execute SQL commands, both methods provide efficient ways to import data from SQL files directly into your MySQL database. By following the steps outlined in this guide, you'll be well-equipped to handle MySQL database imports confidently and efficiently in your Linux environment.