<?php
session_start();

	if (isset($_POST['farm'])) {
		$farm_rand = rand(10,20);
		$_SESSION['gold']=$_SESSION['gold']+$farm_rand;
		$display="You entered the Farm and earned ".$farm_rand." golds. (".date('M-d-Y H:i:s').")";
	}
	else if (isset($_POST['cave'])) {
		$cave_rand = rand(5,10);
		$_SESSION['gold']=$_SESSION['gold']+$cave_rand;
		$display = "You entered the Cave and earned ".$cave_rand." golds. (".date('M-d-Y H:i:s').")";
	}
	else if (isset($_POST['house'])) {
		$house_rand = rand(2,5);
		$_SESSION['gold']=$_SESSION['gold']+$house_rand;
		$display = "You entered the House and earned ".$house_rand." golds. (".date('M-d-Y H:i:s').")";
	}
	else if (isset($_POST['casino'])) {
		$casino_rand = rand(-50,50);
		if ($casino_rand<0) {
			$_SESSION['gold']=$_SESSION['gold']+$casino_rand;
			$display = "<a class='red'>You entered the Casino and lost ".$casino_rand." golds... Ouch.. (".date('M-d-Y H:i:s').")</a>";
		}
		else {
			$_SESSION['gold']=$_SESSION['gold']+$casino_rand;
			$display = "You entered the Casino and earned ".$casino_rand." golds. (".date('M-d-Y H:i:s').")";
		}
	}
if (isset($_SESSION['success'])) {
	array_unshift($_SESSION['success'], $display);
}
else {
	$_SESSION['success']=array($display);
}

	header("Location:index.php");
	exit;
?>