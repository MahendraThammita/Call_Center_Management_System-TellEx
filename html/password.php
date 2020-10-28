<?php

include 'config.php';

if(!isset($_SESSION['usname']))
{
	echo "<script>
		alert('You are not logged in');
		window.location.href='select page.html';
		</script>";
}

?>

<DOCTYPE html>
<html>
<head>
	<title> Change Password </title>
	<link rel = "stylesheet" type = "text/css" href = "../CSS/stylepw.css"> 
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
		</br>
		
		
		
		<form name = "agefrm" action ="SubmitEditPW.php" method = "post" id = "chnpwfrm">
		
			<center><h1>CHANGE PASSWORD </h1></center></br></br></br></br>
			
			<div id = "chnpw">
				
				</br></br></br></br>
				<center><b>CURRENT PASSWORD : 
				<input type = "password" name = "oldpw" class = "agenl" placeholder ></br></br></br></br>
				 NEW PASSWORD: 
				<input type = "password" name = "newpw" class = "agenl" placeholder   ></br></br></br></br>
				CONFORM PASSWORD :
				<input type = "password" name = "conpw" class = "agenl" placeholder   ></br></br></br></br>
				
				<input type = "submit" value = "SUBMIT" id = "chnsub"></br></br>
					
			</div>	
		</form>	
		</div>
		
		
		
		
	
		
		<div id = "foterchn">
			<hr>
			<p>
				Copyright 2018 © TellEX. All Rights Reserved.<br>
				<a href = "#">https://www.TellEX.lk</a>  |  <a href = "#"> info@tellex.lk</a> 
			</p>
			<p id = "sessdis">
				<?php	echo $_SESSION['Fname']." ". $_SESSION['Lname'] ?><br/>
				You are logged in as <?php echo $_SESSION['usname']	?><br>
				<a href = "logout.php">Logout</a>
			</p>
		</div>

	
	</body>
	
	











</html>