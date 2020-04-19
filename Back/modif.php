<?php 
session_start();
include("ConnexionServeur.php");

$Prénom = isset($_POST["Prénom"])? $_POST["Prénom"] : "";
$Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
$Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
$Mail = isset($_POST["Mail"])? $_POST["Mail"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$Adresse1 = isset($_POST["adresse1"])? $_POST["adresse1"] : "";
$Adresse2 = isset($_POST["adresse2"])? $_POST["adresse2"] : "";
$Ville = isset($_POST["ville"])? $_POST["ville"] : "";
$CodePostal = isset($_POST["codepostal"])? $_POST["codepostal"] : "";
$Pays = isset($_POST["pays"])? $_POST["pays"] : "";
$Téléphone = isset($_POST["téléphone"])? $_POST["téléphone"] : "";


echo $Prénom;
echo '<br>'
echo $Nom;
echo '<br>'
echo $Pseudo;
echo '<br>'
echo $Mail;
echo '<br>'
echo $mdp;
echo '<br>'
echo $Adresse1;
echo '<br>'
echo $Adresse2;
echo '<br>'
echo $Ville;
echo '<br>'
echo $CodePostal;
echo '<br>'
echo $Pays;
echo '<br>'
echo $Téléphone;
echo '<br>'


?>