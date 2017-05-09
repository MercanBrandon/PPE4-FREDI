<?php
require 'demandeur.php';
/**
 *
 */
class Bordereau
{

  public $id_bord;
  public $date_bord;
  public $id_demand;
  public $total_bord;

  function __construct(Demandeur $unDemandeur)
  {
    $this->id_bord = Date("Ymd").$unDemandeur->id_demand;
    $this->date_bord = Date("Y-m-d");
    $this->id_demand = $unDemandeur->id_demand;
    include '_config.php';
    $count = $connexion->exec("INSERT INTO bordereau (id_bord, id_demand) VALUES ($this->id_bord,$this->id_demand)");
    //var_dump($count);
  }

  function getId_bord(){
    return $this->id_bord;
  }

}

/**
 *
 */
require 'ville.php';
class LigneFrais
{

  public $id_bord;
  public $id_ligne;
  public $date_ligne;
  public $motif;
  public $ville_depart;
  public $ville_arrive;
  public $km_ligne;
  public $cout_trajet;
  public $peage;
  public $repas;
  public $hebergement;
  public $total_ligne;
  function __construct(Bordereau $unBord, $date_ligne, $motif,$cp_ville_depart,$cp_ville_arrive, $km_ligne,$cout_trajet,$peage,$repas,$hebergement)
  {
    $this->id_bord = $unBord->id_bord;
    $this->date_ligne = $date_ligne;
    $this->motif = $motif;
    $this->ville_depart = $cp_ville_depart;
    $this->ville_arrive = $cp_ville_arrive;
    $this->km_ligne = $km_ligne;
    $this->cout_trajet = $cout_trajet;
    $this->peage = $peage;
    $this->repas = $repas;
    $this->hebergement = $hebergement;


    $this->total_ligne = ($cout_trajet + $peage + $repas + $hebergement);

    include '_config.php';
    $count = $connexion->exec("INSERT INTO ligne_frais(id_bord,date_ligne, motif,  cp_ville_depart, cp_ville_arrive, km_ligne, cout_trajet, peage, repas, hebergement, total) VALUES ('$unBord->id_bord','$date_ligne', '$motif', '$cp_ville_depart', '$cp_ville_arrive', '$km_ligne', '$cout_trajet', '$peage', '$repas', '$hebergement', '$this->total_ligne')");
    //var_dump($count);
    //$count = $connexion->exec("INSERT INTO `ligne_frais`(`id_bord`, `motif`, `cp_ville_depart`, `cp_ville_arrive`, `km_ligne`, `cout_trajet`, `peage`, `repas`, `hebergement`, `total`) VALUES ('$unBord->id_bord','$motif', '$cp_ville_depart', '$cp_ville_arrive', '$km_ligne', '$cout_trajet', '$peage', '$repas', '$hebergement', '$total_ligne')");
  }


}

 ?>
