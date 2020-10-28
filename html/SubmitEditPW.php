<?php

include 'config.php';

if(!isset($_SESSION['usname']))
{
	echo "<script>
		alert('You are not logged in');
		window.location.href='select page.html';
		</script>";
}



		
			$usname = $_SESSION['usname'];
		
			$curpw = $_POST['oldpw'];
			$newpw = $_POST['newpw'];
			$conpw = $_POST['conpw'];
			
			$qurry = "SELECT Password
						FROM agent
						WHERE agent_ID = '$usname'";
			
			$jobin = mysqli_query($conn , $qurry);
					
					if(mysqli_num_rows($jobin) > 0)
					{
						while($detail = mysqli_fetch_assoc($jobin))
						{
							$oldpw = $detail['Password'];
							
						}
					}
					
			
			
			if($curpw == $oldpw)
			{
				if($newpw == $conpw)
				{
					$qurry1 = "UPDATE agent
						SET Password = '$newpw'
						WHERE agent_ID = '$usname'";
					
					if(mysqli_query($conn , $qurry1))
					{
						echo "<script>
						alert('YOUR PASSWORD IS CHANGED');
						window.location.href='user.php';
						</script>";
					}
					else
					{
						echo "<script>
						alert('query cannot be executed');
						window.location.href='user.php';
						</script>";
					}
				}
				else
				{
				echo "<script>
					alert('PASSWORDS ARE NOT MATCHING : please re-enter passwords');
					window.location.href='password.php';
					</script>";
				}
			}
			else
			{
				echo "<script>
					alert('YOU ENTERED AN INVALID PASSWORD');
					window.location.href='password.php';
					</script>";
			}
		


?>