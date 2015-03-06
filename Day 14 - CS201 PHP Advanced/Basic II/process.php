<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['dojo'] = $_POST['dojo'];
$_SESSION['language'] = $_POST['language'];
$_SESSION['comment'] = $_POST['comment'];

header("Location: checkout.php");
exit;

?>