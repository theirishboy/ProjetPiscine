<?php 
session_start();
include("Back/ConnexionServeur.php");

$login = isset($_POST["login"])? $_POST["login"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : ""; 


$statut="";
    // mauvais couple id/mdp}

$testmotdepasse = "SELECT ID FROM `humain` WHERE `humain`.`Mot_de_passe`=PASSWORD('$mdp') 
AND `humain`.`login`= '$login'";

//$Tmdp=connection($testmotdepasse);
$Tmdp=connection($testmotdepasse);
$data = mysqli_fetch_assoc($Tmdp);

$IDhumain = $data['ID'];
if (mysqli_num_rows($Tmdp)==0)
{
	echo "mauvais mdp";
	header("Location: Front/Connexion.php");
}

else
{
	
	$req = "SELECT * FROM `vendeur`";
	$result = connection($req); 
	while($data2 = mysqli_fetch_assoc($result))
	{
		if($data['ID'] == $data2['Humain'])
		{

			$statut= "vendeur";
		}
	}
	$req = "SELECT * FROM `client`";
	$result = connection($req); 
	while($data2 = mysqli_fetch_assoc($result))
	{
		echo $data2['Humain'];
		if($data['ID'] == $data2['Humain'])
		{
			echo "oui";

			$statut= "client";
		}
	}
	$req = "SELECT * FROM `admin`";
	$result = connection($req); 
	while($data2 = mysqli_fetch_assoc($result))
	{
		if($data['ID'] == $data2['Humain'])
		{

			$statut= "admin";
		}
	}
	
	setcookie('login',$login);
	setcookie('mdp',$mdp);
	setcookie('statut',$statut);
	setcookie('IDhumain',$IDhumain);


	header("Location: Front/Acceuil.php");
}

?>