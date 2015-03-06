<?php

	for($i=0; $i<100; $i++){
		$num = rand(50,100);
		if($num<70){
			echo '<h1>Your score is: ' . $num . '</h1>';
			echo '<h2>You got a: D</h2>';
		}
		else if($num>=70 AND $num<80){
			echo '<h1>Your score is: ' . $num . '</h1>';
			echo '<h2>You got a: C</h2>';
		}
		else if($num>=80 AND $num<90){
			echo '<h1>Your score is: ' . $num . '</h1>';
			echo '<h2>You got a: B</h2>';
		}
		else if($num>=90 AND $num<=100){
			echo '<h1>Your score is: ' . $num . '</h1>';
			echo '<h2>You got a: A</h2>';
		}
	}
?>