<?php

$hote = "localhost";
$dbname = "fredi";
$user = "root";
$mdp = "";



try
{
	$bdd = new PDO("mysql:host=$hote;dbname=$dbname;charset=utf8", $user, $mdp);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>