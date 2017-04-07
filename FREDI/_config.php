<?php
/**
 *
 */
class Connexion
{
	private $dsn;
	private $user;
	private $password;
	public $connexion;

	function __construct(Database $db, Host $host,User $user,password $password)
	{
		$this->dsn = 'mysql:dbname=".$bd."host=$host';
		$this->user = $user;
		$this->password = $password;

		$connexion = new PDO($this->dsn, $this->user, $this->password);
		$this->connexion = $connexion;
		return $connexion ;
	}


}



	/*// connexion et choix de la base
	$mysqli = new mysqli($serveur,$user, $pass,$bd);
	if ($mysqli->connect_errno) {
	    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";
	*/
?>
