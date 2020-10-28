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


<!DOCKTYPE html>

<html>
	<head>
	
		<title>Home Page</title>
		<link rel = "stylesheet" type = "text/css" href = "../CSS/styles.css"> 
		<script src = "../js/scripts.js"></script>
		
		

	
	</head>
	<body>
	
		<div class = "navi">
		<ul class = "navi">
		
			<li class = "navi"><a class="top" href = "#">Home </a>  </li>
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
		
		<img  src = "../Images/text20.png" class = "viimg">
		
		<div class = "slid">
			<div class = "change">
				<img  src = "../images/pic0.png" align = "center" width = "1470px" height = "410px">
			</div>
			<div class = "change">
				<img  src = "../images/pic1.png" align = "center" width = "1470px" height = "410px">
			</div>
			<div class = "change">
				<img src = "../images/pic2.jpeg" align = "center" width = "1470px" height = "410px">
			</div>
			
			<a class = "prv" onclick = "nextimg(-1)">&#10094</a>
			<a class = "next" onclick = "nextimg(+1)">&#10095</a>
			
		</div>
		
		
		
		<div class = "habout">
			<p>TelEX is an online call center management system. This system allows to perform various tasks that are done in call centers. Currently these types of online systems and softwares are available in many call centers. As the other systems this system also includes number of features that are helping to maintain call centers in an efficient manner.
The intension of developing such kind of system is to “Improve the productivity of the call center by adding modern technology on it”. This system is named as TelEX.<br/>
All the users who use this system are needed to register with the system by providing their employee ID as the user name. After registration they are getting permission to login to the system and perform their tasks.
In this system we consider about 5 personas. They are the Call center manager, Call center supervisor, Call center analyst, Team leader and Call center representative (Agent). The system identifies each of them by their user name. Different users have different ways to access the features of the system and every
feature in the cannot be accessed by all five personas.<br/>
This system grants all the administrative powers to the Call center manager. This system facilitate users to handle incoming and outgoing calls, record calls, view call details, view monthly and daily reports, generate reports and publish some notices on the system also.</p>
		
		<div class = "lstrip">
			
		</div>
		
		
		</div>
		
		
		
		<div class = "texth">
			
			<div class = "best">
				<p><h2> Best Agents of week </h2></p>
				<ol>
					 <b><li> D.M mahen </li><br>
					<li> Sasitha gamge</li><br>
					<li>Afrid Zarook</li><br>
					<li> Thilini kanchana</li><br>
					<li>Vithurshan</li><br></b>
				</ol>
			</div>
			<div class = "events">
				<h2>Events</h2>
				<ol>
					<b><li> renival </li><br>
					<li> award ceromony</li><br>
					<li>christmas</li><br>
					<li> party</li><br>
					<li>New year</li><br></b>
				</ol>
			</div>
			<div class = "notice">
				<h2>Notice</h2>
				<ul>
				<b><li> renival </li><br>
					<li> award ceromony</li><br>
					<li>christmas</li><br>
					<li> party</li><br>
					<li>New year</li><br></b>
				</ul>
			</div>
			
			
		</div>
	
		
		
	
		
		
		<div id = "footerh">
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