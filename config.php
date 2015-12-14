<?php
	include ("dbconnect.php");

	$email=$_POST["email"];
	$sifre=$_POST["sifre"];

	if(($email=="") or ($sifre=="")){ 

		 echo "<br>Please fill all information"; 
		 exit(); 
			
	}else{ 

		$query=mysql_query("select * from users where email = $email");

		$counter=mysql_num_rows($query);

		 if ($counter!=0){ 

		 echo "<font size= 3 >This e-mail has been registered before. Please login.</font>";

		 }else{

		 $add =mysql_query("insert into users (email,password) value
		($email , $password)");

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
