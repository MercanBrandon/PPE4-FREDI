<?php
require '_config.php';

/**
 *
 */
class Demandeur
{
  //public $email;
  public $nom;
  public $prenom;
  public $rue;
  public $cp;
  public $ville;

  function __construct($email)
  {
    include '_config.php';
    $sql = $connexion->prepare ("SELECT `nom`, `prenom`, `rue`, `cp`, `ville` FROM `demandeurs` WHERE `adresse-mail`= '$email'");
    $sql->execute();
    $result = $sql->fetch();

    $this->nom = $result["nom"];
    $this->prenom = $result["prenom"];
    $this->rue = $result["rue"];
    $this->cp = $result["cp"];
    $this->ville = $result["ville"];
    var_dump($result);
  }

  function recupMDP($mail){
    $dsn = 'mysql:dbname=bdfredi;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $connexion = new PDO($dsn,$user,$password);
    $sql = $connexion->prepare("SELECT `password` FROM `demandeurs` WHERE `adresse-mail`='$mail'");
    $sql->execute();
    $result = $sql->fetch();

    $subject = 'Identifiants FREDI';
    $message = 'Mr,Mme'.$this->nom.' '.$this->prenom.'votre mot de passe est le suivant :'.$result['password'].'.';
    mail($mail,$subject,$message);

  }
}


 ?>
