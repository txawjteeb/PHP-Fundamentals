<?php
	session_start();
	session_unset();
	session_destroy();
?>

<html>
	<head>
		<title>Survey Form</title>
		<style>
			body {
				width:330px;
				margin: 0 auto;
			}
			form {
				width:330px;
				border: 1px solid black;
				padding: 35px;
			}
			div {
				margin-top: 20px;
			}
			#name, #dojo, #language {
				width: 140px;
			}
			#name {
				margin-left: 99px;
			}
			#dojo {
				margin-left: 81px;
			}
			#language {
				margin-left: 54px;
			}
			#submit {
				position: relative;
				left: 268px;
			}


		</style>
	</head>
	<body>
		<form action="process.php" method="post">
			<div>
			Your Name: <input type="text" name="name" id="name"/><br>
			</div>
			<div>
			Dojo Location:
				<select name="dojo" id="dojo">
					<option value="San Jose">San Jose, CA</option>
					<option value="Seattle">Seattle, WA</option>
				</select>
			</div>
			<div>
			Favorite Language:
				<select name="language" id="language">
					<option value="Javascript">Javascript</option>
					<option value="PHP">PHP</option>
					<option value="Node.js">Node.js</option>
					<option value="Angular.js">Angular.js</option>
					<option value="Java">Java</option>
					<option value="Objective-C">Objective-C</option>
					<option value="Swift">Swift</option>
				</select>
			</div>
			<div>
			Comment (optional):<br>
				<textarea rows="6" cols="50" name="comment" placeholder="Comments here homie!"></textarea>
				<br><br>
				<input type="submit" name="Submit" id="submit">
			</div>
		</form>



	</body>
</html>