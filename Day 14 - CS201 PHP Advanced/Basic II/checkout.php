<?php
	session_start();
?>
<html>
<head>
<style>
	body {
		width:350px;
		margin: 0 auto;
	}
	h3 {
		text-decoration: underline;
		font-size: 24px;
	}
	div {
		width:350px;
		border: 1px solid black;
		padding: 25px;
		padding-top: 0px;
	}
	#surprise {
		margin: 20px 0px;
		padding-bottom: 0px;
		background-color: #B6D7A8;
	}
	table {
		width: 330px;
		margin: 0 auto;
	}
	td {
		padding: 7px;
		width: 175px;
	}
	input {
		position: relative;
		left: 268px;
	}
</style>
</head>
<body>
	<div id="surprise">
		<p>Thanks for submitting this form! You have submitted this form! You have submitted this form <?php
			if (isset($_SESSION['count']))
			{
				$_SESSION['count']++;
			}
			else {
				$_SESSION['count']=1;
			}
			echo $_SESSION['count'];
		?> times now.</p>
		
	</div>
	<div>
		<h3>Submitted Information</h3>
		<table>
			<tr>
			<td>Name:</td>
			<td><?= $_SESSION['name'] ?></td><tr>
			<td>Dojo Location:</td>
			<td><?= $_SESSION['dojo'] ?></td><tr>
			<td>Favorite Language:</td>
			<td><?= $_SESSION['language'] ?></td><tr>
			<td>Comment:</td>
			<td><?= $_SESSION['comment'] ?></td><tr>
		</table>
		<form action="index.php">
			<input type="submit" value="Go Back">
		</form>
	</div>
</body>
</html>

