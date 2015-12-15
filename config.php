<?php
    ob_start();
    include "dbconnect.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email=$_POST["email"];
		$password=$_POST["password"];
		$username=$_POST["username"];
		$submit = isset($_POST['submit']) ? $_POST['submit'] : null;
		$sql="select * from users where email = '".$email."' and username = '".$username."'";
		$query=mysql_query($sql);
		$counter=mysql_num_rows($query);
		if ($counter!=0){ 
			echo "<font size= 3 >This user has been registered before. Please check information.</font>";
		}else{
			$sql2 = "INSERT INTO users(email, password, username) VALUES ('".$email."','".$password."','".$username."')";
			$add = mysql_query($sql2);
			 if($add >= 0){ 
				echo "<br>You have registered successfully!
				Please click. ";
				header("Location:regedIndex.html");
			 }else{ 
				echo "Info could not write on database!"; 

			 } 
			ob_end_flush();
		}
	  }
?>
