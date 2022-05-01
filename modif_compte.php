<?php
include('inc/top.php');
?>

<script type="text/javascript">
	function ValiderModification(formulaire) {
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
		if (document.getElementById("rue").value.length<1) {
			document.getElementById("errorRue").innerHTML= "<font color=\"red\"> Votre adresse n'est pas valide</font>";
			$erreur1=1;
		}
		if (document.getElementById("ville").value.length<1) {
			document.getElementById("errorVille").innerHTML= "<font color=\"red\"> Votre ville n'est pas valide</font>";
			$erreur1=1;
		}
		if (document.getElementById("mdp").value.length<6 && document.getElementById("mdp").value.length!=0) {
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
<div class='main'>
     <div class='register'>
		  	  <form name="formulaire" action='modif_compte.php' method='POST'> 
				 <div class='register-top-grid'>
					<h3>Vos informations</h3>

                    <?php
                      $requete = ("SELECT * FROM compte WHERE email='".$_SESSION['email']."'");
                      $reponse=$PDO->query($requete);
                           while ($compte = $reponse->fetch()){

                        echo"
					 <div>
						<span>Prénom<label>*</label></span>
						<input type='text' name='prenom' value='".$compte['prenom']."' id='prenom'> 
						<div id='errorPrenom'> </div>
					 </div>
					 <div>
						<span>Nom<label>*</label></span>
						<input type='text' name='nom' value='".$compte['nom']."' id='nom'> 
						<div id='errorNom'> </div>
					 </div>
					 <div>
						 <span>Email<label>*</label></span>
						 <input type='text' name='email' value='".$compte['email']."' id='email'> 
						 <div id='errorEmail'> </div>
					 </div>
					 <div>
						 <span>Rue<label>*</label></span>
						 <input type='text' name='rue' value='".$compte['rue']."' id='rue'> 
						 <div id='errorRue'> </div>
					 </div>
					 <div>
						 <span>Ville<label>*</label></span>
						 <input type='text' name='ville' value='".$compte['ville']."' id='ville'> 
						 <div id='errorVille'> </div>
					 </div>
					 <div class='clear'> </div>
					     <a class='news-letter' href='#'>
						 <label class='checkbox'><input type='checkbox' name='checkbox' checked='><i> </i>S'inscrire à la neswletter</label>
					   </a>
					 </div>
				     <div class='register-bottom-grid'>
						    <h3>Pour vous authentifier</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type='password' name='mdp' id='mdp'> 
								<div id='errorMdp'> </div>
							 </div>
							 <div>
								<span>Retapez votre Password<label>*</label></span>
								<input type='password' name='mdp2' id='mdp2'> 
								<div id='errorMdp2'> </div>
							 </div>
							 <div class='clear'> </div>
					 </div>
			
				<div class='clear'> </div>
				<div class='register-but'>
						<input type='button' name='modifier' value='Modifier' onclick='ValiderModification(this.form)'>	
                       ";
                           }
					   ?>

				   </form>
				</div>
				<div class='clear'> </div>
		   </div>
           
  <div class='clear'></div>
</div>
<!-- fin de la partie contenu -->

<?php


	if(isset($_POST['mdp']) && ($_POST['mdp']==$_POST['mdp2'])){
	$modif = $PDO->query("UPDATE compte SET nom='".$_POST['nom']."',
	prenom='".$_POST['prenom']."',
	email='".$_POST['email']."',
	mdp='".password_hash($_POST['mdp'], PASSWORD_BCRYPT)."',
	rue='".$_POST['rue']."',
	ville='".$_POST['ville']."'
    WHERE email='".$_SESSION['email']."'");
	}
	else {
		$modif = $PDO->query("UPDATE compte SET nom='".$_POST['nom']."',
		prenom='".$_POST['prenom']."',
		email='".$_POST['email']."', 
		mdp='".$compte['email']."',
		rue='".$_POST['rue']."',
		ville='".$_POST['ville']."'
    WHERE email='".$_SESSION['email']."'");
	}
	

?>

<?php
include('inc/bottom.php');
?>