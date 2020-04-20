<?php 

session_start();
include("ConnexionServeur.php");


$statut = $_GET['statut'];
$ID = $_GET['id'];
$IDclient = $_GET['client'];

if($statut == 1)
{
		$sql=connection("INSERT INTO objetvendu (Objet, IDclient, IDvendeur, Prix) SELECT `IDobjet`, IDclient, IDvendeur, Prixnouveau FROM offre where `IDobjet` = '$ID' AND IDclient == '$IDclient'");
		$delete=connection("DELETE FROM `offre` WHERE `IDobjet` = '$ID'");
		$delete=connection("DELETE FROM `objet art` WHERE `IDobjet` = '$ID'");

		$MAJportemonnaire =connection("SELECT `PorteMonnaie` FROM `client` WHERE  `Humain`='$_COOKIE[IDhumain]'");
   		$onmajjj= mysqli_fetch_assoc($MAJportemonnaire);
   		$monnaiefinale=$onmajjj['PorteMonnaie']-$variablebesoin['Prixnouveau'];

   		 connection("UPDATE `client` SET `PorteMonnaie` = '$monnaiefinale' WHERE `Humain` = '$_COOKIE[IDhumain]' ");




}
else
{
	$cheminimg = connection("UPDATE `offre` SET `statut`= 'Acheteur' WHERE `IDobjet` = '$ID' AND `IDvendeur` = $_COOKIE[IDhumain] AND  `IDclient`= '$IDclient'");
}
header("location: ../Front/ventes.php")
 ?>