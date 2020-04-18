

<?php 

session_start();
include("ConnexionServeur.php");


$IDobjet = $_GET['var2'];

$offre=$_GET['var1'];

$sql = connection("SELECT *,MAX(Prixmax) FROM `enchere` WHERE `IDobjet`='$IDobjet' 
	");
$data = mysqli_fetch_assoc($sql); 


if($data['Prixactuel'] < $offre)
{
	$actualisation = connection("UPDATE `enchere` SET`Monoffre` = '$offre' WHERE `IDclient` = '$_COOKIE[IDhumain]' AND `IDobjet`='$IDobjet' ");
	if($offre > $data['Prixmax'])
	{
		$prixmax = ($data['Prixmax']+1);
		$actualisation = connection("UPDATE `enchere` SET `Prixmax`='$offre' WHERE `IDobjet`='$IDobjet'");
		$actualisation = connection("UPDATE `enchere` SET `Prixactuel`='$prixmax' WHERE `IDobjet`='$IDobjet' ");
	}
	if($offre < $data['Prixmax'] )
	{	
		$offre =$offre +1;
		$actualisation = connection("UPDATE `enchere` SET `Prixactuel`='$offre' WHERE `IDobjet`='$IDobjet'");
	}
}
header("Location: ../Front/MonPanier.php");




?>