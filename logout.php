<?php 
session_start();
session_destroy();
$erreur3="Vous avez �t� d�connect� du service";
header("Location:login.php?message3=$erreur3");

?>