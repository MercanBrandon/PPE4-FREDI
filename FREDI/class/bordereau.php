<?php
require '_config.php';

  class Bordereau
  {
    public $date;
    public $motif;
    public $trajet;
    public $kms;
    public $cout;
    public $peage;
    public $repas;
    public $hebergement;

    public function __construct($post) //instancie
    {
      $this->date = $post['date'];
      $this->motif = $post['motif'];
      $this->trajet = $post['trajet'];
      $this->kms = $post['kms'];
      $this->cout = $post['cout'];
      $this->peage = $post['peage'];
      $this->repas = $post['repas'];
      $this->hebergement = $post['hebergement'];

      var_dump($_SESSION['email']);
    }

    public function SaveBordereau()
    {
      $dsn = 'mysql:dbname=bdfredi;host=127.0.0.1';
      $user = 'root';
      $password = '';
      $connexion = new PDO($dsn,$user,$password);
      $count = $connexion->exec('INSERT INTO `lignes_frais`(`adresse-mail`, `date`, `motif`, `trajet`, `km`, `cout-peage`, `cout-repas`, `cout-hebergement`) VALUES ($_SESSION["email"],$date,$motif,$trajet,$kms,$peage,$repas,$hebergement)');
      var_dump($count);
    }


  }
