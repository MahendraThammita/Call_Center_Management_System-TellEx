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
	
		<title></title>
		<link rel = "stylesheet" type = "text/css" href = "../CSS/afrid styles.css"> 
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
		
		<div class = "fstdiv" id  = "divs2">
			<h2 id = "dial2">Report</h2><br/>
			<hr>
			
			<button name = "mybtn2" class = "btn2clz" value = "All reports" id = "mybtnid1"><a href = "reports.html">All reports</button></a>
			<button name = "mybtn2" class = "btn2clz" value = "All reports" id = "mybtnid2"><a href = "Hourlycall report.html">Daily call repeat</button></a>
			<button name = "mybtn2" class = "btn2clz" value = "All reports" id = "mybtnid3"><a href = "Hourlycall report.html">hourley reports</button></a>
			<button name = "mybtn2" class = "btn2clz" value = "All reports" id = "mybtnid4"><a href = "Monthlycall">Monthly reports</button></a>
			<button name = "mybtn2" class = "btn2clz" value = "All reports" id = "mybtnid5"><a href = "reports.html">Salary reports</button></a>
				
		
		</div>
		
		<div class = "scnddiv" id  = "divs3">
			<h2 id = "dial3">Notice</h2><br/>
			<hr>
			<button name = "mybtn3" class = "btn3clz" value = "Add notice" id = "mybtnid1"><a href = "add details.html">Add notice</button></a>
			<button name = "mybtn3" class = "btn3clz" value = "Add notice" id = "mybtnid2"><a href = "add details.html">Mange notice</button></a>
			<button name = "mybtn3" class = "btn3clz" value = "Add notice" id = "mybtnid3"><a href = "contacts.html">Contacts</button></a>
			<button name = "mybtn3" class = "btn3clz" value = "Add notice" id = "mybtnid4"><a href = "homepage2.html">View Notice</button></a>
			
		
		</div>
		
		
		<div class = "thrddiv" id  = "divs2">
			<h2 id = "dial4">Agent</h2><br/>
			<hr>
			
			<button name = "mybtn4" class = "btn4clz" value = "Accounts page" id = "mybtnid1"><a href = "user profile2.html">Accounts page</button></a>
			<button name = "mybtn4" class = "btn4clz" value = "Accounts page" id = "mybtnid2"><a href = "add agent.html">Agent list</a></button></a>
			<button name = "mybtn4" class = "btn4clz" value = "Accounts page" id = "mybtnid3"><a href = "add agent.html">Mange agent</a></button></a>
		
		
		</div>
		
		
	<div id = "footermanwin">
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