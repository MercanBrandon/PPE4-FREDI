<?php session_start();
require 'class/demandeur.php';
$leDemandeur = new Demandeur;
$leDemandeur = select_demand($_SESSION["email"]);

echo "<p>Bienvenue Mme/Mr ".$demandeur['nom_pers']." ".$demandeur['prenom_pers']."</p>";
?>
