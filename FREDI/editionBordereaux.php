<?php session_start();
//require_once 'class/demandeur.php';
require_once 'class/bordereau.php';
require_once 'class/personne.php';
//$leDemandeur = new Demandeur($_SESSION['email']);
//$unBordereau = new Bordereau($leDemandeur);
//$leDemandeur = $_SESSION['demandeur'];

$leDemandeur = new Demandeur($_SESSION['email']);
$unBordereau = new Bordereau($leDemandeur);
$motif=$_POST['motif'];
$date_ligne = $_POST['date'];
$cp_ville_depart=$_POST['ville_depart'];
$cp_ville_arrive=$_POST['ville_arrive'];
$km_ligne=$_POST['km_ligne'];
$cout_trajet=$_POST['cout_trajet'];
$peage=$_POST['peage'];
$repas=$_POST['repas'];
$hebergement=$_POST['hebergement'];

$uneLigne = new LigneFrais($unBordereau,$date_ligne,$motif,$cp_ville_depart,$cp_ville_arrive, $km_ligne,$cout_trajet,$peage,$repas,$hebergement);

//var_dump($leDemandeur);echo "</br>";
//var_dump($unBordereau);echo "</br>";
//var_dump($uneLigne);echo "</br>";

//$uneLigne = new LigneFrais($unBordereau,);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title>Edition Bordereau</title>
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
    		<link rel="stylesheet" media="screen, projection" href="stylesheets/main.css" />
    </head>
    <body>
      <div class="body-content">
        <img src="images\logo_ligue.png" alt="M2L">
        <article class="main">


      <h2>Note de frais des bénévoles </h2><br/><h3>Année civile <?php echo date('Y'); ?></h3><br/>

      <p style="text-align:left;">Je soussigné(e) <?php echo $leDemandeur->nom_pers." ".$leDemandeur->prenom_pers.""; ?> <br/>
      demeurant <?php echo $leDemandeur->adr_demand." ".$leDemandeur->ville_demand." "; ?> <br/>
      certifie renoncer au remboursement des frais ci-dessous et les laisser à l'association<br/>
      Salle d'Armes de Villers lès Nancy, 1 rue Rodin - 54600 Villers lès Nancy <br/>
      en tant que don.</p>

      <table class="bordereau">
        <caption><h3>Frais de Déplacement</h3><caption>
          <tr><th>Date</th><th>Motif</th><th>Ville Depart</th><th>Ville Arrivée</th><th>Kms Parcourus</th><th>Péages</th><th>Repas</th><th>Hebergement</th><th>Total</th></tr>

          <tr><td><?php echo $uneLigne->date_ligne; ?></td><td><?php echo $uneLigne->motif; ?></td><td><?php echo $uneLigne->ville_depart; ?></td><td><?php echo $uneLigne->ville_arrive; ?></td><td><?php echo $uneLigne->km_ligne; ?></td><td><?php echo $uneLigne->peage; ?></td><td><?php echo $uneLigne->repas; ?></td><td><?php echo $uneLigne->hebergement; ?></td><td><?php echo $uneLigne->total_ligne; ?></td></tr>
      </table>
        <form method="POST" action="index.php">

          <input type="button" name="newLigne" value="Nouvelle ligne" onclick="newLigne()">
        </form>

        </article>
      </div>
    </body>
</html>

<script type="text/javascript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
    $(.SaveBordereau).click(function()){
      $.ajax :
    }
</script>
