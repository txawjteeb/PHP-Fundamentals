<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Counter</title>
		<style>
			body {
				width: 220px;
				height: 220px;
				margin: 0 auto;
				border: 2px solid black;
			}
			#box {
				border: 1px solid black;
				width: 30px;
				height: 15px;
				margin: 0 auto;
				text-align: center;
			}
			h2 {
				text-align: center;
			}
			form {
				margin-left: 83px;
			}
		</style>
	</head>
	<body>
		<h2>You visited the site</h2>
		<div id="box">
		<?php
			if (isset($_SESSION['count']))
			{
				$_SESSION['count']++;
			}
			else {
				$_SESSION['count']=1;
			}
			echo $_SESSION['count'];
		?>
		</div>
		<h2>times</h2>
		<form action="process.php" method="post">
			<button value="reset">RESET</button>
		</form>
	</body>
</html>