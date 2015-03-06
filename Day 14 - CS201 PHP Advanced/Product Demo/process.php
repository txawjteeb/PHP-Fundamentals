<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['item'] = $_POST['item'];
$_SESSION['quantity'] = $_POST['quantity'];

header("Location: checkout.php");
exit;

?>