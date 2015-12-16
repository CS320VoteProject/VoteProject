<?php
	ob_start();
	include "dbconnect.php";
	$username=$_POST["username"]; 
	$password=$_POST["password"];
	$username=stripslashes($username);
	$password=stripslashes($password);
	$username=mysql_real_escape_string($username);

		$sql="SELECT * FROM users WHERE username= '".$username."' and
			password= '".$password."'";
		$query = mysql_query ($sql);
		$count = mysql_num_rows ($query);
		 if ($count == 1) {

			 
			$_SESSION[ 'username' ] = "$username";
			echo "Welcome $username ! <br>You logged in now! ";
			 header("Location:loggedIndex.html");

			

		 }else{

			echo "Username and password do not match. Please check it! <a href=index.php> Click to return Main Page </a>";
			
			ob_end_flush();
		 }
	
?>
