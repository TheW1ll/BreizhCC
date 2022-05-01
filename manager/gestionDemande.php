<?php
require_once("inc/db_config.php");

//Ajouter une categorie
if(isset($_GET['add'])){
  $demande = $PDO->query("INSERT INTO  categorie (nomcateg) VALUES ('".$_GET['nom']."' ) ");
  header("Location:list_categories.php");
  }

//Modifier une categorie     
if(isset($_GET['modifier'])){
  $demande = $PDO->query("UPDATE  categorie SET nomcateg='".$_GET['nom']."' where id=".$_GET['idcat']."" );
  header("Location:list_categories.php"); 
}

//Supprimer une categorie
  if(isset($_GET['nomcategorie'])){
    $demande = $PDO->query("DELETE  FROM categorie where  nomcateg='".$_GET['nomcategorie']."'" );
    header("Location:list_categories.php");
  }

//Modifier une annonce
if(isset($_GET['update'])){
      $demande = $PDO->query("UPDATE  annonce SET titre='".$_GET['titre']."' where ida=".$_GET['ida']."" );
      header("Location:list_annonces.php");
 }

//Supprimer une annonce
  if(!empty($_GET['idannonce'])){
    $demande = $PDO->query("DELETE  FROM annonce where  ida=".$_GET['idannonce'] );
    header("Location:list_annonces.php");
  }





?>