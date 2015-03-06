<?php
session_start();
// var_dump($_POST);

?>

<p>Hi. <?= $_SESSION['name'] ?>!</p>
<p>Thanks for purchasing '<?= $_SESSION['quantity'] ?> <?= $_SESSION['item'] ?>'.</p>
<p>An email will be sent to ___</p>