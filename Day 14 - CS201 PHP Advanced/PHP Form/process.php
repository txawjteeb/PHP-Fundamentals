<?php
session_start();
header('Location: index.php');

echo "SERVER INFO<br>";
var_dump($_SERVER);
echo "REQUEST INFO<br>";
var_dump($_REQUEST);
echo "GET INFO<br>";
var_dump($_GET);
echo "POST INFO<br>";
var_dump($_POST);
if(isset($_POST['music']))
{
	$_SESSION['music'] = $_POST['music'];
}
if(isset($COLOR{	
	$_SESSION['COLOR' ] = $_POST['music'];
}

echo "FILE INFO<br>";
var_dump($_FILES);

echo "COOKIE INFO<br>";
var_dump($_COOKIE);
echo "SESSION INFO<br>";
var_dump($_SESSION);

?>