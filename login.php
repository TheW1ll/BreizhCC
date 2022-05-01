<?php
include("inc/top.php");
?>

<script type="text/javascript">
	function ValiderMail(formulaire) {
	$erreur1=0;

		if (document.getElementById("email").value.indexOf("@", 0) < 0) {
			document.getElementById("errorEmail").innerHTML= "<font color=\"red\">Votre adresse mail n'est pas valide</font>";
			$erreur1=1;
		}
		if (document.getElementById("mdp").value.length<6) {
		document.getElementById("errorMdp").innerHTML= "<font color=\"red\">Votre mot de passe doit contenir 6 carctères minimum";
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
		<div class="col_1_of_list span_1_of_list login-left">
			<h3>Nouveau membre</h3>
			<p>En créant un compte, vous pourrez créer des annonces</p>
			<a class="acount-btn" href="sinscrire.php">Créer un compte</a>
		</div>
		<div class="col_1_of_list span_1_of_list login-right">
			<h3>Déja membre ?</h3>
			<p>Si vous avez déja un compte, merci de vous connecter</p>
			<form name="formulaire" method="POST" action="validation.php">
				<div>
					<span>Adresse email<label>*</label></span>
					<input type="text" name="email" id="email">
					<div id="errorEmail"> </div>
				</div>
				<div>
					<span>Mot de passe<label>*</label></span>
					<input type="password" name="mdp" id="mdp">
					<div id="errorMdp"> </div>
				</div>
				<a class="forgot" href="#">Mot de passe oublié</a>
				<input type="button" name="valider" value="Login" onclick="ValiderMail(this.form)">
			</form>
		</div>
		<div class="clearfix"> </div>

	</div>
	<div class="clear"></div>
</div><!-- fin de la partie contenu -->

<?php


















if (!empty($_GET['message1'])) {
	echo "<span style=color:red;>" . $_GET['message1'] . "</span>";
}

if (!empty($_GET['message2'])) {
	echo $_GET['message2'];
}

if (!empty($_GET['message3'])) {
	echo "<span style=color:green;>" . $_GET['message3'] . "</span>";
}

?>

<?php
include("inc/bottom.php");
?>