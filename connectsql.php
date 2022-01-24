<?php
	$connectsql = new PDO('sqlite:db/dbsql.sqlite3');
	$connectsql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "CREATE TABLE IF NOT EXISTS todolists (todotasksid INTEGER PRIMARY KEY, todotasksname VARCHAR (255) NOT NULL, statustask TEXT, startdate DATE, completeddate DATE)";
	$connectsql->exec($query);

?>