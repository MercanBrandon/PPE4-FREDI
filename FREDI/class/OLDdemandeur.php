<?php

  class Demandeur
  {
    private $mail;
    private $nom;
    private $prenom;
    private $rue;
    private $cp;
    private $password;
    private $ville;

    public $dsn = 'mysql:dbname=bdfredi;host=127.0.0.1';
    public $user = 'root';
    public $dbpassword = '';
    public $pdo = new PDO($dsn,$user,$dbpassword);

    $sth = $pdo->prepare("SELECT `adresse-mail``nom``prenom``rue``cp``ville` FROM `demandeurs` WHERE `adresse-mail`= '$mail' and `password`= '$mdp'");
    $sth->execute();

    $result = $sth->fetch(PDO::FETCH_ASSOC);
    print_r($result);

    function __construct(String $mail, /*$nom, $prenom, $rue, $cp, $ville,*/String $password)
    {
      $this->mail = $mail;
      //$this->nom = $nom;
      //$this->prenom = $prenom;
      //$this->rue = $rue;
      //$this->cp = $cp;
      //$this->ville = $ville;
      $this->password = $password;
    }

    function identite(){
      return $nom." ".$prenom;
    }

    function test(){
      echo $result;
    }
  }

 ?>
