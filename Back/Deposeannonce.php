


<?php  
 
session_start(); 
include("ConnexionServeur.php"); 
$Nom =  isset($_POST["article"])? $_POST["article"] : "";
$Categorie =  isset($_POST["catégorie"])? $_POST["catégorie"] : "";
$Description =  isset($_POST["description"])? $_POST["description"] : "";
$Choixvente =  isset($_POST["vente"])? $_POST["vente"] : "";
$photo =  isset($_POST["avatar"])? $_POST["avatar"] : "";
$Prix =  isset($_POST["Prix"])? $_POST["Prix"] : "";
$date =  isset($_POST["date"])? $_POST["date"] : "";
$time =  isset($_POST["time"])? $_POST["time"] : "";
$Bonjour = isset($_GET["Bonjour"])? $_GET["Bonjour"] : "";
echo $Bonjour;
$datetime=$date." ".$time;

$photoR = "Images/"."$photo";
$sql=connection("INSERT INTO `images` (`ID`, `Chemin1`, `Chemin2`, `Chemin3`) VALUES (NULL, '$photoR', '', '')");
$sql=connection("SELECT `ID` FROM `images` WHERE `images`.`Chemin1` ='$photoR'");
$data2=mysqli_fetch_assoc($sql);



$sql=connection("INSERT INTO `objet art` (`ID`, `Nom`, `Description`, `Categorie`, `Type de vente`, `Prix`, `Nimage`) VALUES (NULL, '$Nom', '$Description', '$Categorie', '$Choixvente', '$Prix', '$data2[ID]')");

$sql=connection("SELECT * FROM `objet art` WHERE `objet art`.`Nom` = '$Nom' AND `objet art`.`Categorie` = '$Categorie'");
$data=mysqli_fetch_assoc($sql);

if($Choixvente = "Negociation")
{
	$sql=connection("INSERT INTO `offre` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixnouveau`, `NombreProposition`, `statut`) VALUES ('$data[ID]', '0', '$_COOKIE[IDhumain]', '0', '0', 'Vendeur')");
}
if($Choixvente = "Enchere")
{
	echo "$data[ID]";
	echo "$datetime";
	$sql=connection("INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('$data[ID]', '0', '$_COOKIE[IDhumain]', '$Prix', '$Prix', '$Prix', '$datetime')");
}
if($Bonjour == 1)
{
	header("location: ../Front/Adminitem.php");
}
//header("location: ../Front/Acceuil.php");

?>