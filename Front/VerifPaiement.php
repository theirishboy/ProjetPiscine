<?php
	
	session_start();
	include("../Back/ConnexionServeur.php");

	$info = connection("SELECT * FROM `client` WHERE `Humain` = '$_COOKIE[IDhumain]'");
    $datapaiement = mysqli_fetch_assoc($info);    
    $prix=$_GET['prix'];
    $Type_Carte=isset($_POST["Type_Carte"])? $_POST["Type_Carte"] : "";
    $N_Carte=isset($_POST["N_Carte"])? $_POST["N_Carte"] : "";
    $NomCarte=isset($_POST["NomCarte"])? $_POST["NomCarte"] : "";
    $Date=isset($_POST["Date"])? $_POST["Date"] : "";
    $Code=isset($_POST["Code"])? $_POST["Code"] : "";


if($Type_Carte==$datapaiement['Type_de_carte'] && $N_Carte==$datapaiement['Numero_de_carte'] && $NomCarte==$datapaiement['Nomcarte'] && $Date==$datapaiement['Dateexpi'] && $Code==$datapaiement['Codesecu'])
{
	header("Location: Acceuil.php");

}
else{
	header("Location: Paiement.php?tot=$prix");
}
?>
