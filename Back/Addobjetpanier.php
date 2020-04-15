<?php 


session_start(); 
include("ConnexionServeur.php"); 
$IDobjet = isset($_POST["IDobjet"])? $_POST["IDobjet"] : "";
$IDhumain = isset($_POST["IDhumain"])? $_POST["IDhumain"] : "";
$Prix = isset($_POST["Prix"])? $_POST["Prix"] : "";

$IDobjet = "15";
$IDhumain= "2";
$Prix= "1235";


$req = "INSERT INTO `panier` (`Humain`, `Objet`, `Prix`) VALUES ('$IDhumain','$IDobjet','$Prix');"; 
$result = connection($req);  
 ?>