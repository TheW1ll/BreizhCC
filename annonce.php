<?php
include("connection.php");
echo $_SESSION['email'];

include("inc/top.php");

$requete = ("SELECT id FROM compte WHERE email='".$_SESSION['email']."' AND mdp='".$_SESSION['pass']."'    ");
	$reponse=$PDO->query($requete);
     	while ($contrat = $reponse->fetch()){
              $nbre=$contrat['id'];
		 }

		 echo $nbre;

?>

<!-- debut de la partie contenu -->
<div class="main">
<div class="details">
				  <div class="product-details">				
					<div class="images_3_of_2">
						<div id="container">
						   <div id="products_example">
							<div id="products">
								<div class="slides_container">
								<a href="#" target="_blank"><img src="images/productslide-1.jpg" alt=" " /></a> 
								
								</div>
								<ul class="pagination">
								
                                 
								 	<li><a href="#"><img src="images/<?php echo $_GET['ida'] ?>.jpg" alt=" " /></a></li>   
									
								
                                
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
				<?php
	               $reponse1 = $PDO->query("SELECT *  FROM annonce where ida=".$_GET['ida']);
			       while ($contrat = $reponse1->fetch()){

                    echo "
					<h2>".$contrat['titre']."</h2>
					<p>".$contrat['description']."</p>					
					<div class=\"price\">
						<p>Prix: <span>".$contrat['prix']."</span></p>

                    </div>
				     ";
				   }
				   ?>
            
            
				 <div class="wish-list">
				 	<ul>
						 <?php
						 echo"
				 		<li class=\"wish\"><a href=\"favoris.php?id=".$nbre." & ida=".$_GET['ida']." \">Ajouter à mes favoris</a></li>
				         ";
						 ?>
				 	</ul>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>

	   
       		
   <div class="content_bottom">
   	<div class="text-h1 top1 btm">
			<h2>Annonces qui pourraient vous intéresser</h2>
	  	</div>
 <div class="div2">
        <div id="mcts1">
       <?php
	  

		$reponse1 = $PDO->query("SELECT ida  FROM annonce where idcateg=".$_GET['id']." Limit 3" );

	     while ($contrat = $reponse1->fetch()){
			 echo"
			<div class=\"w3l-img\">
        		<img src=\"images/".$contrat['ida'].".jpg\" alt=\"\"/>
			</div>
			";
		 }
				
			?>
			
			<div class="clear"></div>	
        </div>
   		</div>

    	</div>

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