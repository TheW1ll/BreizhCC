<?php
include("inc/top.php");
?>

<?php 
session_start();

    $requete = ("SELECT count(*) AS nombre FROM compte WHERE email='".$_POST['email']."'");
	$reponse=$PDO->query($requete);
     	while ($donnee = $reponse->fetch()){
              $nbre=$donnee['nombre'];
		 }	
		
		 if( $nbre==0){
			$erreur2="mot mdp/login erroné";
			header("Location:login.php?message2=$erreur2");
         }
		 else{
			$requete = ("SELECT mdp FROM compte WHERE email='".$_POST['email']."'");
			$reponse=$PDO->query($requete);
				 while ($donnee = $reponse->fetch()){
					  $mdp=$donnee['mdp'];
				 }
				}	
			if(password_verify($_POST['mdp'], $mdp)==true){
			
			$_SESSION['email']=$_POST['email'];
            header("Location:index.php");
			}
         
    
	?>


<?php

    if(!empty($_GET['afaire']) && $_GET['afaire']=='deconnexion')

{	
   session_destroy();
	$erreur3="Vous avez été déconnecté du service";
	header("Location:login.php?message3=$erreur3");
 
}

?>

<?php
include("inc/bottom.php");
?>