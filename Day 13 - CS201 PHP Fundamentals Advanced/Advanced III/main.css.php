<?php 	
	('Content-type: text/css');
	$r=rand(0,255);
	$g=rand(0,255);
	$b=rand(0,255);
	
	echo "h1 { color: rgb(".$r.",".$g.",".$b.") ; }";
	echo "p  { color: rgb(".$b.",".$r.",".$g.") ; }";
?>