<?php
	include 'config.php';
	
	$usname = $_POST['lgnme'];
	$uspwd = $_POST['logpw'];
	
	echo "<br/>".$usname."<br/>".$uspwd;
	
	$sqlm = "SELECT* FROM manager
			WHERE manager_ID = '$usname'";
			
			
	$values = mysqli_query($conn , $sqlm);
			
			if(mysqli_num_rows($values) > 0)
			{
				while($vars = mysqli_fetch_assoc($values))
				{
					$Fname = $vars['Fname'];
					$Lname = $vars['Lname'];
					$DOB = $vars['DOB'];
					$Gender = $vars['Gender'];
					$Email = $vars['Email'];
					$Address = $vars['Address'];
					$Password = $vars['Password'];
				}
				
				echo "<br/>".$Fname."<br/>".$Lname."<br/>".$DOB."<br/>".$Gender."<br/>".$Email."<br/>".$Address."<br/>".$Password;
				
				if($Password == $uspwd)
				{
					
					$_SESSION['Fname'] = $Fname;
					$_SESSION['Lname'] = $Lname;
					$_SESSION['DOB'] = $DOB;
					$_SESSION['Gender'] = $Gender;
					$_SESSION['Address'] = $Address;
					$_SESSION['usname'] = $usname;
					
					echo "<script>
					alert('You logged in successfully');
					window.location.href='homepage2.php';
					</script>";
					
					
				}
				else
				{
					echo "<script>
						alert('Your password is incorrect');
						window.location.href='mlogin.php';
						</script>";
				}
				
			
			}
			
			else
			{
				echo "<script>
					alert('Your User name is incorrect');
					window.location.href='mlogin.php';
					</script>";
			}
?>