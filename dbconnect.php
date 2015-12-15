	<?php
	$db_name="vote_project";
	define("DB_PASSWORD", null);
		$connect=mysql_connect("localhost", "root", null) or die
				("Could not connect to database!");

		mysql_select_db($db_name,$connect) or die ("Could not connect to database!");

		
		
	?>
