<html>
	<head>
		<title>Basic IV Assignment - Get Min and Max</title>
	</head>
	<body>
		
		<?php
		$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);
		
		function get_max_and_min($first)
		{
			$max=$first[0];
			$min=$first[0];
			for($i=0; $i<count($first); $i++){
				if($first[$i]>$max){
					$max=$first[$i];
				}
				if($first[$i]<$min){
					$min=$first[$i];
				}
			}
		
		$max_min = array();
		$max_min['Max']=$max;
		$max_min['Min']=$min;
		return $max_min;
		}

		$max_min = get_max_and_min($sample); 
		var_dump($max_min); 
		//$output should be equal to array('max' => 332, 'min' => 1.02);
		?>

	</body>
</html>