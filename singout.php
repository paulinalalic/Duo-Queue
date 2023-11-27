<!-- <?php
session_start();

// Brisanje svih podataka iz sesije
$_SESSION = array();

// Uništavanje sesije
session_destroy();

// Preusmjeravanje na početnu stranicu
header("Location: index.php");
exit();
?> -->

<?php
session_start();

// Odjava korisnika
session_unset();
session_destroy();

// Preusmjeravanje na početnu stranicu ili neku drugu stranicu
header("Location: index.php");
exit();
?>

