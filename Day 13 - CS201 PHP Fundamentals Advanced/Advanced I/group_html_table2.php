<html>
	<head>
		<style type="text/css">
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
			}
			table tr:nth-of-type(5){
				background-color: black;
				color: white;
			}
			table tr:nth-of-type(10){
				background-color: black;
				color: white;
			}
		</style>
	</head>
<body>
<?php
	$users = array( 
   		array('first_name' => 'Michael', 'last_name' => 'Choi'),
   		array('first_name' => 'John', 'last_name' => 'Supsupin'),
   		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   		array('first_name' => 'KB', 'last_name' => 'Tonel'),
  		array('first_name' => 'Uyanga', 'last_name' => 'Ganbaatar'),
   		array('first_name' => 'Cindy', 'last_name' => 'Lin'),
   		array('first_name' => 'Nancy', 'last_name' => 'Guillen'),
   		array('first_name' => 'David', 'last_name' => 'Lee'), 
   		array('first_name' => 'Brian', 'last_name' => 'Lin'),
   		array('first_name' => 'Arash', 'last_name' => 'Supsupin'),
  		array('first_name' => 'Brian', 'last_name' => 'Guillen'),
  		array('first_name' => 'Nicole', 'last_name' => 'Tonel'), 
   		array('first_name' => 'Alma', 'last_name' => 'Guillen'),
   		array('first_name' => 'Punam', 'last_name' => 'Tonel') 
	);
?>
<table>
	<thead>
		<th>User #</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Full Name</th>
		<th>Full Name in upper case</th>
		<th>Length of full name (without spaces)</th>
	</thead>
	<tbody>
	<?php
	$id = 1;
	foreach ($users as $row) {
		echo "<tr>";
		echo "<td>".$id."</td>";
		$id_char = 0;
		$full_name = "";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
			$id_char += strlen($value);
			$full_name = $full_name. $value." ";
		}
	?>
	<td>
	<?php
		echo $full_name;
	?>
	</td>
	<td>
	<?php
		echo strtoupper($full_name);
	?>
	</td>
	<td>
	<?php
		echo $id_char;
	?>
	</td>
	<?php
		echo "</tr>";
		$id++;
	}
	?>
	</tbody>
</table>
</body>
</html>