<?php session_start();

require 'class/demandeur.php';
require 'class/bordereau.php';

//var_dump($_POST);
//foreach ($_POST as $value) {
//    echo "Valeur : $value<br />\n";
//}
$email = $_SESSION['email'];
$post = $_POST;
$bord = new Bordereau($post);
$demandeur = new Demandeur($email);
var_dump($demandeur);
var_dump($_SESSION['email']);
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

      <p style="text-align:left;">Je soussigné(e) <?php echo $demandeur->nom." ".$demandeur->prenom.""; ?> <br/>
      demeurant <?php echo $demandeur->rue." ".$demandeur->cp." ".$demandeur->ville.""; ?> <br/>
      certifie renoncer au remboursement des frais ci-dessous et les laisser à l'association<br/>
      Salle d'Armes de Villers lès Nancy, 1 rue Rodin - 54600 Villers lès Nancy <br/>
      en tant que don.</p>

      <table class="bordereau">
        <caption><h3>Frais de Déplacement</h3><caption>
          <tr><th>Date</th><th>Motif</th><th>Trajet</th><th>Kms Parcourus</th><th>Cout Trajet</th><th>Péages</th><th>Repas</th><th>Hebergement</th><th>Total</th></tr>
          <tr><td><?php echo $bord->date; ?></td><td><?php echo $bord->motif; ?></td><td><?php echo $bord->trajet; ?></td><td><!--A definir--></td><td><?php echo $bord->cout; ?></td><td><?php echo $bord->peage; ?></td><td><?php echo $bord->repas; ?></td><td><?php echo $bord->hebergement; ?></td><td><?php echo "A voir"; ?></td></tr>
      </table>
        <form method="POST" action="index.php">

          <input type="button" name="SaveBordereau" value="Envoyer" onclick="SaveBordereau()">
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
