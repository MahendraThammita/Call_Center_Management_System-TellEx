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
	<title>Monthly call report</title>
	<link rel = "stylesheet" type = "text/css" href = "../CSS/sasitha styles.css"> 
	<script src = "../js/scripts.js"></script>
	<script type="text/javascript">
	
	function showsrch1(val)
	{
		if(val == 1)
		{
		document.getElementById("datesrc").style.display = "none";
		document.getElementById("timsrc").style.display = "block";
		document.getElementById("timsub").style.display = "block";
		}
		
		else if(val == 2)
		{
		document.getElementById("timsrc").style.display = "none";
		document.getElementById("datesrc").style.display = "block";
		document.getElementById("timsub").style.display = "block";
		}
		
		else if(val == 3)
		{
		
		document.getElementById("timsub").style.display = "block";
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
	
	<center>
	
	<div class = "srchsp">
		<h1>Monthly Call Report</h1>
		<center>
			<h3>Select report : </h3>
			
		
		<form class = "srchselfrm" method = "get" action = "#">
		<div class = "radsel">
			<input  type = "radio" name = "solve" onchange = "showsrch1(1)"/> Time
			<input  type = "radio" name = "solve" onchange = "showsrch1(2)"/> Date
			<input  type = "radio" name = "solve3" onchange = "showsrch1(3)" value = "abc"/> All			
			</div>
		
		<div id = "timsrc">
		<h3 id = "timsrctit">Select time range : </h3>
			<div id = "id1">
			Start time : <input type = "time" name = "sndsrchstim" placeholder = "13:00:00">  TO <input type = "time" name = "sndsrchstim2" placeholder = "13:00:00">
			</div>
		</div>
		
		<div id = "datesrc">
		<h3 id = "timsrctit2">Select Date : </h3>
			<div id = "id2">
			Date : <input type = "date" name = "sndsrch"> 
			</div>
		</div>
		
		
		<button type = "submit" id = "timsub" value = "Search">Search</button>
		</form>
		</center>
	</div>
	
	
	<table  class = "mnthcll">
		<tr>
			<th>Call index<br/></th>
			<th>Phone Number<br/></th>
			<th>Date<br/></th>
			<th>Start Time<br/></th>
			<th>End Time<br/></th>
			<th>Agent<br/></th>
			<th>Inquery<br/>type</th>
			<th>Status<br/></th>
		</tr>
		
		
	<?php
	if(isset($_GET['solve3']))
	{
	
			$sql = "select call_index , phone_NO , date , start_time , end_time , agent_ID , inquiry_type , status
					from calls3
					ORDER BY call_index DESC";
			
			$out = mysqli_query($conn , $sql ) ;
			
			if(mysqli_num_rows($out) > 0)
			{
				while($val = mysqli_fetch_assoc($out))
				{
					
					
					echo "<tr><td>".$val['call_index'].
							"</td><td>".$val['phone_NO'].
							"</td><td>".$val['date'].
							"</td><td>".$val['start_time'].
							"</td><td>".$val['end_time'].
							"</td><td>".$val['agent_ID'].
							"</td><td>".$val['inquiry_type'].
							"</td><td>".$val['status'].
							"</td></tr>";
	
					
				}
			}
	}

	
		if(isset($_GET['sndsrch']))
			
		{
			$date = $_GET['sndsrch'];
			
			$sql = "select call_index , phone_NO , date , start_time , end_time , agent_ID , inquiry_type , status
					from calls3
					where date = '$date' 
					ORDER BY call_index DESC";
			
			$out = mysqli_query($conn , $sql ) ;
			
			if(mysqli_num_rows($out) > 0)
			{
				while($val = mysqli_fetch_assoc($out))
				{
					
					
					echo "<tr><td>".$val['call_index'].
							"</td><td>".$val['phone_NO'].
							"</td><td>".$val['date'].
							"</td><td>".$val['start_time'].
							"</td><td>".$val['end_time'].
							"</td><td>".$val['agent_ID'].
							"</td><td>".$val['inquiry_type'].
							"</td><td>".$val['status'].
							"</td></tr>";
	
					
				}
			}

		}
		
		
		
		if(isset($_GET['sndsrchstim']))
			
		{
			$stime = $_GET['sndsrchstim'];
			$etime = $_GET['sndsrchstim2'];
			

			
			$sql = "select call_index , phone_NO , date , start_time , end_time , agent_ID , inquiry_type , status
					from calls3
					where start_time BETWEEN '$stime' AND '$etime' 
					ORDER BY call_index DESC";
			
			$out = mysqli_query($conn , $sql ) ;
			
			if(mysqli_num_rows($out) > 0)
			{
				while($val = mysqli_fetch_assoc($out))
				{
					
					
					echo "<tr><td>".$val['call_index'].
							"</td><td>".$val['phone_NO'].
							"</td><td>".$val['date'].
							"</td><td>".$val['start_time'].
							"</td><td>".$val['end_time'].
							"</td><td>".$val['agent_ID'].
							"</td><td>".$val['inquiry_type'].
							"</td><td>".$val['status'].
							"</td></tr>";
	
					
				}
			}

		}
			
		?>
		
	</table>
	</center>	
</body>
<div id = "footersrep">
		<hr>
		<p>	Copyright 2018 © TellEX. All Rights Reserved.<br>
			<a href = "#">https://www.TellEX.lk</a>  |  <a href = "#"> info@tellex.lk</a> 
		</p>
		<p id = "sessdis">
				<?php	echo $_SESSION['Fname']." ". $_SESSION['Lname'] ?><br/>
				You are logged in as <?php echo $_SESSION['usname']	?><br>
				<a href = "logout.php">Logout</a>
		</p>
	</div>
</html>