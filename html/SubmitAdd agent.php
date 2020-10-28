<?php
	include 'config.php';
	
	$newque = $_GET['newqu'];
	$exten = $_GET['newquex'];
	$status = $_GET['agstat'];
	$date = $_GET['assidate'];
	$time = $_GET['assitime'];
	$agid = $_COOKIE['agid'];
	$agname = $_COOKIE['agname'];
	
	echo $newque."<br/>".$exten."<br/>".$status."<br/>".$date."<br/>".$time."<br/>".$agid."<br/>".$agname;
	
	$qury = "INSERT INTO agent_queue(agent_ID , name , queue_no , extension , date , start_time , status )
			VALUES ('$agid' , '$agname' , '$newque' , '$exten', '$date' , '$time', '$status' )";
			
	if(mysqli_query($conn , $qury))
	{
		echo "<script>
						alert('Record saved');
						window.location.href='add agent.php';
						</script>";
	}
	
	//INSERT INTO agent_queue(agent_ID , name , queue_no , extension , date , start_tim , status )
	//		VALUES ('AG89802' , 'Asela Maduranga' , '5' , '+94726342954', '2019-10-02' , '07:39:34', 'Inbound' )
	
	else
	{
		echo "<script>
						alert('Unable to execute the query');
						window.location.href='add agent.php';
						</script>";
	}

?>