<?php
include("inc/top.php");
?>

<!-- debut de la partie contenu -->
<?php 



function getConnexion(){

	require 'inc/db_config.php';
	
try 
{
	$PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
	
	echo 'Connexion etablie';
}

catch(PDOException $pe)
{
	echo 'ERREUR : '.$pe->getMessage();
}
}


function getMail()
{ 
	require 'inc/db_config.php';
	
	try{
    $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
	$mail=$PDO->prepare('SELECT mail INTO clients VALUES (:mail)');
	$mail->bindValue(':mail', 'ta@testeur.com');
	$mail->execute(); 
	$_mail=$mail->fetch(); 

}
	catch(PDOException $pe)
	{
		echo 'ERREUR : '.$pe->getMessage();
	}

}

function getMDP()
{ 
    getConnexion();
	$mail=$PDO->prepare('SELECT mdp INTO clients VALUES (:mdp)');
	$mail->bindValue(':mdp', '$_POST["mdp"]');
	$mail->execute(); 
}

?>

<?php
include("inc/bottom.php");
?>