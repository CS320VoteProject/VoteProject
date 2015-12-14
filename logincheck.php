<?php
	include("dbconnect.php");

	$username=$_POST["username"]; 

	$password=$_POST["password"];

	if(($email=="")or($password=="")){ 

		 echo "Please fill all information"; 

		 exit(); 

	 }else{ 

		 $query=mysql_query ("SELECT * FROM users WHERE username= $username  and
		password= $spassword ");

		 if (mysql_num_rows ($query)>0) {

			 $_SESSION[ username ] = "$username";

			 header("Refresh:1 ; url=loggedIndex.html");

			echo "Welcome $username ! You logged in now!<br>";

		 }else{

			echo "Email and password do not match. Please check it!";

		 }

	} 
?>
