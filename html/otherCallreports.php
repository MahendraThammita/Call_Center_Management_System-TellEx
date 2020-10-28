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
		document.getElementById("statsrc").style.display = "none";
		document.getElementById("timsrc").style.display = "block";
		document.getElementById("timsub").style.display = "block";
		}
		
		else if(val == 2)
		{
		document.getElementById("timsrc").style.display = "none";
		document.getElementById("statsrc").style.display = "none";
		document.getElementById("datesrc").style.display = "block";
		document.getElementById("timsub").style.display = "block";
		}
		
		else if(val == 3)
		{
		document.getElementById("datesrc").style.display = "none";
		document.getElementById("timsrc").style.display = "none";
		document.getElementById("statsrc").style.display = "block";
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
		<div class = "radselnew">
			<input  type = "radio" name = "solve" onchange = "showsrch1(1)" value = "abc1"/> Agent
			<input  type = "radio" name = "solve" onchange = "showsrch1(2)" value = "abc2"/> Inquery Type
			<input  type = "radio" name = "solve" onchange = "showsrch1(3)" value = "abc3"/> Status			
			</div>
		
		<div id = "timsrc">
		
			<div id = "id11">
			<b>Input Agent ID :</b> <input type = "Text" name = "AGnme" id = "id12" > 
			</div>
		</div>
		
		<div id = "datesrc">
		<h3 id = "timsrctit2">Select Inquery Type : </h3>
			<div id = "id2">
			<select name = "seltype" required class = "inqtype">
					<option value = "Billing">Billing</option>
					<option value = "Network issue">Network issue</option>
					<option value = "WIFI">WIFI</option>
					<option value = "Value added services">Value added services</option>
					<option value = "Other">Other</option>
			</select> 
			</div>
		</div>
		
		<div id = "statsrc">
		<h3 id = "timsrctit2">Select Solving status : </h3>
			<div id = "id2">
			<select name = "seltype1" required class = "inqtype">
					<option value = "Solved">Solved</option>
					<option value = "Unsolved">Unsolved</option>
			</select> 
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
	if($_GET['solve'] == "abc1")
	{
			$agent = $_GET['AGnme'];
			
			$sql = "select call_index , phone_NO , date , start_time , end_time , agent_ID , inquiry_type , status
					from calls3
					WHERE agent_ID = '$agent'
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

	
		if($_GET['solve'] == "abc2")
			
		{
			
			$iqtyp = $_GET['seltype'];
			
			$sql = "select call_index , phone_NO , date , start_time , end_time , agent_ID , inquiry_type , status
					from calls3
					where inquiry_type = '$iqtyp' 
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
		
		
		
		if($_GET['solve'] == "abc3")
			
		{
			$stime = $_GET['seltype1'];
			
			

			
			$sql = "select call_index , phone_NO , date , start_time , end_time , agent_ID , inquiry_type , status
					from calls3
					where  status = '$etime' 
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