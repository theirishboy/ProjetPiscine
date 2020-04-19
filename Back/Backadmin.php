<?php 


session_start(); 
include("ConnexionServeur.php"); 
$ID = $_GET['ID'];

$sql = connection("SELECT * FROM `objet art` WHERE `ID` = '$ID'");
$data = mysqli_fetch_assoc($sql);

if($data['Type de vente'] == "Enchere")
{
	$sql = connection("DELETE FROM `enchere` WHERE `IDobjet` = '$ID'");

}

if($data['Type de vente'] == "Negociation")
{
	$sql = connection("DELETE FROM `offre` WHERE `IDobjet` = '$ID'");

}

$sql = connection("DELETE FROM `images` WHERE `ID` = '$data[Nimage]'");

$sql = connection("DELETE FROM `objet art` WHERE `ID` = '$ID'");

header("location: ../Front/AdminItem.php");

 ?>