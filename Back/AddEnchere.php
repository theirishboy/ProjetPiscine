<?php 

session_start();
include("ConnexionServeur.php");


$IDobjet = 1;

$offre=369;

$sql = connection("SELECT * FROM `enchere` where Prixmax IN (SELECT max(Prixmax) from `enchere` )
");
$data = mysqli_fetch_assoc($sql); 
$sql = connection("INSERT INTO `enchere` (`IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`, `Prixmax`, `Monoffre`, `Finenchere`) VALUES ('$IDobjet', '$_COOKIE[IDhumain]','$data[IDvendeur]', '$data[Prixactuel]', '$data[Prixmax]', '$offre', '$data[Finenchere]')");

if($data['Prixactuel'] < $offre)
{
	if($offre > $data['Prixmax'])
	{
		$prixmax = $data['Prixmax']+1;
		$actualisation = connection("UPDATE `enchere` SET `Prixmax`='$offre' ");
		$actualisation = connection("UPDATE `enchere` SET `Prixactuel`='$prixmax' ");
	}
	if($offre < $data['Prixmax'] )
	{	
		$offre =$offre +1;
		$actualisation = connection("UPDATE `enchere` SET `Prixactuel`='$offre' ");
	}
}


?>