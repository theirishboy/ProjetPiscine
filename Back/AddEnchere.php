<?php 

session_start();
include("ConnexionServeur.php");


$IDobjet =$_GET['var2'];

$offre=$_GET['var1'];
echo "$IDobjet"."$offre";
$sql = connection("SELECT *,MAX(Prixmax) FROM `enchere` WHERE `IDobjet`='$IDobjet' 
");
$data = mysqli_fetch_assoc($sql); 

echo "vonjour"."$data[IDvendeur]";
$sql = connection("INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('$IDobjet', '$_COOKIE[IDhumain]','$data[IDvendeur]', '$data[Prixactuel]', '$data[Prixmax]', '$offre', '$data[Finenchere]')");

if($data['Prixactuel'] < $offre)
{
	if($offre > $data['Prixmax'])
	{
		$prixmax = $data['Prixmax'];
		echo "$prixmax";
		$actualisation = connection("UPDATE `enchere` SET `Prixmax`='$offre' WHERE `IDobjet`='$IDobjet' ");
		$actualisation = connection("UPDATE `enchere` SET `Prixactuel`='$prixmax' WHERE `IDobjet`='$IDobjet' ");
	}
	if($offre < $data['Prixmax'] )
	{	
		$offre=$offre +1;
		$actualisation = connection("UPDATE `enchere` SET `Prixactuel`='$offre'WHERE `IDobjet`='$IDobjet' ");
	}
}
//Header("Location: ../Front/MonPanier.php");


?>