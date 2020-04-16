<?php 


session_start(); 
include("ConnexionServeur.php"); 

$IDobjet =$_GET['ID'];
$IDhumain = isset($_POST["IDhumain"])? $_POST["IDhumain"] : "";
$sql = connection("SELECT * FROM  `objet art` WHERE  `objet art`. `ID` = '$IDobjet'");
$ItemF = mysqli_fetch_assoc($sql);
$Prix = $ItemF['Prix'];
$IDhumain = 1;

$req = "INSERT INTO `panier` (`Humain`, `Objet`, `Prix`) VALUES ('$IDhumain','$IDobjet','$Prix');"; 
$result = connection($req);  
header("Location: ../Front/Acceuil.php");
?>