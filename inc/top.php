<?php
session_start();
require_once("db_config.php");

$reponse1 = $PDO->query('SELECT id,nomcateg  FROM categorie ');

if(!empty($_SESSION['email'])){
$requete = ("SELECT id FROM compte WHERE email='".$_SESSION['email']."'");
	$reponse=$PDO->query($requete);
     	while ($contrat = $reponse->fetch()){
              $nbre=$contrat['id'];
		 }
		// echo "Bienvenu : ".$_SESSION['email'];

 $requete = ("SELECT count(*) AS nombre FROM favoris WHERE id=".$nbre);
 $reponse=$PDO->query($requete);
	  while ($contrat = $reponse->fetch()){
		   $nbre1=$contrat['nombre'];
		}	
	}else{
		$nbre=0;
	}
	
	
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>BreizhCoinCoin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<a href="index.php"><img src="images/logo.png" alt=""> </a>
	</div>
	<div class="header-right">
	<div class="contact-info">
		<ul>
			<li><a href="favoris.php">Favoris : enregistrés</a></li>
	
		</ul>
	</div>
	<div class="menu">
	 	 <ul class="nav">
        <li class="active"><a href="index.php" title="Home">Accueil</a></li>
  		<li><a href="apropos.php">Notre concept</a></li>
  	     <li><a href="categories.php">Annonces</a></li>
  		<li><a href="contact.php">Contact</a></li>
  		<li><a href="index.php">S'enregistrer</a></li>
	    <li><a href="modif_compte.php">Mon compte</a></li>
  		<div class="clear"></div>
      </ul>
	 </div>
	 </div>
	<div class="clear"></div>
</div>
<div class="hdr-btm pad-w3l">
<div class="hdr-btm-bg"></div>
<div class="hdr-btm-left">
<form action="categories.php" method="GET">
	<div class="search">
	 
		<input type="text" value="tapez votre recherche" >
		<input type="submit" value="Chercher" class="pad-w3l-search">
	  
	</div>
	<div class="drp-dwn">
			<select class="custom-select" id="select-1" name="id">
			<option selected="selected">Catégories</option>
			<?php
			
			while ($contrat = $reponse1->fetch()){

				
			echo "
			
			<option value=\"".$contrat['id']."\">   ".$contrat['nomcateg']." </option>";
			
			}
		
			?>
		</select>
		
	</div></form>
	<div class="txt-right">
		<h3><a href="">Recherche avancée</a></h3>
	</div>
	<div class="clear"></div>
</div>
</div>
