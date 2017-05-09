<?php
require 'personne.php';

class Demandeur extends Personne
{
  public $id_pers;
  public $id_demand;
  public $nom_pers;
  public $prenom_pers;
  public $dateNaiss_pers;
  public $email_demand;
  public $adr_demand;
  public $ville_demand;

  function __construct($email_demand){
    include '_config.php';
    $sql = $connexion->prepare("SELECT demandeur.id_pers, id_demand, nom_pers, prenom_pers, dateNaiss_pers, email_demand, adr_demand, ville_demand FROM demandeur, personne WHERE email_demand = '$email_demand' AND personne.id_pers = demandeur.id_pers");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    $this->id_pers = $result['id_pers'];
    $this->id_demand = $result['id_demand'];
    $this->nom_pers = $result['nom_pers'];
    $this->prenom_pers = $result['prenom_pers'];
    $this->dateNaiss_pers = $result['dateNaiss_pers'];
    $this->email_demand = $result['email_demand'];
    $this->adr_demand = $result['adr_demand'];
    $this->ville_demand = $result['ville_demand'];

  }

}
 ?>
