<?php

session_start();
$num=rand(1,100);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Great Number Name</title>
	</head>
	<body>
		<h2>Welcome to the Great Number Game!</h2>
		<p>I am thinking of a number between 1 and 100</p>
		<p>Take a guess!</p>
		<div>
			
		</div>
		<form action="process.php" method="post">
			<input type="submit" value="Submit">
		</form>
	</body>


</html>