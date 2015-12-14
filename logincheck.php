<?php
	include("dbconnect.php");

	$email=$_POST["email"]; 

	$password=$_POST["password"];

	if(($email=="")or($password=="")){ 

		 echo "Please fill all information"; 

		 exit(); 

	 }else{ 

		 $query=mysql_query ("SELECT * FROM users WHERE email= $email  and
		password= $spassword ");

		 if (mysql_num_rows ($query)>0) {

			 $_SESSION[ email ] = "$email";

			 header("Refresh:1 ; url=loggedIndex.html");

			echo "Welcome $email ! You logged in now!<br>";

		 }else{

			echo "Email and password do not match. Please check it!";

		 }

	} 
?>
