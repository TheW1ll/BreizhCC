<?php
include("inc/top.php");

?>

<!-- debut de la partie contenu -->
<div class="main">
<div class="ser-main">
	<h4>Nos annonces</h4>
	<div class="ser-para">
	<p>Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque et,sus cipit eu ante. Nullam vitae dolor ullcper felises cursus gravida. Cras felis elit, pellentesqi amet. sus cipit eu ante. </p>
	</div>

    <!-- debut de  ligne de 3 produits -->    
    
	
    
        <!-- fin de  ligne de 3 produits -->
        
            <!--debut de  ligne de 3 produits -->
    <?php
	if(isset($_GET['id'])){
	$reponse = $PDO->query("SELECT * FROM annonce where idcateg=".$_GET['id']);
			while ($categorie = $reponse->fetch()){
	
echo "
    
		<div class=\"ser-grid-list\">
	<h5>".$categorie['titre']."</h5>
		<img src=\"images/".$categorie['ida'].".jpg\" alt=\"\">
		<p>".$categorie['description']."</p>
		<div class=\"btn top\"><a href=\"annonce.php?id=".$categorie['idcateg']." & ida=".$categorie['ida']."\">En savoir plus</a></div>
	</div>
	";
			}
	}
		?>
    
    <!-- fin de  ligne de 3 produits -->
    
    
        
    
	<div class="clear"></div>
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

