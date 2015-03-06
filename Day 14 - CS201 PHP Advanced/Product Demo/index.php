<html>
	<head>
		<title>Product Demo</title>
	</head>
	<body>
		<h1>Product Demo</h1>
		
		<form action="process.php" method="post">
			Your Name: <input type="text" name="name" /><br />
			Email: <input type="text" name="email" /><br />
			Purchasing:
				<select name="item">
					<option value="CodingDojo_Shirt">Coding Dojo Shirt</option>
					<option value="CodingDojo_Cup">Coding Dojo Cup</option>

				</select>
				<br />
			Quantity: <input type="text" name="quantity" /><br />
			<input type="submit" name="Purchase">

		</form>



	</body>
</html>