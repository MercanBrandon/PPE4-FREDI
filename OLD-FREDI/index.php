<?php session_start();
//require 'class/demandeur.php';
require '_config.php';
$mail = $_POST['email'];
$mdp = $_POST['password'];



//Verification de la connexion
$_SESSION['email']=$mail;
if (!isset($_SESSION['email'])) {
	if (empty($_SESSION['email'])) {
		//header('Location: http://mercan-brandon.fr/fredi/authentification.php'); // A modifier
		header('Location: http://127.0.0.1:8080/edsa-FREDI/authentification.php'); // local
	}
}

//verification des identifiants

// var_dump($connexion);
//echo $mail;
//echo $mdp;
$query = $connexion->prepare("SELECT `adresse-mail` FROM `demandeurs` WHERE `adresse-mail`= '$mail' and `password`= '$mdp'");
$query->execute();
$count = $query->fetchColumn();
//var_dump($count);
if ($count == false ){
	//header('Location: http://mercan-brandon.fr/fredi/authentification.php'); // A modifier
	header('Location: http://127.0.0.1:8080/edsa-FREDI/authentification.php'); // Local
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <title>FREDI : Frais de déplacement et remise d'impot</title>
				<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
				<link rel="stylesheet" media="screen, projection" href="stylesheets/main.css" />
    </head>
    <body>

			<div class="body-content" id="Content" >
				<img src="images\logo_ligue.png" alt="M2L">
				<article class="main">


        <h3>Bienvenue sur la plateforme FREDI.</h3>
        <input type="submit" name="nouveau" value="Nouveau bordereau" onclick="toggledisplay('form')" />


				<form name="bordereau"  method="POST" action="editionBordereaux.php" style="display:none;" id="form" class="form-co">
					<p><label for="date">Date : <label><br/><input type="date" value="<?php echo getDate(); ?>" name="date"/></p>
					<p><label for="motif">Motif : <label><br/><input list="motifs" value="" name="motif"/>
						<datalist id="motifs">
							<option value="Réunion">
							<option value="Compétition régional">
							<option value="Compétition national">
							<option value="Compétition international">
							<option value="Stage">
						</datalist></p>
					<p><label for="trajet">Trajet : <label><br/><input type="text" value="" name="trajet"/></p>
					<p><label for="kms">Kms Parcourus : <label><br/><input type="text" value="" name="kms"/></p>
					<p><label for="cout">Coût Trajet : <label><br/><input type="number" value="" name="cout"/></p>
					<p><label for="peage">Péages : <label><br/><input type="number" value="" name="peage"/></p>
					<p><label for="repas">Repas : <label><br/><input type="number" value="" name="repas"/></p>
					<p><label for="hebergement">Hébergement : <label><br/><input type="number" value="" name="hebergement"/></p>
					<p><input type="submit" value="Enregistrer">
				</form>
				</article>
      </div>



        <div><input type="submit" name="btDeconnexion" value="Deconnexion" ></div>
    </body>
</html>
<script type="text/javascript">
    function newBord() {
        var div = document.getElementById("Content");
        $('#Content').after('<p>Coucou</p>');
    }

		function toggledisplay(elementID)
	 {
			 (function(style) {
					 style.display = style.display === 'none' ? '' : 'none';
			 })(document.getElementById(elementID).style);
	 }
</script>
<!-- <body>
      Salut tout le monde !
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
       $('body').html('Hello World');
    </script>
  </body>-->
