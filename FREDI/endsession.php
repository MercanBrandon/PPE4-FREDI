<?php session_start();
echo "merci d'avoir utiliser notre service";
session_destroy();
var_dump($_SESSION['email']);
 ?>
