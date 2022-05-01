<?php
include("inc/top.php");
?>

<?php
/*
$requete1 = ("SELECT MAX(id) FROM compte");
$reponse1=$PDO->query($requete1);

while ($donnee1 = $reponse1->fetch()){
   $idmax=$donnee1['MAX(id)'];
}
*/
$idvue=0;
 $requete = ("SELECT * FROM records ");
 $reponse=$PDO->query($requete);
 
      while ($donnee = $reponse->fetch()){

      /* 
         $idmax++;
    $demande = $PDO->query("INSERT INTO compte VALUES ('".$idmax.
           "', '".$donnee['nommembre'].
           "','null
           ', '".$donnee['emailmembre'].
           "', '".$donnee['motdepasse'].
           "', '".$donnee['ruemembre'].
           "', '".$donnee['villemembre'].
           "') ");
*/
$donnee3;
$requete2=("SELECT id from compte where nom='".$donnee['nommembre']."'");
$reponse2=$PDO->query($requete2);

while ($donnee2 = $reponse2->fetch()){
   $donnee3= $donnee2['id'];
echo $donnee3.",";
}
/*
      $demande = $PDO->query("INSERT INTO annonce VALUES ('".$donnee['reference']. 
      "', '".$donnee['titre'].
      "', '".$donnee['descriptif'].
      "', '".$donnee['prix'].
      "', '".$donnee['villemembre'].
      "', '".$donnee['categorie'].
      "', '".NULL.
      "', '".$donnee3.
      "', '".$donnee['img'].
      "') ");
     */
    $idvue++; 

      $demande3 = $PDO->query("INSERT INTO vueannonces VALUES ('$idvue
      ', '".$donnee['datedepot'].
      "', '".$donnee['reference'].
      "') ");

      }

    



?>


<?php
include("inc/bottom.php");
?>
