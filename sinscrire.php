<?php
include("inc/top.php");
?>


<script type="text/javascript">
	function ValiderMail(formulaire) {
	$erreur1=0;
		if (document.getElementById("prenom").value.length<1) {
			document.getElementById("errorPrenom").innerHTML= "<font color=\"red\"> Votre prenom n'est pas valide</font>";
			$erreur1=1;
		}
		if (document.getElementById("nom").value.length<1) {
			document.getElementById("errorNom").innerHTML= "<font color=\"red\"> Votre nom n'est pas valide</font>";
			$erreur1=1;
		}
		if (document.getElementById("email").value.length<1) {
			document.getElementById("errorMail").innerHTML= "<font color=\"red\"> Votre adresse mail n'est pas valide</font>";
			$erreur1=1;
		}
		if (document.getElementById("mdp").value.length<6) {
		document.getElementById("errorMdp").innerHTML= "<font color=\"red\"> Votre mot de passe doit contenir 6 caractères au minimum</font>";
		$erreur1=1;
		}
		if (document.getElementById("mdp").value != document.getElementById("mdp2").value){
		document.getElementById("errorMdp2").innerHTML= "<font color=\"red\"> Vos mots de passe sont diffèrents</font>";
		$erreur1=1;
		}

		if($erreur1==0) {
			formulaire.submit();
		}
	}
</script>


<!-- debut de la partie contenu -->
<div class="main">
     <div class="register">
		  	  <form name="formulaire" action="validationInscrit.php" method="Post"> 
				 <div class="register-top-grid">
					<h3>Vos informations</h3>
					 <div>
						<span>Prénom<label>*</label></span>
						<input id="prenom" type="text" name="prenom"> 
						<div id="errorPrenom"> </div>
					 </div>
					 <div>
						<span>Nom<label>*</label></span>
						<input id="nom" type="text" name="nom"> 
						<div id="errorNom"> </div>
					 </div>
					 <div>
						 <span>Email<label>*</label></span>
						 <input id="email" type="text" name="email"> 
						<div id="errorMail"> </div>
					 </div>
					 <div class="clear"> </div>
					     <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>S'inscrire à la neswletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>Pour vous authentifier</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input id="mdp" type="password" name="mdp">
						<div id="errorMdp"> </div>
							 </div>
							 <div>
								<span>Retapez votre Password<label>*</label></span>
								<input id="mdp2" type="password" name="mdp2">
						<div id="errorMdp2"> </div>
							 </div>
							 <div class="clear"> </div>
					 </div>
			
				<div class="clear"> </div>
				<div class="register-but">
				   
					   <input type="button" name="sinscrire" value="M'inscrire" onclick="ValiderMail(this.form)">	
				</div>
				</form>
		   </div>
  <div class="clear"></div>
</div>
<!-- fin de la partie contenu -->


<?php
include("inc/bottom.php");
?>