<?php  
 
session_start(); 
include("ConnexionServeur.php"); 
 
 
$offre = $_GET['var1']; 
$ID = $_GET['var2']; 
 
$nouvelleoffre = connection("SELECT * FROM `offre`WHERE `IDobjet` = '$ID'"); 
$data = mysqli_fetch_assoc($nouvelleoffre); 
 
$creanouvelleoffre = connection("INSERT INTO `offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`, `NombreProposition`, `statut`) VALUES ('$data[IDobjet]', '$_COOKIE[IDhumain]', '$data[IDvendeur]', '$offre ', '1', 'Acheteur')"); 
header("Location: ../Front/MonPanier.php");  
 ?>
 