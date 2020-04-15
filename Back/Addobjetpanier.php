<?php 


session_start(); 
include("ConnexionServeur.php"); 
$IDobjet = isset($_POST["IDobjet"])? $_POST["IDobjet"] : "";
$IDhumain = isset($_POST["IDhumain"])? $_POST["IDhumain"] : "";
$Prix = isset($_POST["Prix"])? $_POST["Prix"] : "";


$req = "INSERT INTO `panier` (`Humain`, `Objet`, `Prix`) VALUES ('$IDhumain','$IDobjet','$Prix');"; 
$result = connection($req);  
 ?>