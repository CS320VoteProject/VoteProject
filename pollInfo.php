
<?php
    ob_start();
    include "dbconnect.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		  $question =$_POST['question'];
		  $answer1 = $_POST['answer1'];
		  $answer2 = $_POST['answer2'];
		  $answer3 = $_POST['answer3'];
		  $answer4 = $_POST['answer4'];
		  $answer5 = $_POST['answer5'];
		  $answer6 = $_POST['answer6'];
		  $answer7 = $_POST['answer7'];
		  $answer8 = $_POST['answer8'];
		  $answer9 = $_POST['answer9'];
		  $answer10 =$_POST['answer10'];
		  $submit = isset($_POST['submit']) ? $_POST['submit'] : null;
		  $sql = "INSERT INTO polls(question,choice1,choice2,choice3,choice4,choice5,choice6,choice7,choice8,choice9,choice10)
		  VALUES ('".$question."' , '".$answer1."', '".$answer2."', '".$answer3."', '".$answer4."', '".$answer5."',
		  '".$answer6."', '".$answer7."', '".$answer8."', '".$answer9."', '".$answer10."' )";
		  $add = mysql_query($sql);
		  if($add ==1){ 
			header("Location:pollPage.html");
		  }else{ 
			echo "Info could not write on database!";  
		  ob_end_flush();
		}
	  }
?>
