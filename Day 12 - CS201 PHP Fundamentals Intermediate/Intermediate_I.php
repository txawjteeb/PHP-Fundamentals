<html>
	<head>
		<title>PHP Intermediate I - Draw Stars</title>
	</head>
	<body>
		
		<?php
		$x = array(4,6,"David",3,5,"tom","Heisenberg");

		function draw($var)
		{
			for($i=0; $i<count($var); $i++){
				if(is_integer($var[$i])){
					echo str_repeat("*", $var[$i])."<br>";}
				else if(is_float($var[$i])){
					echo str_repeat("*", $var[$i])."<br>";}
				else if(is_string($var[$i])){
					$string=str_split($var[$i]);
					echo str_repeat($string[0], strlen($var[$i]))."<br>";
				}
			}
		
		return $var;
		}
		$other = draw($x); 
		?>

	</body>
</html>