<html>
	<head>
		<style type="text/css">
			h4 {
				text-decoration: underline;
				font-style: italic;
			}


		</style>
	</head>
	<body>
		<h4>Starting the program</h4>

			<?php

			$heads=0;
			$tails=0;
			for($i=1; $i<5001; $i++){
				$flip=rand(1,2);
				if ($flip===1) {
					$heads++;
					echo "Attempt #".$i.": Throwing a coin... It's a head! ... Got ".$heads." head(s) so far and ".$tails." tail(s) so far <br>";
				}
				else {
					$tails++;
					echo "Attempt #".$i.": Throwing a coin... It's a tail! ... Got ".$heads." head(s) so far and ".$tails." tail(s) so far <br>";
				}
			}

			?>






		<h4>Ending the program - thank you!</h4>
	</body>





</html>