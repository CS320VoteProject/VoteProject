
<?php

//BU TAMAMLANMADI ÜZERİNDE ÇALISMA DEVAM EDECEK!!!
    ob_start();
    include "dbconnect.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		  $question =$_GET['question'];
		  $answer1 = $_GET['answer1'];
		  $answer2 = $_GET['answer2'];
		  $answer3 = $_GET['answer3'];
		  $answer4 = $_GET['answer4'];
		  $answer5 = $_GET['answer5'];
		  $answer6 = $_GET['answer6'];
		  $answer7 = $_GET['answer7'];
		  $answer8 = $_GET['answer8'];
		  $answer9 = $_GET['answer9'];
		  $answer10 =$_GET['answer10'];
		  $submit = isset($_GET['submit']) ? $_GET['submit'] : null;
		  $sql = "SELECT * FROM polls WHERE id=3"
		  
		  $add = mysql_query($sql);
		  
		  ob_end_flush();
		}
	  }
?>

  


