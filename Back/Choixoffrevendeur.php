<?php 
session_start(); 
include("ConnexionServeur.php"); 

$action;
$Nbfois
$IDoffre;
$IDclient;
if($action == "non")
{
	if($Nbfois >= 5)
	{
		$sql = connection("DELETE FROM `offre` WHERE `IDclient`='$IDclient' AND `IDvendeur` = '$_COOKIE[IDhumain]'");
	}
	else
	{
		
	}
}
 ?>
