<?php 

session_start();
include("ConnexionServeur.php");


$statut = $_GET['statut'];
$ID = $_GET['id'];

if($statut == 1)
{
		$sql=connection("INSERT INTO objetvendu (Objet, IDclient, IDvendeur, Prix) SELECT `IDobjet`, IDclient, IDvendeur, Prixnouveau FROM offre where `IDobjet` = '$ID' AND IDclient != ''");
}
else
{
	$cheminimg = connection("UPDATE `offre` SET `statut`= 'Acheteur' WHERE `IDobjet` = '$ID' AND `IDvendeur` = $_COOKIE[IDhumain]");
}
header("location: ../Front/ventes.php")
 ?>