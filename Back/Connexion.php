<?php 
session_start();
include("ConnexionServeur.php");

$login = isset($_POST["login"])? $_POST["login"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : ""; 
$sql = "SELECT * FROM `humain` WHERE `humain`.`Nom` = 'Perrin'"; 

$login="leroux";
$mdp="motdepasse";
    // mauvais couple id/mdp}

$testmotdepasse = "SELECT ID FROM `humain` WHERE `humain`.`Mot_de_passe`=PASSWORD('$mdp') 
AND `humain`.`login`= '$login'";

//$Tmdp=connection($testmotdepasse);
$Tmdp=connection($testmotdepasse);
$data = mysqli_fetch_assoc($Tmdp);
if (mysqli_num_rows($Tmdp)==0)
{
	echo "mauvais mdp";
}
else
{
	echo "bon mdp";
}
$req = "SELECT * FROM `vendeur`";
$result = connection($req); 
$data2 = mysqli_fetch_assoc($result);

if($data['ID'] == $data2['Humain'])
{

	echo "vendeur";
}
$req = "SELECT * FROM `client`";
$result = connection($req); 
$data2 = mysqli_fetch_assoc($result);
if($data['ID'] == $data2['Humain'])
{

	echo "client";
}
$req = "SELECT * FROM `admin`";
$result = connection($req); 
$data2 = mysqli_fetch_assoc($result);
if($data['ID'] == $data2['Humain'])
{

	echo "admin";
}
	
?>