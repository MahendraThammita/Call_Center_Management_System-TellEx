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
	<title> USER PROFILE </title>
	<link rel = "stylesheet" type = "text/css" href = "../CSS/styleshan.css"> 
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
		
		<?php
					
					$Fname = $_SESSION['Fname'];
					$Lname = $_SESSION['Lname'];
					$DOB = $_SESSION['DOB'];
					$Gender = $_SESSION['Gender'];
					$Address = $_SESSION['Address'];
					$Language = $_SESSION['Language'];
					$Email = $_SESSION['Email'];
					$usname = $_SESSION['usname'];
					
					$data = "SELECT *
								FROM agent
								WHERE agent_ID = '$usname'";
								
					$jobin = mysqli_query($conn , $data);
					
					if(mysqli_num_rows($jobin) > 0)
					{
						while($detail = mysqli_fetch_assoc($jobin))
						{
							$Basicsal = $detail['Basicsal'];
							$queue_NO = $detail['queue_NO'];
						}
					}
					
					
			
		?>
		
		<div class = "uahead">
			<center><h1>WELCOME...!</h1></center><br/><br/>
			<h1>USER PROFILE OF : <?php echo $Fname . " " . $Lname  ?></h1>
		</div>
		<div id = "agentform">
		<form class = "agefrm" action ="#" method = "post"></br></br></br></br>
			
			
			
			<div id = "agentfl">
			<h1>BASIC INFORMATION </h1><center></center>
				<b>USER NAME : 
				<input type = "text" name = "fname" class = "agenl" id = "ua02" required disabled value = "<?php echo $Fname . " " . $Lname  ?>"> <br/><br>
				 LANGUAGE : 
				<input type = "text" name = "agid" class = "agenl"  id = "ua03" required disabled value = "<?php echo $Language  ?>"> <br/><br>
				GENDER :
				<input type = "text" name = "agid" class = "agenl"  id = "ua04" required disabled value = "<?php echo $Gender  ?>"> <br/><br>
				DATE OF BIRTH :
				<input type = "text" name = "agid" class = "agenl" id = "ua01" required  disabled value = "<?php echo $DOB  ?>"> <br/><br>
				Email :
				<input type = "text" name = "agid" class = "agenl" id = "ua05" required  disabled value = "<?php echo $Email  ?>"> <br/><br>
				ADDRESS :
				<input type = "text" name = "agid" class = "agenl"  id = "ua06" required  disabled value = "<?php echo $Address  ?>"> <br/><br>
			</div>
			<div id = "agentfr">
				
				<img src = "../Images/man.png"></br></br>
				
				<b>USER ID    :
				<input type = "text"  name = "myFile" id = "ua10" value = "<?php echo $usname  ?>"></br></br>
				<b>USER NAME  : 
				<input type = "text" name = "agid" class = "agenl" id = "ua11" required disabled value = "<?php echo $Fname . " " . $Lname  ?>"> <br/><br>
				<hr>
				
			</div>

			<div id = "usaccset">
				<h1> SETTINGS</h1>
				<b>
				<a href = "password.php" style = "text-decoration : none;">Change password</a>
				
			</div>

			<div id = "usaccjob">
				<h1>JOB INFO</h1>
				<b> job title :
				<input type = "text" name = "agid" class = "agenl" id = "ua07" required  disabled value = "CaLL Center Agent"><br/><br>
				<b> CURRENT QUEUE :
				<input type = "text" name = "agid" class = "agenl" id = "ua08"  disabled value = "<?php echo $queue_NO  ?>">><br/><br>
				<b> BASIC SALARY :
				<input type = "department id " name = "fdepartment" class = "agenl" required id = "ua09" value = "<?php echo $Basicsal  ?>"><br/><br/>
				
			</div>
				
			
			
			
		</form>	
		</div>
		
		
		
		
		
		
		
		
		
		</div>

		
	
		
		
		<div id = "footerag1">
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