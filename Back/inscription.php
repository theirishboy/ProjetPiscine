<?php 
session_start();
include("ConnexionServeur.php");

$Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
$Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
$Mail = isset($_POST["Mail"])? $_POST["Mail"] : "";
$login = isset($_POST["Login"])? $_POST["Login"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$Mot_de_passe = isset($_POST["Mot_de_passe"])? $_POST["Mot_de_passe"] : "";
$statut = isset($_GET["statut"])? $_GET["statut"] : "";
if($mdp != $Mot_de_passe)
{
	if($_POST['Type'] == "Client") 
		{header("Location: ../Front/CreateAccountClient.php");}
	if($_POST['Type'] == "Vendeur") 
		{header("Location: ../Front/CreateAccountVendeur.php");}
}
else
{
	$req = "INSERT INTO `humain` (`ID`, `Nom`, `Prenom`, `Login`, `Mot_de_passe`, `Mail`, `Nimage`) VALUES (NULL, '$Nom', '$Prenom', '$login', PASSWORD('$mdp'), '$Mail','6');";
	$result = connection($req); 
	$detection= "SELECT ID FROM `humain` WHERE `humain`.`Nom` = '$Nom'";
	$result = connection($detection);
	$data = mysqli_fetch_assoc($result);
	if($_POST['Type'] == "Vendeur")
	{

		$req ="INSERT INTO `vendeur`(`Humain`, `Imagesback`, `Imagesprofile`) VALUES ($data[ID],'','');";
		$result = connection($req); 
	}
	if($_POST['Type'] == "Client")
	{
		echo "ui";
		$AdresseL1 = isset($_POST["AdresseL1"])? $_POST["AdresseL1"] : "";
		$AdresseL2 = isset($_POST["AdresseL2"])? $_POST["AdresseL2"] : "";
		$Ville = isset($_POST["Ville"])? $_POST["Ville"] : "";
		$Code_Postal = isset($_POST["Code_Postal"])? $_POST["Code_Postal"] : "";
		$Pays = isset($_POST["Pays"])? $_POST["Pays"] : "";
		$N_Telephone = isset($_POST["N_Telephone"])? $_POST["N_Telephone"] : "";
		$Type_Carte = isset($_POST["Type_Carte"])? $_POST["Type_Carte"] : "";
		$N_Carte = isset($_POST["N_Carte"])? $_POST["N_Carte"] : "";
		$NomCarte = isset($_POST["NomCarte"])? $_POST["NomCarte"] : "";
		$PorteMonnaie = isset($_POST["PorteMonnaie"])? $_POST["PorteMonnaie"] : "";

		$DateExpiration = isset($_POST["DateExpiration"])? $_POST["DateExpiration"] : "";
		$Code = isset($_POST["Code"])? $_POST["Code"] : "";
		$req ="INSERT INTO client (Humain, N_Telephone, Pays, Ville, Code_Postal, AdresseL1, AdresseL2, Type_de_carte, Numero_de_carte, Nomcarte, Dateexpi, Codesecu,`PorteMonnaie`) VALUES ('$data[ID]', '$N_Telephone', '$Pays', '$Ville', '$Code_Postal', '$AdresseL1', '$AdresseL2', '$Type_Carte', '$N_Carte', '$NomCarte', '$DateExpiration', '$Code','$PorteMonnaie');";
		$result = connection($req); 
	}
	if($statut == 1)
	{
		header("Location: ../Front/AdminVendeur.php");

	}
	else
	{
		header("Location: ../Front/Connexion.php");

	}
}





?>