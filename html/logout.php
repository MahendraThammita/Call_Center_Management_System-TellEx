<?php

include 'config.php';

if(!isset($_SESSION['usname']))
{
	echo "<script>
		alert('You are not logged in');
		window.location.href='select page.html';
		</script>";
}

	session_unset();
	session_destroy();
	echo "<script>
		alert('You are logged out');
		window.location.href='homepage.html';
		</script>";
	

?>
