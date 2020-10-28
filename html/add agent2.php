<?php
	include 'config.php';
			
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
			<li class = "navi"><a class = "top" href = "user profile2.html">My page</a></li>
			<li class = "navi"><a class = "top" href = "select page.html">Login</a></li>
			<li class = "navi"><a class= "top" href = "register.html">Register</a></li>
		
		
		</ul>	
		</div>
		
		<img  src = "../Images/logo.jpg" class = "logo" align = "left" width = "175px" height = "200px" >
		<img src = "../Images/cover.png" class = "cover" align = "left" width = "1360px" height = "150px">
	
		
		<ul class = "drpbar">
			<div class = "drpdwn">
				<li class = "drpbtn">Agent</li>
				<div class = "dropcont">
					<a href = "add agent.html">Add Agents</a>
					<a href = "reports.html">Agent reports</a>
					
				</div>
			
			</div>
			<div = class = "drpdwn">
				<li class = "drpbtn">settings</li>
				<div class = "dropcont">
					<a href = "add agent.html">Add agents</a>
					<a href = "about_us.html">Contact Us</a>
				
				</div>
			
			</div>
			<div class = "drpdwn">
				<li class = "drpbtn">Calls</li>
				<div class = "dropcont">
					<a href = "call page.html">Inbound dialing window</a>
					<a href = "call page.html">Outbound dialing window</a>
				</div>
			
			</div>
			
			<div class = "drpdwn">
				<li class = "drpbtn">Accounts</li>
				<div class= "dropcont">
					<a href = "user profile2.html">View My Accounts</a>
					<a href = "management window.html">Manager window</a>
					<a href = "agents window.html">Agent window</a>
					<a href = "homepage.html">Logout</a>
				</div>
			</div>
			
		</ul>
		
		<div id = "agentfrm">
			
		
			<h1 align = "center">ADD AGENT</h1><br/>
			<hr>
			<center>
			<form name = "agefrm" action ="#" method = "get">
				<input type = "text" name = "cagid" class = "agenl" placeholder = "AG12345" required  pattern = "AG+[0-9]{5}"><br/><br/>
				<input type = "submit" id = "adagetd" value = "GET DETAILS">
			</form>
			<hr/>
			
			<?php
				
				$agid = $_GET['cagid'];
				
				$qurry = "SELECT Fname , Lname , Gender , Language , queue_NO
							FROM agent
							WHERE agent_ID = '$agid'";
							
				setcookie("agid" , "$agid" );
							
				$ans = mysqli_query($conn , $qurry);
				
				if(mysqli_num_rows($ans) > 0)
				{
					while($arr = mysqli_fetch_assoc($ans))
					{
						$Fname = $arr['Fname'];
						$Lname = $arr['Lname'];
						$Gender = $arr['Gender'];
						$Language = $arr['Language'];
						$queue_NO = $arr['queue_NO'];
						
						
					}
					
					$fullnme = $Fname." ".$Lname;
					
					setcookie("agname" , "$fullnme");
					
					$qurry2 = "SELECT phone
							FROM agent_contact
							WHERE agent_ID = '$agid'";
							
					$ans2 = mysqli_query($conn , $qurry2);
					
					if(mysqli_num_rows($ans2) > 0)
					{
						while($arr2 = mysqli_fetch_assoc($ans2))
						{
							$phone = $arr2['phone'];
						}
						
					}
					
				}
				else
				{
					echo "<script>
						alert('Invalid agent ID');
						window.location.href='add agent.php';
						</script>";
				}
				
				echo $phone;
			
			?>
			
			<h2>Basic information</h2>
			</center>
			<div id = "agentfl">
				<b>First Name : 
				<input type = "text" name = "fname" class = "agenl" placeholder = "Enter first name" required value = "<?php echo $Fname ?>"><br/><br>
				Agent ID : 
				<input type = "text" name = "agid" class = "agenl" placeholder = "1234567A" required id = "agidbox" pattern = "AG+[0-9]{5}" " value = "<?php echo $agid ?>" ><br/><br/>
				Phone : 
				<input type = "phone" name = "fphone" class = "agenl" required required id = "agidbox1" pattern = "[0-9]{10}" value = "<?php echo $phone ?>"><br/><br/>
				Gender : 
				<input type = "text" name = "femail" class = "agenl" required id = "agidbox2" value = "<?php echo $Gender ?>"><br/><br/>
				
			</div>
			<div id = "agentfr">
				<b>Last Name : 
				<input type = "text" name = "lname" class = "agenl" id = "agidbox5" value = "<?php echo $Lname ?>"><br/><br>
				Language : 
				<input type = "text" name = "femail" class = "agenl" required id = "agidbox3" value = "<?php echo $Language ?>"><br/><br/>
				Current queue : 
				<input type = "text" name = "femail" class = "agenl" required id = "agidbox4" value = "<?php echo $queue_NO ?>"><br/><br/>
			</div>
			
			
			<div class = "agflat">
			<hr>
			<center>
				<h2>ASSIGN TO QUEUE</h2>
			</center>
			
			<form method = "get" action = "SubmitAdd agent.php">
				
				<div id = "agfid1">
				Assign to : <input type = "text" name = "newqu" id = "newqu"/>
				</div>
				<div id = "agfid2">
				Extension : <input type = "text" name = "newquex" id = "newquex"/>
				</div>
				<div id = "agfid3">
				status :
				<select class = "agtst" name = "agstat">
					<option value = "Inbound">Inbound</option>
					<option value = "Outbound">Outbound</option>
				</select>
				</div>
				<br/>
				
				<?php
					$date = date("Y-m-d");
					$time = date("H:i:s");
				?>
				<div id = "agfid4">
				Date : <input id = "pid1" name = "assidate" value = "<?php echo $date ?>"/>
				</div>
				<div id = "agfid5">
				Time : <input id = "pid2" name = "assitime" value = "<?php echo $time ?>"/>
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
		</div>

	
	</body>
	
	











</html>