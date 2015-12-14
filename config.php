<?php
	include ("dbconnect.php");

	$email=$_POST["email"];
	$password=$_POST["password"];
	$username=$_POST["username"];

	if(($email=="") or ($password=="") or ($username==""){ 

		 echo "<br>Please fill all information"; 
		 exit(); 
			
	}else{ 

		$query=mysql_query("select * from users where email = $email");

		$counter=mysql_num_rows($query);

		 if ($counter!=0){ 

		 echo "<font size= 3 >This e-mail has been registered before. Please login.</font>";

		 }else{

		 $add =mysql_query("insert into users (email,username,password) value
		($email , $username, $password )");

			 if($add){ 

				echo "<br><a href=regedIndex.html>You have registered successfully!

				Please click. </a>";

			 }else{ 

				 echo "Info could not write on database!"; 

				 exit(); 

			 } 

		 }

	 }

 } 

	else { 
	
		exit ();
	
	}
	
?>
