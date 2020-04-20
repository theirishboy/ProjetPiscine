<?php 

session_start();
include("ConnexionServeur.php");


$statut = $_GET['statut'];
$ID = $_GET['id'];
$IDclient = $_GET['client'];
if($statut == 1)
{
		$sql=connection("INSERT INTO objetvendu (Objet, IDclient, IDvendeur, Prix, Nimage) SELECT `IDobjet`, IDclient, IDvendeur, Prixnouveau,'0' FROM offre where `IDobjet` = '$ID' AND IDclient = '$IDclient'");

		connection("UPDATE objetvendu set Nimage= (SELECT Nimage FROM `objet art` where ID ='$ID' ) WHERE IDclient='$IDclient' AND Objet='$ID'"); 
		$variablebesoin2=mysqli_fetch_assoc(connection("SELECT Prixnouveau FROM offre WHERE `IDobjet` = '$ID' AND IDclient = '$IDclient'"));
		$delete=connection("DELETE FROM `offre` WHERE `IDobjet` = '$ID'");
		$delete=connection("DELETE FROM `objet art` WHERE `IDobjet` = '$ID'");

		$MAJportemonnaire =connection("SELECT `PorteMonnaie` FROM `client` WHERE  `Humain`='$_COOKIE[IDhumain]'");
   		$onmajjj= mysqli_fetch_assoc($MAJportemonnaire);
   		$monnaiefinale=$onmajjj['PorteMonnaie']-$variablebesoin2['Prixnouveau'];

   		 connection("UPDATE `client` SET `PorteMonnaie` = '$monnaiefinale' WHERE `Humain` = '$_COOKIE[IDhumain]' ");




}
else
{
	$cheminimg = connection("UPDATE `offre` SET `statut`= 'Acheteur' WHERE `IDobjet` = '$ID' AND `IDvendeur` = $_COOKIE[IDhumain] AND  `IDclient`= '$IDclient'");
}
header("location: ../Front/ventes.php");
 ?>