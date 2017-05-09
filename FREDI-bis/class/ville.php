<?php
/**
 *
 */
class Ville
{
  public $cp_ville;
  public $nom_ville;
  function __construct($cp_ville,$nom_ville)
  {
    $this->cp_ville = $cp_ville;
    $this->nom_ville = $nom_ville;
  }

  function src_nom_ville($cp_ville){
    include '_config.php';
    $result = $connexion->query("SELECT `nom_ville` FROM `ville` WHERE `cp_ville`='$cp_ville'");
    return $result;
  }
}
 ?>
