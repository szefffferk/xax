<?php
// Wyczyść całkowicie sesję
session_start();
session_unset();
session_destroy();

// Usuń cookie sesji
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Przekieruj do dashboard bez logowania
header("Location: dashboard.php");
exit;
?>
