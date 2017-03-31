<?php session_start();
//include '_config.php';
$mail = $_POST['email'];
$mdp = $_POST['password'];


//Verification de la connexion
$_SESSION['email']=$mail;
if (!isset($_SESSION['email'])) {
	if (empty($_SESSION['email'])) {
		header('Location: http://127.0.0.1:8080/edsa-FREDI/authentification.php'); // A modifier
	}
}

//verification des identifiants
$dsn = 'mysql:dbname=bdfredi;host=127.0.0.1';
$user = 'root';
$password = '';
$connexion = new PDO($dsn,$user,$password);
// var_dump($connexion);
//echo $mail;
//echo $mdp;
$query = $connexion->prepare("SELECT `adresse-mail` FROM `demandeurs` WHERE `adresse-mail`= '$mail' and `password`= '$mdp'");
$query->execute();
$count = $query->fetchColumn();
//var_dump($count);
if ($count == false ){
	header('Location: http://127.0.0.1:8080/edsa-FREDI/authentification.php'); // A modifier
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <title>FREDI : Frais de dÃ©placement et remise d'impot</title>
    </head>
    <body>
        <p>Bienvenue sur la plateforme FREDI.</p>
        <input type="submit" name="nouveau" value="Nouveau bordereau" onclick="newBord()" />
				<form name="bordereau" action="newBord" method="post">
					<input type="text"
				</form>
        <div id="Content"><p>lorem ipsum </p></div>



        <div><input type="submit" name="btDeconnexion" value="Deconnexion" ></div>
    </body>
</html>
<script type="text/javascript">
    function newBord() {
        var div = document.getElementById("Content");
        $('#Content').after('<p>Coucou</p>');
    }
</script>
<!-- <body>
      Salut tout le monde !
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
       $('body').html('Hello World');
    </script>
  </body>-->
