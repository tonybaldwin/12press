<?php
// create tables for 12press database
// run this ONLY ONCE, after install
// make sure first you have created your db

include 'config.php';

// Make a MySQL Connection
mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db("$dbname") or die(mysql_error());

// Create a MySQL table in the selected database
mysql_query("CREATE TABLE meetings(
id INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(id),
 meetingname VARCHAR(100),
 day varchar(5),
 Time varchar(200),
 Street varchar(200),
 city varchar(100),
 state varchar(100),
 zip varchar(20),
 maplink varchar(50),
 description varchar(500))")
 or die(mysql_error());  

echo "Meeting Table Created!";

mysql_query("CREATE TABLE events(
id INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(id),
 name VARCHAR(100),
 date VARCHAR(20),
 street varchar(200),
 city varchar(20),
 state varchar(20),
 zip varchar(20),
 flylink varchar(200),
 provsys varchar(200),
 notes varchar(500))")
 or die(mysql_error());  

echo "Events Table Created!";

mysql_close();
?>
