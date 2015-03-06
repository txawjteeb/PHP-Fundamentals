<?php

	session_start();
	if(isset($_SESSION['success']))
	{
		echo "The email address you enter (". $_SESSION['email'] .") is a VALID email address! Thank you!";
		unset($_SESSION['success']);
	}
	else
	{
		header('location: index.php');
		exit;
	}
?>