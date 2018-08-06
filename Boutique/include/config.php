<?php 
$user = "root"; 		// identifiant de connexion 
$pass = ""; 			// mdp de connexion
$host = "localhost"; 	// serveur de bdd
$dbname = "pupuce"; 	// nom de la base
$msgKO = "";
$msgOK = "";

// connexion à la bdd
try {
	$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8", $user, $pass);
} catch (Exception $e) {
	$msgKO = "Erreur de connexion à la bdd : ".$e->getMessage();;
}
