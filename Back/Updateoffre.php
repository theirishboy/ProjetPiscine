<?php 

session_start();


$offre = $_GET['var1'];
$ID = $_GET['var2'];


connection("UPDATE `offre` SET `Prixnouveau` = '$offre',`statut`= 'Acheteur',`NombreProposition`= `NombreProposition`+1 WHERE `IDobjet` = '$ID' AND `IDclient` = '$_COOKIE[IDhumain]'");

header("location: ../Front/MonPanier.php")


 ?>