<?php 

session_start();
include("ConnexionServeur.php");


$offre = $_GET['var1'];
$ID = $_GET['var2'];


$cheminimg = connection("UPDATE `offre` SET `Prixnouveau` = '$offre',`statut`= 'Vendeur' WHERE `IDobjet` = '$ID' AND `IDvendeur` = $_COOKIE[IDhumain]");

header("location: ../Front/ventes.php")


 ?>