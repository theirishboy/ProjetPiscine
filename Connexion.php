<?php 
session_start();
include("Back/ConnexionServeur.php");

$login = isset($_POST["login"])? $_POST["login"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : ""; 


$statut="";
    // mauvais couple id/mdp}

$coAdmin = connection("SELECT ID FROM `humain` WHERE `humain`.`Mot_de_passe`=PASSWORD('$mdp') 
	AND `humain`.`login`= '$login'");

$coclient = connection("SELECT ID FROM `humain` WHERE `humain`.`Mot_de_passe`=PASSWORD('$mdp') 
	AND `humain`.`Mail`= '$login'");

$covendeur = connection("SELECT ID FROM `humain` WHERE `humain`.`login`='$mdp' 
	AND `humain`.`Mail`= '$login'");

//$Tmdp=connection($testmotdepasse);

$dataA = mysqli_fetch_assoc($coAdmin);
$dataC = mysqli_fetch_assoc($coclient);
$dataV = mysqli_fetch_assoc($covendeur);

$IDhumainA = $dataA['ID'];
$IDhumainC = $dataC['ID'];
$IDhumainV = $dataV['ID'];

if (mysqli_num_rows($coAdmin)==0 && mysqli_num_rows($coclient)==0 && mysqli_num_rows($covendeur)==0 )
{
	echo "mauvais mdp";
	header("Location: Front/Connexion.php");
}
else
{
	$req = "SELECT * FROM `vendeur`";
	$result = connection($req); 
	if(mysqli_num_rows($covendeur) !=0 )
	{
		
		while($data2 = mysqli_fetch_assoc($result) )
		{

			if($IDhumainV == $data2['Humain'])
			{

				$statut= "vendeur";
				setcookie('IDhumain',$IDhumainV);

			}
		}
	}
	$req = "SELECT * FROM `client`";
	$result = connection($req); 
	if(mysqli_num_rows($coclient) !=0 )
	{
		
		while($data2 = mysqli_fetch_assoc($result))
		{
			if($IDhumainC  == $data2['Humain'])
			{

				$statut= "client";
			setcookie('IDhumain',$IDhumainC);

			}
		}
	}
	$req = "SELECT * FROM `admin`";
	$result = connection($req); 
	if(mysqli_num_rows($coAdmin) !=0 )
	{
		while($data2 = mysqli_fetch_assoc($result))
		{

			if($IDhumainA == $data2['Humain'])
			{

				$statut= "admin";
				setcookie('IDhumain',$IDhumainA);

			}
		}
	}
	
	
	setcookie('login',$login);
	setcookie('mdp',$mdp);
	setcookie('statut',$statut);
	echo $statut;
	if($statut == '')
	{
		header("Location: Front/connexion.php");
	}
	else
	{
		header("Location: Front/Acceuil.php");

	}
}

?>