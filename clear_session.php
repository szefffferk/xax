<?php
// Plik do wyczyszczenia sesji
session_start();
session_unset();
session_destroy();

// Usuń cookie sesji
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

echo "Sesja wyczyszczona! <br><br>";
echo '<a href="index.php">Kliknij tutaj aby przejść do strony głównej</a>';
?>
