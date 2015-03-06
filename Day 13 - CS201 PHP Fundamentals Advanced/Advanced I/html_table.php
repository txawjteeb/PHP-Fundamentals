<html>
<title>HTML Table Advanced Assignment</title>
	<head>
		<style type="text/css">
			.black {
				background-color: black;
				color: white;
			}
			table, th, td{
				border: 1px solid black;
				border-collapse: collapse;
			}
			table {
				margin-bottom: 30px;
			}
		</style>
	</head>


	<body>

	<!-- strtoupper() makes all the string UPPERCASE -->
	<!-- strlen() counts all the string length-->
		<?php
			$users = array(
			   array('first_name' => 'David', 'last_name' => 'Lee'),
			   array('first_name' => 'PhaDawb', 'last_name' => 'Vue'),
			   array('first_name' => 'Bryan', 'last_name' => 'Cranston'),
			   array('first_name' => 'Walter', 'last_name' => 'White'), 
			   array('first_name' => 'Daniel-Day', 'last_name' => 'Lewis') ,
			   array('first_name' => 'Jimmy', 'last_name' => 'McGill') ,
			   array('first_name' => 'Saul', 'last_name' => 'Goodman') ,
			   array('first_name' => 'Mike', 'last_name' => 'Ehrmantraut') ,
			   array('first_name' => 'Suafeng', 'last_name' => 'Chervunkong') ,
			   array('first_name' => 'Mongzong', 'last_name' => 'Lee') ,
			   array('first_name' => 'MaiYer', 'last_name' => 'Lee') ,
			   array('first_name' => 'Kelly', 'last_name' => 'Lee') ,
			   array('first_name' => 'Daniel', 'last_name' => 'Lee') ,
			   array('first_name' => 'Lisa', 'last_name' => 'Lee') ,
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
			$i=1;
			foreach ($users as $array) {
				if($i%5==0) {
					echo "<tr class='black'>";

				}
				else {
					echo "<tr>";
				}
				echo "<td>" . $i . "</td>";
				echo "<td>" . $array['first_name'] . "</td>";
				echo "<td>" . $array["last_name"] . "</td>";
				$full_name = $array["first_name"] . ' ' . $array["last_name"];
				echo "<td>" . $full_name . "</td>";
				echo "<td>" . strtoupper($full_name) . "</td>";
				$name_len = strlen($full_name) - 1;
				echo "<td>" . $name_len . "</td>";
				$i++;
				echo "</tr>";
			}
			?>
			</tbody>
			</table>
			<table>
			
			<thead>
				<th>User #</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Full Name</th>
				<th>Full Name in upper case</th>
				<th>Length of full name (without spaces)</th>
			</thead>

			<?php
				$usernum = 1;
		    for($i=0;$i<count($users);$i++)
		    {
		        if($usernum%5==0)
		        {
		            $name = implode($users[$i], " ");
		            list($first, $last) = explode(' ', $name);
		            $tname = str_replace(" ", '', $name);
		            echo "<tr class='black'><td class='black'><strong>" . $usernum . "</strong></td><td>" . $first . "</td><td>" . $last . "</td><td>" . $name . "</td><td>" . strtoupper($name) . "</td><td>" . strlen($tname) . "</td></tr>";
		            $usernum++;
		        }
		        else
		        {
		            $name = implode($users[$i], " ");
		            list($first, $last) = explode(' ', $name);
		            $tname = str_replace(" ", '', $name);
		            echo "<tr><td><strong>" . $usernum . "</strong></td><td>" . $first . "</td><td>" . $last . "</td><td>" . $name . "</td><td>" . strtoupper($name) . "</td><td>" . strlen($tname) . "</td></tr>";
		            $usernum++;
		        }
		    }



		    ?>
		</tbody>
	</table>

	</body>
</html>