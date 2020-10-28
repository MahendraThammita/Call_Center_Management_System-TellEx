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

<!DOCTYPE html>
<html>
	<head>
		
		<title>TelEX Registration</title>
		<link rel = "stylesheet" type = "text/css" href = "../CSS/sasitha styles.css"> 
		<script>
	function checkPassword()
	{
	if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value)
	{
		alert("Password Mis Match");
		return false;
	}
	else
	{
		alert("Success");
		return true;
	}

}
function enableButton(){
	if(document.getElementById("checkbox").checked)
	{
		document.getElementById("submitBtn").disabled = false;
	}
	else{
		document.getElementById("submitBtn").disabled = true;
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
		
		</br></br></br></br></br></br></br></br></br></br></br></br></br>
	<center>
	
	<form method= "POST" class="form"border="1" width="5px"action="submitReg.php" onsubmit="return checkPassword()" >
	<div>
		<h1><b><font color="#ff0000">Register</font></b></h1><br/><br/>
		<b>User Name:</b><br>
		<input type="text" name="username" placeholder="username"required><br><br/>
		<b>Password:</b><br>
		<input type="password" name="pwd" id="pwd" pattern="(?=.+\d)(?=.+[a-z])(?=.+[A-Z].{5,10})"required><br><br/>
		<b>Re-Enter Password:</b><br>
		<input type="password" id="cnfrmpwd"required><br><br/>

	</div>
	</form>	
	
	<form class="form"action="submitReg.php" onsubmit="return checkPassword()" method ="POST">
	<div>
		<b>First Name:</b><br>
		<input type="text"name="firstname"placeholder="firstname"required><br><br/>
		<b>Last Name:</b><br>
		<input type="text"name="lastname"placeholder="lastname"required><br><br/>
		<b>Employee Type:</b>
		<select name ="Emp"required>
			<option value = "Manager">Manager</option>
			<option value = "Supervisor">Supervisor</option>
			<option value = "Teamleader">Team leader</option>
			<option value = "Agent">Agent</option>
			<option value = "Customer">Customer</option>
		</select><br><br>	
		<b>NIC:</b><br>
		<input type="text" name="nic"placeholder="123456789V"required><br><br>
		<b>ID:</b><br>
		<input type="text" name="id" placeholder="XY12425" required><br><br>
		<b>Gender:</b>
		<input type="radio" value ="Male"name="gender"checked>Male
		<input type="radio" value = "Female" name="gender"checked>Female	<br><br/><br>
		<form action="submitReg.php">
			Date of Birth:
			<input type="date" name="bday">
			<input type="submit">
		</form><br><br>
		<b>Addresss:</b><br>
		<textarea name="address" rows="5" cols="40"required></textarea></br></br>
		<b>Email:</b><br>
		<input type="email"name="email"placeholder="abc@gmail.com"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></br></br>
		
		<b>Country:</b>
		<select required>
			<option value="SriLanka">SriLanka</option>
			<option value="USA">USA</option>
			<option value="Newzeland">Newzeland</option>
			<option value="India">India</option>
			<option value="UK">UK</option>
			<option value="Austrailia">Austrailia</option>
			<option value="Singapour">Singapour</option>
			<option value="China">China</option>
		</select></br></br></br>
		<b>Language:</b>
		<select name ="language" required>
			<option value ="English">English</option>
			<option value ="Sinhala">Sinhala</option>
			<option value ="Tamil">Tamil</option>
		</select><br><br><br>
		<b>Mobile:</b></br>
		<input type="phone"name="mobile"pattern="[0-9]{10}"required></br></br>
		<input class="inputStyle" id="checkbox"type="checkbox"onclick="enableButton()"/>I Accept Terms & Conditions</br></br>
		<a href = "privacy policy.html">Privacy policy</a><br/><br/>
		<input type="submit" id="submitBtn"value="submit"disabled>
	</center>
	</div>
	</form>
	</body>	
	
	</div>

</html>