<?php

// Variable MySQL (Maria DB)
$dbhost = 'localhost';	// serveur de BDD (localhost?)
$dbuser = 'root';		// utilisateur bdd
$dbpass = "";		// mot de passe bdd
$dbname = 'exo';  // nom de la bdd

//connection à la BDD
try
{
	$bdd = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}  

?>