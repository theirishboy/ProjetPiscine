<?php 

session_start();
include("ConnexionServeur.php");


$statut = $_GET['statut'];
$ID = $_GET['id'];

if($statut == "accepter")
{

}
else
{
	$cheminimg = connection("UPDATE `offre` SET `statut`= 'Acheteur' WHERE `IDobjet` = '$ID' AND `IDvendeur` = $_COOKIE[IDhumain]");
}


 ?>