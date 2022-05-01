<?php
include("connection.php");
include("inc/top.php");

if(!empty($_GET['id'] && !empty($_GET['ida']))){
$reponse1 = $bdd->query("INSERT INTO favoris VALUES (".$_GET['id'].",".$_GET['ida'].")");
}
?>

<!-- debut de la partie contenu -->
<div class="main">
<div class="ser-main">
	<h4>Vos favoris</h4>
	<div class="ser-para">
	<p>Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque et,sus cipit eu ante. Nullam vitae dolor ullcper felises cursus gravida. Cras felis elit, pellentesqi amet. sus cipit eu ante. </p>
	</div>

    <!-- debut de  ligne de 3 produits -->    
    
	
     <?php
       $reponse1 = $bdd->query("SELECT * FROM annonce a, favoris f where f.ida=a.ida and f.id=".$_GET['id']);
	   while ($contrat = $reponse1->fetch()){
     echo "
	 <div class=\"ser-grid-list\">
	<h5>".$contrat['titre']."</h5>
	<img src=\"images/".$contrat['ida'].".jpg\" alt=\"\">
	<p>".$contrat['description']."</p>
	<div class=\"btn top\"><a href=\"annonce.php\">Supprimer de mes favoris</a></div>
	</div>
	 ";
	   }
      ?>
	
    
        <!-- fin de  ligne de 3 produits -->
        
            <!--debut de  ligne de 3 produits -->
    
    
    
		
    
    <!-- fin de  ligne de 3 produits -->
    
    
        
    
	<div class="clear">	<div class="btn top"><a href="favoris_imprimer.php">Imprimer mes favoris</a></div></div>
	</div>
	
<div class="sidebar">
<div class="s-main">
	<div class="s_hdr">
		<h2>Categories</h2>
	</div>
	<div class="text1-nav">
		<ul>
			<li><a href="">The standard chunk of Lorem gfd</a></li>
			<li><a href="">Duis a augue ac libero euismodf</a></li>
			<li><a href="">The standard chunk of Lorem Ips</a></li>
			<li><a href="">Duis a augue ac libero euismodd</a></li>
			<li><a href="">The standard chunk of Lorem gfd</a></li>
			<li><a href="">Duis a augue ac libero euismodf</a></li>
			<li><a href="">The standard chunk of Lorem Ips</a></li>
			<li><a href="">Duis a augue ac libero euismodd</a></li>
			<li><a href="">The standard chunk of Lorem gfd</a></li>
			<li><a href="">Duis a augue ac libero euismodf</a></li>
			<li><a href="">The standard chunk of Lorem Ips</a></li>
			<li><a href="">Duis a augue ac libero euismodd</a></li>
			<li><a href="">The standard chunk of Lorem Ips</a></li>
			<li><a href="">Duis a augue ac libero euismodd</a></li>
			<li><a href="">The standard chunk of Lorem Ips</a></li>
			<li><a href="">Duis a augue ac libero euismodd</a></li>
			<li><a href="">The standard chunk of Lorem Ips</a></li>
			<li><a href="">Duis a augue ac libero euismodd</a></li>
	    </ul>
	</div>
</div>
</div>
<div class="clear"></div>
</div>
<!-- fin de la partie contenu -->
<?php
include("inc/bottom.php");
?>

