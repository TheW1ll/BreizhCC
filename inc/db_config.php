<?php 

//$DB_DSN= 'mysql:host=localhost;dbname=base_wdebrandt';
//$DB_USER= 'user_wdebrandt';
//$DB_PASS= 'BDD125/*+2TrAvAil';

$DB_DSN= 'mysql:host=localhost;dbname=test';
$DB_USER= 'root';
$DB_PASS= '';

try 
{
	$PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
	
	//echo 'Connexion etablie';
}

catch(PDOException $pe)
{
	echo 'ERREUR : '.$pe->getMessage();
}

?>