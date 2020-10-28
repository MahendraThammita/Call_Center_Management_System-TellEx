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
	
		<title>Add Agent</title>
		<link rel = "stylesheet" type = "text/css" href = "../CSS/styles.css"> 
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
					<a href = "#">Add Agents</a>
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
					<a href = "management window.html">Manager window</a>
					<a href = "agents window.html">Agent window</a>
					<a href = "logout.php">Logout</a>
				</div>
			</div>
			
		</ul>
		
		<div id = "agentfrm">
			
		
			<h1 align = "center">ADD AGENT</h1><br/>
			<hr>
			<center>
			<form name = "agefrm" action ="add agent2.php" method = "get">
				<input type = "text" name = "cagid" class = "agenl" placeholder = "AG12345" required  pattern = "AG+[0-9]{5}"><br/><br/>
				<input type = "submit" id = "adagetd" value = "GET DETAILS">
			</form>
			<hr/>
			
			
			
			<h2>Basic information</h2>
			</center>
			<div id = "agentfl">
				<b>First Name : 
				<input type = "text" name = "fname" class = "agenl" placeholder = "Enter first name" required ><br/><br>
				Agent ID : 
				<input type = "text" name = "agid" class = "agenl" placeholder = "1234567A" required id = "agidbox" pattern = "AG+[0-9]{5}" ><br/><br/>
				Phone : 
				<input type = "phone" name = "fphone" class = "agenl" required required id = "agidbox1" pattern = "[0-9]{10}" ><br/><br/>
				Gender : 
				<input type = "text" name = "femail" class = "agenl" required id = "agidbox2" ><br/><br/>
				
			</div>
			<div id = "agentfr">
				<b>Last Name : 
				<input type = "text" name = "lname" class = "agenl" id = "agidbox5" ><br/><br>
				Language : 
				<input type = "text" name = "femail" class = "agenl" required id = "agidbox3" ><br/><br/>
				Current queue : 
				<input type = "text" name = "femail" class = "agenl" required id = "agidbox4" ><br/><br/>
			</div>
			
			
			<div class = "agflat">
			<hr>
			<center>
				<h2>ASSIGN TO QUEUE</h2>
			</center>
			
			<form>
				
				<div id = "agfid1">
				Assign to : <input type = "text" name = "newqu" id = "newqu"/>
				</div>
				<div id = "agfid2">
				Extension : <input type = "text" name = "newquex" id = "newquex"/>
				</div>
				<div id = "agfid3">
				status :
				<select class = "agtst">
					<option value = "Inbound">Inbound</option>
					<option value = "Outbound">Outbound</option>
				</select>
				</div>
				<br/>
				<div id = "agfid4">
				Date : <p id = "pid1">date</p>
				</div>
				<div id = "agfid5">
				Time : <p id = "pid2">Time</p>
				</div>
				
				<div class = "agentfrmbtn">
				<a href = "homepage.html"><input type = "button" name  = "agentfrmsubb" value = "Cancel"></a>
				<a href = "homepage.html"><input type = "submit" name  = "agentfrmsub" value = "Accept" id = "addagacc"  ></a>
				
			</div>
			
			</form>
			</div>
			
			
		
		</div>
		
		
		
		
		
		
		
		
		
		</div>

		
	
		
		
		<div id = "footerag">
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