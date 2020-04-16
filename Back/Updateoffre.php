<?php 

session_start();
include("ConnexionServeur.php");


$offre = $_GET['var1'];
$ID = $_GET['var2'];

$nouvelleoffre = connection("SELECT * FROM `offre`WHERE `IDobjet` = '$ID' AND `IDclient` = '$_COOKIE[IDhumain]'");
$data = mysqli_fetch_assoc($nouvelleoffre);

$cheminimg = connection("UPDATE `offre` SET `Prixnouveau` = '$offre',`statut`= 'Acheteur',`NombreProposition`= `NombreProposition`+1 WHERE `IDobjet` = '$ID' ");


 ?>