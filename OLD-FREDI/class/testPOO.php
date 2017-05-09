<?php
include 'Personnage.php';
include 'personnagesManager.php';
$perso = new Personnage([
  'nom' => 'Victor',
  'forcePerso' => 5,
  'degats' => 0,
  'niveau' => 1,
  'experience' => 0
]);

$db = new PDO('mysql:host=localhost;dbname=bdfredi', 'root', '');
$manager = new PersonnagesManager($db);

$manager->add($perso);
?>
