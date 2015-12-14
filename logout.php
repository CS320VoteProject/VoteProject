<?php

	session_start();
	session_destroy();

	header("location:index.html");

	echo "See You Again!";

?>
