<?php 

session_start();
include("ConnexionServeur.php");


$statut = $_GET['statut'];
$ID = $_GET['id'];
echo "bonjour";
if($statut == 1)
{
		$sql=connection("INSERT INTO objetvendu (Objet, IDclient, IDvendeur, Prix, Nimage) SELECT `IDobjet`, IDclient, IDvendeur, Prixnouveau,'0' FROM offre where `IDobjet` = '$ID' AND IDclient = '$_COOKIE[IDhumain]'");

		$variablebesoin = mysqli_fetch_assoc(connection("SELECT `IDobjet`, IDclient, IDvendeur, Prixnouveau FROM offre where `IDobjet` = '$ID' AND IDclient = '$_COOKIE[IDhumain]'"));
		
		connection("UPDATE objetvendu set Nimage= (SELECT Nimage FROM `objet art` where ID ='$ID' ) WHERE IDclient='$IDclient' AND Objet='$ID'"); 


		$delete=connection("DELETE FROM `offre` WHERE `IDobjet` = '$ID'");


		$delete=connection("DELETE FROM `objet art` WHERE `IDobjet` = '$ID'");

		$MAJportemonnaire =connection("SELECT `PorteMonnaie` FROM `client` WHERE  `Humain`='$_COOKIE[IDhumain]'");
   		$onmajjj= mysqli_fetch_assoc($MAJportemonnaire);
   		$monnaiefinale=$onmajjj['PorteMonnaie']-$variablebesoin['Prixnouveau'];

   		 connection("UPDATE `client` SET `PorteMonnaie` = '$monnaiefinale' WHERE `Humain` = '$_COOKIE[IDhumain]' ");



}
else
{
		$delete=connection("DELETE FROM `offre` WHERE `IDobjet` = '$ID' AND IDclient='$_COOKIE[IDhumain]' ");
		$cheminimg = connection("UPDATE `offre` SET `Prixnouveau`= '' WHERE `IDobjet` = '$ID' AND `IDclient` = ''");

}
header("location: ../Front/Monpanier.php");
 ?>