<!DOCTYPE HTML>
<html>
	<title>CHECKERBOARD ADVANCED ASSIGNMENT</title>
	<head>
		<style>
			/*CSS CODE*/
			table {
				border-collapse: collapse;
			}
			.black {
				background-color: black;
				height: 45px;
				width: 45px;
			}
			.red {
				background-color: red;
				height: 45px;
				width: 45px;
			}
		</style>


	</head>
	<body>
		<table>
		<?php 
			for($j=0;$j<8;$j++){
				if($j%2==0){
					for($i=0;$i<4;$i++){
						echo "<td class='black'></td>";
						echo "<td class='red'></td>";
					}
				}
				else {
					for($i=0;$i<4;$i++){
						echo "<td class='red'></td>";
						echo "<td class='black'></td>";
					}
				}
				echo "<tr>";
			}?>
		</table>




	</body>
</html>