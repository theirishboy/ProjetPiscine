<?php 


session_start(); 
include("ConnexionServeur.php"); 

$IDobjet = $_GET['ID'];
echo $IDobjet.$_COOKIE['IDhumain'];


$req = connection("DELETE FROM `panier` WHERE `Humain` = '$_COOKIE[IDhumain]' AND `Objet`  = '$IDobjet'");
header("Location: ../Front/MonPanier.php");  
//$result = connection($req);  
 ?>