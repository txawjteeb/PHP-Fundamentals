<?php 

$a=rand(0,100);
$b=rand(0,100);
echo "$(document).ready(function()
	{
		alert('" . $a ." X " . $b ." = ". $a*$b ."');
	});";

?>

