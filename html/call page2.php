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
	
		<title>calling window</title>
		<link rel = "stylesheet" type = "text/css" href = "../CSS/styles.css"> 
		<script type="text/javascript">
		function custchck() 
{
	if(document.forms["dialform"]["First name"].value == "")
	{
		alert("please enter the first name ");
		return false;
	}
	if(document.forms["dialform"]["telephone"].value == "")
	{
		alert("please enter the phone number");
		return false;
	}
	
	if(document.forms["dialform"]["NIC"].value == "")
	{
		alert("please enter the NIC number ");
		return false;
	}
	
	if(document.forms["dialform"]["solve"].value == "")
	{
		alert("please mention the solving status ");
		return false;
	}
	
	else
	{
		document.getElementById("submbtn").disabled = false;
		alert("call ended successfully");
		
		var time = new Date();
		var etime = time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds();
		
		document.getElementById("cllend").value = etime;
	}
	
}
		
		</script>

		
		

	
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
		
		<div  class = "dial">
		<div class = "padbak">
		
		</div>
			<img src = "../images/agent.png"  height = "180px" width = "180px" style = "position: absolute; left:25%; top: 10px;">
			
				<input type = "image" src = "../images/answer.png" class = "cimg" id = "answer1" >
				<input type = "image" src = "../images/end.png" class = "cimg" id = "cutcll" onclick = "custchck()">
				<input type = "image" src = "../images/hold.png" class = "cimg" onclick = "hideform()"><br>
				<input type = "image" src = "../images/record.png" class = "cimg" onclick = "hideform()">
				<input type = "image" src = "../images/transfer.png" class = "cimg" onclick = "hideform()"><br><br>
				<p id = "ans11"><b>Answer</b></p>
				<p id = "end11"><b>End</b></p>
				<p id = "hol11"><b>Hold</b></p>
				<p id = "rec11"><b>Record</b></p>
				<p id = "trn11"><b>Transfer</b></p>
			<form method = "get" action = "" id = "getfrm">
				<input type = "phone" name = "callnumb" pattern = "[0-9]{10}" class = "dispnumb" id = "vatnum" >
				
			</form>
			
		
			
			<table class = "dialptab">
				<tr>
					<td><button class = "npadbtn" id = "nop1" name = "AA1" onclick = "dial(name)">1</button></td>
					<td><button class = "npadbtn" id = "nop2" name = "AA2" onclick = "dial(name)">2</button></td>
					<td><button class = "npadbtn" id = "nop3" name = "AA3" onclick = "dial(name)">3</button></td>
				</tr>
				<tr>
					<td><button class = "npadbtn" id = "nop4" name = "AA4" onclick = "dial(name)">4</button></td>
					<td><button class = "npadbtn" id = "nop5" name = "AA5" onclick = "dial(name)">5</button></td>
					<td><button class = "npadbtn" id = "nop6" name = "AA6" onclick = "dial(name)">6</button></td>
				</tr>
				<tr>
					<td><button class = "npadbtn" id = "nop7" name = "AA7" onclick = "dial(name)">7</button></td>
					<td><button class = "npadbtn" id = "nop8" name = "AA8" onclick = "dial(name)">8</button></td>
					<td><button class = "npadbtn" id = "nop9" name = "AA9" onclick = "dial(name)">9</button></td>
				</tr>
				<tr>
					<td><button class = "npadbtn" id = "nop*" name = "AA*" onclick = "dial(name)">*</button></td>
					<td><button class = "npadbtn" id = "nop0" name = "AA0" onclick = "dial(name)">0</button></td>
					<td><button class = "npadbtn" id = "nop#" name = "AA#" onclick = "dial(name)">#</button></td>
				</tr>
			</table>
		</div>
		
		
		
		
		
		<form name = "dialform" class = "dialform" id = "dialing" action = "SubmitCallDetails.php" method = "post">
		
			
			<h1 align = "center">Customer details</h1><br/><br/>
			
			
			
		
			<div class = "custop">
			<h2 id = "unhed">Basic information</h2>
			Nic :<br/>
			<input type = "text" name = "NIC" placeholder = "012445678V" class ="formin" pattern = "[0-9]{9}+V" required ></br>
			First name : <br/>
			<input type = "text" name = "First name" placeholder = "Enter the Name" id = "unmtchbtn" required ><br/>
			Last name : </br>
			<input type = "text" name = "lastname" placeholder = "Last Name" class ="formin" ><br/>
			Phone Number : </br>
			<input type = "phone" name = "telephone" placeholder = "0123456789" class ="formin" pattern = "[0-9]{10}" required value = <?php echo $_COOKIE['number']; ?>><br/>
			
			</div>
			
			<div id = "custdec">
			</div>
			
			<div id = "custrght">
			<h2>Address</h2>
			Address Line 1 :<br/>
			<input type = "text" name = "address line 1"  class ="formin" ><br/>
			
			Address line 2 : <br/>
			<input type = "text" name = "Address Line 2" class ="formin" ><br/>
			
			City : <br/>
			<input type = "text" name = "City"  class ="formin" ><br/>
			
			Province : <br/>
			<input type = "text" name = "province" class ="formin" ></br>
			
			
			</div>
			
			<br/>
			
			
			<div id = "custbtm">
			Email : 
			<input type = "email" name = "email" placeholder = "abc@gmail.com" pattern = "[a-z0-9._%=-]+@[a-z0-9.-]+\.[a-z]{2,3}" class ="formin" ><br/>
			<br/>
			
			<h2>Problem Status</h2><br/>
			
			Inquiry Type:
			<select name = "seltype" required class = "inqtype">
					<option value = "Billing">Billing</option>
					<option value = "Network issue">Network issue</option>
					<option value = "WIFI">WIFI</option>
					<option value = "Value added services">Value added services</option>
					<option value = "Other">Other</option>
			</select><br/><br/>
			
			
			Solving Status : 
			<input type = "radio" name = "solve" required value = "Solved"> Solved
			<input type = "radio" name = "solve" required value = "Unsolved"> Unsolved<br/><br/>
			Problem Description :<br/> 
			<textarea name = "description" rows = "8" cols = "70" class ="formin"></textarea><br/><br/>
			
			
			
			
			</div>
			
			<div class = "calldet">
			<h2>Call Details</h2><br/>
			<?php
				$cdate = date("Y-m-d");
				$atime = date("H:i:s");
			?>
			Date : <input name = "date" type = "data" class ="formin1" value = "<?php echo $cdate ?>" >	
			Start Time : <input name = "stime" type = "text" class ="formin1"  value = "<?php echo $atime ?>">	
			End Time : <input name = "etime" type = "text" class = "formin1" id ="cllend"><br/><br/>
			<center>
			<button type = "submit" id = "submbtn" value = "Submit" disabled><b>Submit</b></button><br/><br/><br/>
			</center>
			</div>
		
		</form>
	
		
		
	
		
		
		<div id = "footerc">
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