<?php
include("inc/top.php");

$reponse1 = $PDO->query('SELECT id,nomcateg  FROM categorie ');
$reponse3 = $PDO->query('SELECT ida,titre  FROM annonce order by ida Desc limit 5 ');
//$reponse2 = $PDO->query('SELECT ida,titre  FROM annonce  limit 6 ');


?>

<!-- debut de la partie contenu -->
<div class="main">
<div class="sidebar">
<div class="s-main">
	<div class="s_hdr">
		<h2>Catégories</h2>
	</div>
	<div class="text1-nav">
		<ul>
			<?php
	while ($donnee = $reponse1->fetch()){

      echo "<li><a href=\"categories.php?id=".$donnee['id']."\"/>".$donnee['nomcateg']."</a></li>";
	}
	?></ul>
	</div>
</div>


</div>

<div class="content">


	<div class="clear"></div>
	<div class="cnt-main">
		<div class="s_btn">
			<ul>
				<li><h2>Bienvenue !</h2></li>
				<?php if(empty($_SESSION['email'])) {echo '<li><h3><a href="login.php"> Se connecter</a></h3></li>';} 
				else if (!empty($_SESSION['email'])) {echo '<li><h3><a href="logout.php"> Se déconnecter</a></h3></li>
															<li><h2>Créer une annonce !</h2></li>
															<li><h3><a href="add_annonce.php"> Ajouter une annonce</a></h3></li>';} ?>
				
				<div class="clear"></div>
			</ul>
			<ul>
				<li><h2>Nouveau visiteur ?</h2></li>
				<li><h4><a href="sinscrire.php">S'enregistrer</a></h4></li>
				<div class="clear"></div>
			</ul>
		</div>
	<div class="grid">
	<div class="grid-img">
		<a href="annonce.php"><img src="images/pic1.jpg" alt=""/></a>
	</div>
	<div class="grid-para">
		<h2>Nouveau sur le site</h2>
		<h3>A vendre Joli produit</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<div class="btn top">
		<a href="annonce.php">Details&nbsp;<img src="images/marker2.png"></a>
		</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="cnt-main btm">
	<div class="section group">
<?php
	while ($donnee = $reponse3->fetch()){

echo"
				<div class=\"grid_1_of_3 images_1_of_3\">
					 <a href=\"annonce.php\"><img src=\"images/".$donnee['ida'].".jpg\" alt=\"\"/></a>
					 <a href=\"annonce.php\"><h3>Lorem Ipsum is simply</h3></a>
					 <div class=\"cart-b\">
					<span class=\"price left\"><sup>$21.00</sup><sub></sub></span>
				    <div class=\"btn top-right right\"><a href=\"annonce.php\">Ajouter à mes favoris</a></div>
				    <div class=\"clear\"></div>
				 </div></div>
				 ";
	}
				 ?>
				
			
</div>
			
</div>
</div>

<div class="clear"></div>
</div>

<!-- fin de la partie contenu -->
<?php
include("inc/bottom.php");
?>
