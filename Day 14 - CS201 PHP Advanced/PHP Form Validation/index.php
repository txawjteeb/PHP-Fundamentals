<?php
	session_start();
?>
<html>
<head>
	<title>Email Validation without DB</title>
</head>
<body>
	<?php
		if(isset($_SESSION['errors']))
		{
			foreach ($_SESSION['errors'] as $error)
			{
				echo "<p> $error </p>";
			}
			unset($_SESSION['errors']);
		}
	?>
	<h2>Please enter your email address:</h2>
	<form action="process.php" method="post">
		<input type="text" name="email" placeholder="Email Address">
		<input type="submit" value="Submit">
		<input type="hidden" name="action" value="register">
	</form>
</body>
</html>