<?php include "dbconnect.php"; ?>
<html>
	<head>
	<link type="text/css" rel="stylesheet" href="main.css"/>
	<script type="text/javascript">
	</script>
	<title>Vote Project</title>
	</head>
	<body>
		<div id="header">
			
		<div id="left" style="width: 500px;
				height: 100px; margin: 10px 15px 10px 8px;">
				<a href="loggedIndex.php">
					<img src="images/logo.png">
				</a>
			</div>
			<div id="right">
				<div id="content" align="right">
					&nbsp;<a href="logout.php">Sign Out</a>
				</div>
			</div>
		</div>
		<form action="" method="get">
			<ul id="answersList">
					Question: 
					<?php 
						echo "<li>";
						
						$query = "SELECT * FROM questions WHERE question_id = 2";
						$result = mysql_query($query);
								while($row = mysql_fetch_array($result)){   
									echo $row['question'] . "?</br></br></br>";
									echo "<input type=radio id=answer1/>" .$row['answer1']. "</br>" ;
									echo "<input type=radio id=answer2/>" . $row['answer2'] . "</br>" ;
									echo "<input type=radio id=answer3/>" . $row['answer3'] . "</br>" ;
									echo "<input type=radio id=answer4/>" . $row['answer4'] . "</br>" ;
									echo "<input type=radio id=answer5/>" . $row['answer5'] . "</br>" ;
									echo "<input type=radio id=answer6/>" . $row['answer6'] . "</br>" ;
									echo "<input type=radio id=answer7/>" . $row['answer7'] . "</br>" ;
									echo "<input type=radio id=answer8/>" . $row['answer8'] . "</br>" ;
									echo "<input type=radio id=answer9/>" . $row['answer9'] . "</br>" ;
									echo "<input type=radio id=answer10/>" . $row['answer10'] . "</br>" ;
								"</li>";}
							  ?>
					 </br>
					</br></br></br>
					<input type="submit" class="btn" name="submit" value="Submit"/>
			</ul>
		</form>
	</body>
</html>
