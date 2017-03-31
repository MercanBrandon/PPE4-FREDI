<?php
	$serveur='localhost';
	$user='root';
	$pass='';
	$bd='bdfredi';


	$dsn = 'mysql:dbname=".$bd."host=127.0.0.1';
	$user = 'root';
	$password = '';

	$connexion = new PDO($dsn,$user,$password);


	/*// connexion et choix de la base
	$mysqli = new mysqli($serveur,$user, $pass,$bd);
	if ($mysqli->connect_errno) {
	    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";
	*/
?>
