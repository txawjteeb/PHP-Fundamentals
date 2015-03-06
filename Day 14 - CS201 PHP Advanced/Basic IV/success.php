<?php
	session_start();
	if(isset($_SESSION['success']))
	{
		$display = "The email address you entered (".$_SESSION['email'].") is a VALID email address! Thank you!";
		unset($_SESSION['success']);
	}

?>

<html>
	<head>
	</head>
		<style>
			body {
				width: 500px;
				margin: 0 auto;
				text-align: center;
				padding-top: 80px;
			}
			div {
				width: 500px;
				border: 1px solid black;
				background-color: green;
				font-size: 30px;
			}

		</style>
	<body>
		<div>
			<p><?= $display ?></p>
		</div>
		


	</body>
</html>