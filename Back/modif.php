<?php 
session_start();
include("ConnexionServeur.php");

$Prénom = isset($_POST["prénom"])? $_POST["prénom"] : "";
$Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
$Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
$Mail = isset($_POST["Mail"])? $_POST["Mail"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

$photoP =  isset($_POST["avatar"])? $_POST["avatar"] : "";

$photoB =  isset($_POST["avatar2"])? $_POST["avatar2"] : "";
$photoP = "Images/".$photoP; 
$photoB = "Images/".$photoB; 


if($Prénom != '')
{
	$sql = connection("UPDATE `humain` SET `Prenom`='$Prénom'  WHERE `ID`='$_COOKIE[IDhumain]'");
}
if($Nom != '')
{
	$sql = connection("UPDATE `humain` SET `Nom`='$Nom'  WHERE `ID`='$_COOKIE[IDhumain]'");
}


if($Pseudo != '')
{
	$sql = connection("UPDATE `humain` SET `Login`='$Pseudo'  WHERE `ID`='$_COOKIE[IDhumain]'");
}



if($Mail != '')
{
	$sql = connection("UPDATE `humain` SET `Mail`='$Mail'  WHERE `ID`='$_COOKIE[IDhumain]'");
}
if($mdp != '')
{
	$sql = connection("UPDATE `humain` SET `Mot_de_passe`='$mdp'  WHERE `ID`='$_COOKIE[IDhumain]'");
}

if($photoP != '')
{
	$sql = connection("UPDATE `vendeur` SET `Imagesprofile`='$photoP'  WHERE `humain`='$_COOKIE[IDhumain]'");
}
if($photoB != '')
{
	$sql = connection("UPDATE `vendeur` SET `Imagesback`='$photoB'  WHERE `humain`='$_COOKIE[IDhumain]'");
}
header("Location: ../Front/modif.php")

?>