<?php
require 'personne.php';

class Adherant extends Personne
{
  $numLicence;
  $id_assoc;

  function __construct($nom_pers,$prenom_pers,$dateNaiss_pers,$numLicence)
  {
    parent::__construct($nom_pers,$prenom_pers,$dateNaiss_pers)
    
  }
}
 ?>
