<?php
include("inc/top.php");
//include("manager/build_inscrit.php");
?>


<!-- debut de la partie contenu -->
<?php 


/*
             $reponse1 = $PDO->query('SELECT id,nomcateg  FROM categorie1 ');
             while ($valeur = $reponse1->fetch()){$valeur['id'];
			 */
			 
			
			$requete = ("SELECT max(id) as nombre from compte");
                $reponse=$PDO->query($requete);
                     while ($donnee = $reponse->fetch()){
                          $idmax=$donnee['nombre'];
            
                     }	
                    echo $idmax;
                    echo $_POST['nom'];
				echo $_POST['prenom'];
				echo $_POST['email'];
                    echo $idmax=$idmax+1;


	$demande = $PDO->query("INSERT INTO compte (id,nom,prenom,email,mdp,rue,ville) 
     VALUES (".$idmax.", '".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['email']."' , '".password_hash($_POST['mdp'], PASSWORD_BCRYPT)."' , 'rue', 'ville');
     
     /*
     VALUES (".$idmax."
           , '".$_POST['nom'].
           "','".$_POST['prenom'].
           "', '".$_POST['email'].
           "', password_hash('".$_POST['mdp']."','".PASSWORD_BCRYPT."')'".
           "') ''");

/*
	$reponse1 = $PDO->query("INSERT INTO  annonce (ida,titre,description,prix,codepostal,idcateg,type,idCompte) 
    VALUES (".$id1.",'"
    .$_POST['nom']."','"
    .$_POST['prenom']."','"
    .$_POST['email']
    ."'
    ) ");
*/
	//header("Location:login.php");



	
?>

<?php
include("inc/bottom.php");
?>
