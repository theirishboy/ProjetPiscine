<?php 


$date256=date('Y-m-d H:i:s');

$date256 = new DateTime($date256);

$date256->add(new DateInterval('PT2H'));

$sql256 = connection("SELECT * FROM `enchere`");

while($data256 = mysqli_fetch_assoc($sql256))
{

	$date2256 = new DateTime($data256['Finenchere']);

	if($date2256 < $date256 )
	{
			$MAJportemonnaire =connection("SELECT `IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`,MAX(Monoffre) FROM `enchere` WHERE  `IDclient` NOT LIKE '0' AND IDobjet = '$data256[IDobjet]'");
			$onmajjj= mysqli_fetch_assoc($MAJportemonnaire);


			$MAJportemonnairebis =mysqli_fetch_assoc(connection("SELECT * FROM `client` WHERE `Humain`='$onmajjj[IDclient]'"));


			$monnaiefinale=$MAJportemonnairebis['PorteMonnaie']-$onmajjj['Prixactuel'];
			connection("UPDATE `client` SET `PorteMonnaie` = '$monnaiefinale' WHERE `Humain` = '$onmajjj[IDclient]' ");






			connection("INSERT INTO objetvendu (Objet, IDclient, IDvendeur, Prix,Nimage) SELECT `IDobjet`, `IDclient`, `IDvendeur`, `Prixactuel`,'0' FROM `enchere` where `IDobjet` = '$data256[IDobjet]' AND `IDclient`= '$onmajjj[IDclient]'");

            $test=connection("UPDATE objetvendu set Nimage=(SELECT Nimage FROM `objet art` where ID ='$data256[IDobjet]' ) WHERE IDclient='$onmajjj[IDclient]' AND Objet='$data256[IDobjet]'"); 
			connection("DELETE FROM `enchere` WHERE `IDobjet` = '$data256[IDobjet]'");
			connection("DELETE FROM `objet art` WHERE `ID` = '$data256[IDobjet]'");

	}
}
 ?>