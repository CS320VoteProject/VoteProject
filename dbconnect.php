<?php
$db_name="vote_project"

	$connect=mysql_connect("localhost", "root", "karateke23") or die
			("Could not connect to database!");

	mysql_select_db($db_name,$connect) or die ("Could not connect to database!);

	mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET COLLATION_CONNECTION= utf8_general_ci ");
?>
