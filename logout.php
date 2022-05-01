<?php 
session_start();
session_destroy();
$erreur3="Vous avez été déconnecté du service";
header("Location:login.php?message3=$erreur3");

?>