<?php include_once '_header.php' ;
require 'class/demandeur.php'; ?>

<div class="body-content">
  <form class="" action="#" method="post">
    <p><input type="mail" name="mail" value="" placeholder="adresse e-mail"></p>
    <p><input type="submit" name="newPass" value="Demander"></p>
  </form>
</div>

<?php
$mail = $_POST['mail'];

if (isset($mail) && (!empty($mail))) {
  $demandeur = new Demandeur($mail);
  $demandeur->recupMDP($mail);
  var_dump($result);

//   foreach ($connexion->query($sql) as $row) {
//         print $row['adresse-mail'] . "\t";
//         print $row['nom'] . "\t";
//         print $row['prenom'] . "\n";
//     }

} else {
  # code...
}
 ?>
