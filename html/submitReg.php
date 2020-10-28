<?php
	include 'config.php';
	$value = $_POST['Emp'];
	
	
	if($value == 'Manager')
	{
		$ID = $_POST['id'];
		$Fname = $_POST['firstname'];
		$Lname = $_POST['lastname'];
		$DOB =$_POST['bday'];
		$Gender=$_POST['gender'];
		$Email = $_POST['email'];
		$Address = $_POST['address'];
		$contact = $_POST['mobile'];
		
		$sql = "INSERT INTO manager (manager_ID,Fname,Lname,DOB,Gender,Email,Address) VALUES('$ID','$Fname','$Lname','$DOB','$Gender','$Email','$Address')";
		
		
		mysqli_query($conn,$sql);
		
		
		header("location:homepage2.php");
	
	}
	else if($value == 'Supervisor'){
		$ID = $_POST['id'];
		$Fname = $_POST['firstname'];
		$Lname = $_POST['lastname'];
		$DOB =$_POST['bday'];
		$Gender=$_POST['gender'];
		$Language = $_POST['language'];
		$Email = $_POST['email'];
		$Address = $_POST['address'];
		$contact = $_POST['mobile'];
		
		$sql = "INSERT INTO supervisor (supervisor_ID,Fname,Lname,DOB,Gender,Language,Email,Address) VALUES('$ID','$Fname','$Lname','$DOB','$Gender','$Language','$Email','$Address')";

		
		mysqli_query($conn,$sql);
		
		header("location:homepage2.php");
	
	}
	else if($value == 'Teamleader')
	
	{
		$ID = $_POST['id'];
		$Fname = $_POST['firstname'];
		$Lname = $_POST['lastname'];
		$DOB =$_POST['bday'];
		$Gender=$_POST['gender'];
		$Language = $_POST['language'];
		$Email = $_POST['email'];
		$Address = $_POST['address'];
		$contact = $_POST['mobile'];
		
		$sql = "INSERT INTO team_leader (leader_ID,Fname,Lname,DOB,Gender,Language,Email,Address) VALUES('$ID','$Fname','$Lname','$DOB','$Gender','$Language','$Email','$Address')";
		
		
		mysqli_query($conn,$sql);
		
		
		header("location:homepage2.php");
	
	}
	
	else if($value == 'Agent'){
		$ID = $_POST['id'];
		$Fname = $_POST['firstname'];
		$Lname = $_POST['lastname'];
		$DOB =$_POST['bday'];
		$Gender=$_POST['gender'];
		$Language = $_POST['language'];
		$Email = $_POST['email'];
		$Address = $_POST['address'];
		
		$sql = "INSERT INTO agent (agent_ID,Fname,Lname,DOB,Gender,Language,Email,Address) VALUES('$ID','$Fname','$Lname','$DOB','$Gender','$Language','$Email','$Address')";
		mysqli_query($conn,$sql);
		
		header("location:homepage2.php");
	
	}
	else if($value == 'Customer'){
		$NIC = $_POST['nic'];
		$Fname = $_POST['firstname'];
		$Lname = $_POST['lastname'];
		$Address = $_POST['address'];
		$Language = $_POST['language'];
		$Gender=$_POST['gender'];
		$Email = $_POST['email'];
		$sql = "INSERT INTO customer (NIC,Fname,Lname,DOB,Gender,Language,Email,Address) VALUES('$NIC','$Fname','$Lname','$Address','$Language','$Gender','$Email','$Address')";
		mysqli_query($conn,$sql);
		
		
		header("location:homepage2.php");
	
	}
	else{
		echo "values not inserted";
	}
		header("refresh:20; url=register.php");
	
		
?>