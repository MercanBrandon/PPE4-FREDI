<?php
/**
 *
 */
class Personne
{
  protected $id_pers;
  protected $nom_pers;
  protected $prenom_pers;
  protected $dateNaiss_pers;

  function __construct($nom_pers,$prenom_pers,$dateNaiss_pers)
  {
    if (isset($dateNaiss_pers)&& !empty($dateNaiss_pers)) {
      include '_config.php';
      $sql = $connexion->prepare("INSERT INTO `personne`(`nom_pers`, `prenom_pers`, `dateNaiss_pers`) VALUES ('$nom_pers','$prenom_pers','$dateNaiss_pers')");
    }else {
      $sql = $connexion->prepare("INSERT INTO `personne`(`nom_pers`, `prenom_pers`) VALUES ('$nom_pers','$prenom_pers')");
    }
    $sql->execute();
  }

}

?>
