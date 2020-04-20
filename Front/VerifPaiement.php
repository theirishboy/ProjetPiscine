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
    $MAJportemonnaire =connection("SELECT `PorteMonnaie` FROM `client` WHERE  `Humain`='$_COOKIE[IDhumain]'");
    $onmajjj= mysqli_fetch_assoc($MAJportemonnaire);
    $monnaiefinale=$onmajjj['PorteMonnaie']-$prix;
    connection("UPDATE `client` SET `PorteMonnaie` = '$monnaiefinale' WHERE `Humain` = '$_COOKIE[IDhumain]' ");



    $bonjour = connection("SELECT * FROM `panier` WHERE `Humain` = '$_COOKIE[IDhumain]' ");


    while ($onsupp=mysqli_fetch_assoc($bonjour)) {
         $aurevoir =  mysqli_fetch_assoc(connection("SELECT IDclient FROM `objet art` WHERE `ID` = '$onsupp[Objet]' "));
            connection("DELETE FROM `objet art` WHERE `ID` = '$onsupp[Objet]' ");
            connection("INSERT INTO `objetvendu`(`Objet`, `IDclient`, `IDvendeur`, `Prix`) VALUES ('$onsupp[Objet]','$_COOKIE[IDhumain]','$aurevoir[IDclient]','$prix') ");


    }

    connection("DELETE FROM `panier` WHERE `Humain` = '$_COOKIE[IDhumain]'");







    //header("Location: Acceuil.php");


}
else{
	header("Location: Paiement.php?tot=$prix");
}
?>
