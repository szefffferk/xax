<?php
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = "auto";
header("Location: dashboard.php");
exit;
?>
