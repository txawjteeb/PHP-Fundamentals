<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>

	<?php
		$states=array('CA','WA','VA','UT','AZ');
		?>
	<p>This is the dropdown menu using for loops</p>
	<select>
		<?php
		for($i=0; $i<count($states); $i++){?>
			<option value=""><?php echo $states[$i]?></option><?php 
		}?>
	</select>
	<br>
	<br>
	<br>
	<br>
	<p>This is the dropdown menu using foreach loops</p>
	<select>
		<?php 
		foreach ($states as $row) {
			echo "<option value=''>" . $row . '</option>'; 
		}?>
	</select>
	<br>
	<br>
	<br>
	<br>
	<p>This is the <b>NEW</b> dropdown menu with <b>NEW</b> states inserted</p>
	<select>
		<?php 
		$states[]="NJ";
		$states[]="NY";
		$states[]="DE";
		foreach ($states as $row) {
			echo "<option value=''>" . $row . '</option>'; 
		}?>
	</select>





		
	</body>
</html>