<?php
include("inc/top.php");
?>


<!-- debut de la partie contenu -->
<?php 

require('manager/inc/db_config.php');
require('manager/build_inscrit.php');

try 
{
	$PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
	
	echo 'Connexion etablie';
}

catch(PDOException $pe)
{
	echo 'ERREUR : '.$pe->getMessage();
}

$client=new build_inscrit($_POST['mail'],$_POST['motdepasse'] , '', '','','');

if ( $_POST['mail']!=null && $_POST['motdepasse']!=null) {
	
$requete = $PDO-> prepare ("SELECT mail,mdp FROM `Client` WHERE mail=:mail AND mdp=:motdepasse");
$reponse=bindvalue(':mail', $_POST['mail']);
$reponse=bindvalue(':mdp', $_POST['motdepasse']);
$verif = $reponse->fetch();

("UPDATE clients set  nom=:nom 
    where id=:id");

$mdp=verif['mdp'];
} else{
	$_erreur_prenom= "Vous n'avez pas rentr� d'email'."; 
	header('Location:login2.php?erreur_mail='.$_erreur_mail); 
	}


printf ("le mail de la BDD est ".$mdp.".\n");

/*if ($_POST['mail']==null) {
	$_erreur_prenom= "Vous n'avez pas rentr� d'email'."; 
	header('Location:login2.php?erreur_mail='.$_erreur_mail); 
} else{*/
	/*
	$mail=$PDO->prepare('SELECT mail FROM `clients` WHERE VALUES mail=":mail"');
	$mail->bindValue(':mail', 'ta@testeur.com');
	$mail->execute(); 

		$mail->closeCursor();
		*/
//}


/*if ($_POST['motdepasse']==null) {
	$_erreur_mp=  "Vous n'avez pas rentr� de mot de passe."; 
header('Location:login2.php?erreur_mp='.$_erreur_mp);
} else{*/
	/*
	$mdp=$PDO->prepare('SELECT mdp INTO clients VALUES mdp=":mdp"');
	$mdp->bindValue(':mdp', "1234");
	$mdp->execute(); 
	$_mdp = $mdp->fetch();
	*/
//}
	

	
	
?>

<?php
include("inc/bottom.php");
?>
