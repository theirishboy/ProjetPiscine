<?php 
session_start(); 
include("ConnexionServeur.php"); 

$action="oui";
$Nbfois=4;
$prix=1450;
$IDclient=2;
$IDobjet=1;
if($action == "non")
{
	if($Nbfois >= 5)
	{
		connection("DELETE FROM `offre` WHERE `IDobjet` = '$IDobjet'AND `IDclient`='$IDclient' AND `IDvendeur` = '$_COOKIE[IDhumain]'");
	}
	else
	{
		connection("UPDATE `offre` SET `statut`= 'Vendeur' WHERE `IDobjet` = '$IDobjet' AND `IDclient`='$IDclient' AND `IDvendeur` = '$_COOKIE[IDhumain]'");
	}
}
elseif ($action == "oui") {
	connection("DELETE FROM `offre` WHERE `IDobjet` = '$IDobjet'AND `IDclient`='$IDclient' AND `IDvendeur` = '$_COOKIE[IDhumain]'");
	connection("INSERT INTO `objetvendu` (`Objet`, `IDclient`, `IDvendeur`, `Prix`) VALUES ('$IDobjet', '$IDclient', '$_COOKIE[IDhumain]', '$prix');");

}
header("Location: ../Front/objetvendu.php");
 ?>
