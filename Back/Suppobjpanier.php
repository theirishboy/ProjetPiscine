<?php 


session_start(); 
include("ConnexionServeur.php"); 
$IDobjet = isset($_POST["IDobjet"])? $_POST["IDobjet"] : "";
$IDhumain = isset($_POST["IDhumain"])? $_POST["IDhumain"] : "";

echo "on test git hub";


$req = "DELETE FROM `panier` WHERE `Humain` = '$IDhumain' AND `objet`  = '$IDobjet'"; 
$result = connection($req);  
 ?>