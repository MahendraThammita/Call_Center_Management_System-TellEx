<?php
	include "config.php";
	
	$pno = $_POST['telephone'];
	$date = $_POST['date'];
	$stim =$_POST['stime'];
	$etim = $_POST['etime'];
	$nic = $_POST['NIC'];
	$des = $_POST['description'];
	$iqtype = $_POST['seltype'];
	$stat = $_POST['solve'];
	
	$agid1 = $_SESSION['usname'];
	
	$sql = "INSERT INTO calls3(phone_NO , date , start_time , end_time , agent_ID , NIC , Description , inquiry_type , status)
			VALUES ('$pno' , '$date' , '$stim' , '$etim' , '$agid1' , '$nic' , '$des' ,  '$iqtype' , '$stat')";
			
		if(mysqli_query($conn , $sql))
		{
				
			echo "<script>
			alert('Record Saved Successfully');
			window.location.href='call page0.php';
			</script>";		

		}
		else
		{
			echo "<script>alert('Error : Could not able to execut')</script>";
		
		}
				
?>