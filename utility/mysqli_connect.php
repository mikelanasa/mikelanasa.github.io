<?php
// mysqli_connect.php - Logon to MySQL and connect to the database

	$mysqli = mysqli_connect($myserver, $myuserid, $mypassword, $mydatabase)
			  or die('Could not connect to MySQLI server!' . mysqli_connect_error());
