<?php


class Association
{
  $id_assoc;
  $nom_assoc;
  $adr_assoc;
  $cp_assoc;
  $ville_assoc;

  function __construct($nom_assoc,$adr_assoc,$cp_assoc,$ville_assoc)
  {
    $this->prenom_assoc = $prenom_pers;
    $this->adr_assoc = $adr_assoc;
    $this->cp_assoc = $adr_assoc;
    $this->ville_assoc = $ville_assoc;
    include '_config.php';
    $sql = $connexion->prepare("INSERT INTO `association`(`nom_assoc`, `adr_assoc`, `cp_assoc`, `ville_assoc`) VALUES ('$nom_assoc','$adr_assoc','$cp_assoc','$ville_assoc')");
    $sql->execute;
    $srcId = $connexion->prepare("SELECT `id_assoc` FROM `association` WHERE `nom_assoc` = '$nom_assoc'");
    $srcId->execute();
    $this->id_assoc = $srcId->fetch();
    var_dump($id_assoc);
  }
}
 ?>
