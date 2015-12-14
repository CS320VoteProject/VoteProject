<?php
  include ("dbconnect.php");
  
  if(isset($_POST['username'])) {
    $question = $_POST['question'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];
    $answer6 = $_POST['answer6'];
    $answer7 = $_POST['answer7'];
    $answer8 = $_POST['answer8'];
    $answer9 = $_POST['answer9'];
    $answer10 = $_POST['answer10'];
   
    
	$add =mysql_query("insert into questions (question,option1,option1,option2,option3,option4,option5,option6,option7,option8,option9,option10) value
		($question , $answer1, $answer2, $answer3, $answer4, $answer5, $answer6, $answer7, $answer8, $answer9, $answer10 )");
		
		if (mysql_num_rows ($add)>0) {
			header("Refresh:1 ; url=createdPoll.html");

			echo "Poll has been created by $username !
			<br>Thanks!";
		}
  }
?>
