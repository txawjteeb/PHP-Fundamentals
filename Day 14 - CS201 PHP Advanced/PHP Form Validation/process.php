<?php
session_start();

	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		$errors = array();
		//validate email!
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors[] = '<p>The email address you entered $_SESSION["email"] is NOT a valid email address!</p>';
			header('location: index.php');
		}
		else
		{
			header('location: success.php');
			exit;
		}
	}

?>