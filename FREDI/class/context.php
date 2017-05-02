<?php
public class connexion{
  private $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
  private $user = 'dbuser';
  private $password = 'dbpass';

  public function __construct(dsn $dsn, user $user, password $password){
    $dsn = 'mysql:dbname=bdfredi;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $connexion = new PDO($dsn,$user,$password);
  }

  public function connexion(string $req){
    $query = $connexion->prepare($req);
    $query->execute();
    $count = $query->fetchColumn();
  }
}
?>
