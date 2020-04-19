<?php 

session_start();
include("ConnexionServeur.php");


$statut = $_GET['statut'];
$ID = $_GET['id'];
echo "bonjour";
if($statut == 1)
{
		$sql=connection("INSERT INTO objetvendu (Objet, IDclient, IDvendeur, Prix) SELECT `IDobjet`, IDclient, IDvendeur, Prixnouveau FROM offre where `IDobjet` = '$ID' AND IDclient = '$_COOKIE[IDhumain]'");
		$delete=connection("DELETE FROM `offre` WHERE `IDobjet` = '$ID'");
		$delete=connection("DELETE FROM `objet art` WHERE `IDobjet` = '$ID'");

}
else
{
		$delete=connection("DELETE FROM `offre` WHERE `IDobjet` = '$ID' AND IDclient='$_COOKIE[IDhumain]' ");
		$cheminimg = connection("UPDATE `offre` SET `Prixnouveau`= '' WHERE `IDobjet` = '$ID' AND `IDclient` = ''");

}
header("location: ../Front/Monpanier.php");
 ?>