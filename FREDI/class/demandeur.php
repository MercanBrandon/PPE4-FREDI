<?php
//require '_config.php';

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
    $dsn = 'mysql:dbname=bdfredi;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $connexion = new PDO($dsn,$user,$password);
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
}

 ?>
