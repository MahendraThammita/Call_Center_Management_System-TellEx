<?php

include 'config.php';



?>
<!DOCKTYPE html>
<html>
	<head>
	
		<title>Agents login page</title>
		<link rel = "stylesheet" type = "text/css" href = "../CSS/shan_style.css"> 
		<script src = "../js/scripts.js"></script>
		
		

	
	</head>
	<body>
	
		<div class = "navi">
		<ul class = "navi">
		
			<li class = "navi"><a class="top" href = "homepage2.php">Home </a>  </li>
			<li class = "navi"><a class = "top" href = "user.php">My page</a></li>
			<li class = "navi"><a class = "top" href = "select page.html">Login</a></li>
			<li class = "navi"><a class= "top" href = "register.php">Register</a></li>
		
		
		</ul>	
		</div>
		
		<img  src = "../Images/logo.jpg" class = "logo" align = "left" width = "175px" height = "200px" >
		<img src = "../Images/cover.png" class = "cover" align = "left" width = "1360px" height = "150px">
	
		
		<ul class = "drpbar">
			<div class = "drpdwn">
				<li class = "drpbtn">Agent</li>
				<div class = "dropcont">
					<a href = "add agent.php">Add Agents</a>
					<a href = "reports.php">Reports</a>
					
				</div>
			
			</div>
			<div = class = "drpdwn">
				<li class = "drpbtn">settings</li>
				<div class = "dropcont">
					<a href = "password.php">Change password</a>
					<a href = "about_us.html">Contact Us</a>
				
				</div>
			
			</div>
			<div class = "drpdwn">
				<li class = "drpbtn">Calls</li>
				<div class = "dropcont">
					<a href = "call page0.php">Inbound dialing window</a>
					<a href = "call page0.php">Outbound dialing window</a>
				</div>
			
			</div>
			
			<div class = "drpdwn">
				<li class = "drpbtn">Accounts</li>
				<div class= "dropcont">
					<a href = "user.php">View My Accounts</a>
					<a href = "management window.php">Manager window</a>
					<a href = "agents window.php">Agent window</a>
					<a href = "logout.php">Logout</a>
				</div>
			</div>
			
		</ul>
		


		<form action = "ValidateLogin.php" method = "post" class = "logform">
			<h2 align = "center">USER ID</h2>
			<input type = "text" name = "lgnme" required id = "loggettex" placeholder = "AG12345" pattern = "AG+[0-9]{5}"></input><br/>
			<h2 align = "center">PASSWORD</h2>
			
			<input type = "password" required id = "loggettex" name = "logpw"></input><br/>
			
			<input type = "submit" required id = "logmbtn"  value = "LOGIN" href = "homepage2.html" ></input><br/>
			
			<a href = "register.html"><input type = "button"  id = "logreg" value = "REGISTER" ></button></a>
			
			
		</form>
		
	
		<img src = "../images/gif2.gif" class = "logimg"></img>
		<div class = "logdiv">
		</div>
		
		<h1 id = "agtitl">Agents Login</h1>
		
	
		
		
		<div id = "footermlog">
			<hr>
			<p>
				Copyright 2018 © TellEX. All Rights Reserved.<br>
				<a href = "#">https://www.TellEX.lk</a>  |  <a href = "#"> info@tellex.lk</a> 
			</p>
			
		</div>

	
	</body>
	
	











</html>