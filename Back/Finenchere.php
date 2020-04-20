<?php 

session_start();
include("ConnexionServeur.php");

$sql = connection("SELECT * FROM `enchere`");

$date=date('Y-m-d H:i:s');
//date_modify($date, '+2 hour');
echo " ".date('Y-m-d H:i:s')." ";

$date = new DateTime($date);
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";


while($data = mysqli_fetch_assoc($sql))
{
	//secho $data['Finenchere'];
}


 ?>