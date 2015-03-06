<!DOCTYPE HTML>
<html>
	<title>Intermediate Assignment II - Multiplication Table</title>
	<head>
		<style>
			/*CSS CODE*/
			table {
				border-collapse: collapse;
			}
			th{
				border: 1px solid black;
				font-weight: bold;
				height: 29px;
				width: 29px;

			}
			td{
				text-align: center;
				border: 1px solid black;
				height: 29px;
				width: 29px;
			}
			tr{	border-collapse: collapse;
				height: 29px;
				width: 29px;
			}
			.grey{
				background-color: grey;
			}
			.white{
				background-color: white;
			}
			.bold{
				font-weight: bold;
				font-size: 26px;
			}
		</style>


	</head>
	<body>
		<table>
			<th></th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>

		<?php 
			for($j=1;$j<10;$j++){
				if($j%2==0){
					echo "<tr class='grey'>";
					echo "<td class='bold'><b>" . ($j) . "</b></td>";
					for($i=1;$i<10;$i++){
						echo "<td>" . ($i*$j)  . "</td>";
					}	
				}
				else {
					echo "<tr class='white'>";
					echo "<td class='bold'><b>" . ($j) . "</b></td>";
					for($i=1;$i<10;$i++){
						echo "<td class='bold'>" . ($i*$j)  . "</td>";
					}	
				}
			}
			?>
		</table>
	</body>
</html>