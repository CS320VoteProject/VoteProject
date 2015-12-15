<!DOCTYPE HTML>
<!-
    Vote Project 2015
    Created for CS 320 Software Engineering Course in Özyeğin University
->

<html>
	<head>
	<link type="text/css" rel="stylesheet" href="main.css"/>
	<script language="JavaScript" type="text/javascript">
		function validateLoginForm () {
				var mail = document.login.email.value;
				var pw = document.login.password.value;
				
				localStorage.setItem("mail",mail);
				var cormail = "aaaaaa";
				var corpw = "11111111";
			
				if (mail==null || mail=="" || pw==null || pw=="") {
					alert("Error: E-mail and password must be entered ");
					return false;
				}
				if(mail.length<5){
					alert("Your e-mail address must be at least \n5 characters long. \n Please try again.");
					return false;
				}
				if(pw.length<8) {
					alert("Your password must be at least \n8 characters long. \n Please try again.");
					return false;
				} else {
					if(mail==cormail && pw==corpw){
						alert ("Logged in successfully!")
						window.location = "loggedIndex.html";
						return true;
					} else {
						$.ajax({
							type: "POST",
							url: "ayar.php",
							data: { mail:mail, pw:pw }
						}).done(function(data) {
							if(echo "Logged in" >= 0) {
								alert ("Logged in successfully!")
								window.location = "loggedIndex.html";
								return true;
							} else if(echo "Invalid login information!" >= 0){
								alert ("Please check your login information!")
								return false;
							}
							
						}
					}
				}
			}
			
			function createLoginInfo() {
				var mail = document.register.email.value;
				var pw = document.register.password.value;
				
				if (mail==null || mail=="" || pw==null || pw=="") {
					alert("Error: E-mail and password must be entered ");
					return false;
				}
				if(mail.length<5){
					alert("Your e-mail address must be at least \n5 characters long. \n Please try again.");
					return false;
				}
				if(pw.length<8) {
					alert("Your password must be at least \n8 characters long. \n Please try again.");
					return false;
				} else {
					<!-- db will be processing -->
				}
			}
			
		// function popupBox(showhide){
		//	if(showhide == "show"){
			//	if(document.getElementById('lgn')) {
			//		document.getElementById('lgn').style.visibility="visible";
			//	} else if(document.getElementById('reg')) {
			//		document.getElementById('reg').style.visibility="visible";
			//	}
		//	}else if(showhide == "hide"){
			//	if(document.getElementById('lgn')) {
			//		document.getElementById('lgn').style.visibility="hidden"; 
			//	} else if(document.getElementById('reg')) {
			//		document.getElementById('reg').style.visibility="hidden";
		//		}
		//	}
		//} 
	</script>
		<title>
		Vote Project
		</title>
	</head>
	<body>
		<div id="logo">
			<div id="left" style="width: 500px;
				height: 100px; margin: 10px 15px 10px 8px;">
				<a href="index.php">
					<img src="images/logo.png">
				</a>
			<div id="right" style="position: relative; left:1200px; bottom:100px">
				<div class="btn" id="btnlgn" style="float:right">
					<a href="register.php"> Register</a>
				</div>
				<div class="btn" id="btnlgn" style="float:right">
					<a href="login.php"> Login</a>
				</div>
				
			</div>
		</div>
		
		<div class="desc" id="description">
			<header>
				<h1></br></br>
				  VOTE Project
				</h1>
			</header>
		
					Vote Project is a website where a user creates his/her surveys and <br/>
            share it with related users in order to observe the panoramic sight of <br/>
            the topics which are polled among the users.
            
            <br/><br/>Vote Project works with any kind of browsers by creating a new <br/>
            survey or declaring the idea like choosing an existing choice or <br/>
            creating a new choice to survey.
				
		</div>
		
		<div id="contacts">
			<footer id="footer">
				<ul class="icons">
					<li>
						<a href="https://twitter.com/voteproject"> <img src="images/twitter.svg"></a>
						<a href="https://facebook.com/voteproject"> <img src="images/facebook.svg"></a>
						<a href="https://github.com/CS320VoteProject/VoteProject"> <img src="images/github.svg"></a>
					</li>
				</ul>
			</footer>
		</div>
		<script type="text/javascript">
			
		</script>
		
	</body>
</html>
