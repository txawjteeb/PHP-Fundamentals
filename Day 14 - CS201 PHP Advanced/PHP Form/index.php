<?php session_start();

echo "COOKIE INFO<br>";
var_dump($_COOKIE);
echo "SESSION INFO<br>";
var_dump($_SESSION);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Superglobal Example</title>
</head>
<body>
	<form action="process.php" method="post" enctype="multipart/form-data">
		<div>
			<label for="color">What is your favorite color?</label>
			<input type="text" name="color" placeholder="put your color here">
		</div>
		<div>
			<label for="music">What is your favorite type of music?</label>
			<select name="music">
				<option value="hip hop">Hip Hop</option>
				<option value="pop">Pop</option>
				<option value="rock">Rock</option>
				<option value="alternative">Alternative</option>
				<option value="country">Country</option>
				<option value="new age">New Age</option>
				<option value="classical">Classical</option>
			</select>
		</div>
		<div>
			<input type="submit" value="Submit">
		</div>
		<div>
			<label for="color">Choose File:</label>
			<input type="file" name="file">
		</div>
	</form>
</body>
</html>
<?php


$_SESSION = array();
unset($_SESSION['music']);?>