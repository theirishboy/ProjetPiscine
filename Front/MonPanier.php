<?php
session_start();
include("../Back/ConnexionServeur.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="MonPanier.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Enchere.js"> </script>
  <script type="text/javascript" src="PaiementImpossible.js"> </script>

</head>

<body>
  <?php
  include("nav.php");
  ?>

  <?php
  $tot=0;
  $totAchat=0;
  $totNégo=0;
  $totEnch=0;

  $result = connection("SELECT * FROM `panier` WHERE `panier`.`Humain` = '$_COOKIE[IDhumain]'"); //récupère objets du panier de IDhumain connecté

  echo '<div class="container-fluid">';
        echo '<div class="row">';   //Ligne Titre            
        echo '<div class="col-sm-12">';
        echo '<h2 class="text-center">Mon panier</h2><br><br>';
        echo '</div>';
        echo '</div>';

        echo '<div class="col-sm-12">';
          echo '<div class="row">';                                //Ligne contenant tous les items
            echo '<div class="col-sm-7">';                         //Colonne de la liste des items

            while($data = mysqli_fetch_assoc($result))
            {      
              $objet = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$data[Objet]'");
              $data2 = mysqli_fetch_assoc($objet);
              $cheminimage = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data2[Nimage]'");
              $chemin= mysqli_fetch_assoc($cheminimage);


              echo '<div class="row" id="Item">'; //ligne de l'item
                echo '<div class="col-sm-12">'; // Colonne 12 des items
                  echo '<div class="col-sm-2">'; //colonne de l'image
                  echo '<img src="'.$chemin['Chemin1'].'"  id="ImageItem">';
                  echo '</div>';
                  echo '<div class="col-sm-10">'; //colone 10 de la description
                  echo '<h4><b>'.$data2['Nom'].'</b></h4>';
                  echo '<div class="row">';
                  echo '<div class="col-sm-4">';
                  echo '<h5 class="text-left"><b>'.$data2['Categorie'].'</b></a></h5>';
                  echo '</div>';
                  echo '<div class="col-sm-4">';
                  echo '<h5 class="text-right"><b>'.$data2['Type de vente'].'</b></h5>';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="col-sm-6">';
                  echo '<h6 class="text-left"><a href="../Back/Suppobjpanier.php?ID='.$data2['ID'].'" id="Supp">Supprimer</a></h6>';
                  echo '</div>';
                  echo '<div class="col-sm-6">';
                  echo '<h5 class="text-right"><b>'.$data2['Prix'].' €</b></h5>';
                  echo '</div>';
                  echo '</div>'; 
                  echo '</div>'; //ferme ma colonne 10
                echo '</div>'; //ferme ma colonne 12
              echo '</div><br>'; //ferme la ligne de l'item

              $totAchat += $data2['Prix'];
            }
            //Affichage enchères
            $result = connection("SELECT * FROM `enchere` WHERE `enchere`.`IDclient` = '$_COOKIE[IDhumain]'"); //récupère objets du panier de IDhumain connecté

            while($data = mysqli_fetch_assoc($result))
            {      
              $objet = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$data[IDobjet]'");
              $data2 = mysqli_fetch_assoc($objet);
              $cheminimage = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data2[Nimage]'");
              $chemin= mysqli_fetch_assoc($cheminimage);
              $sql = connection("SELECT *,MAX(Prixmax) FROM `enchere` WHERE `IDobjet`='$data[IDobjet]'");
              $dataMoneyyy = mysqli_fetch_assoc($sql); 

              $sql2 = connection("SELECT * FROM `enchere` WHERE `IDobjet`='$data[IDobjet]' AND `IDclient` = '$_COOKIE[IDhumain]'");
              $dataMoneyyy2 = mysqli_fetch_assoc($sql2); 


              echo '<div class="row" id="Item">'; //ligne de l'item
                echo '<div class="col-sm-12">'; // Colonne 12 des items
                  echo '<div class="col-sm-2">'; //colonne de l'image
                  echo '<img src="'.$chemin['Chemin1'].'"  id="ImageItem">';
                  echo '</div>';
                  echo '<div class="col-sm-10">'; //colone 10 de la description
                  echo '<h4><b>'.$data2['Nom'].'</b></h4>';
                  echo '<div class="row">';
                  echo '<div class="col-sm-4">';
                  echo '<h5 class="text-left"><b>'.$data2['Categorie'].'</b></a></h5>';
                  echo '</div>';
                  echo '<div class="col-sm-4">';
                  echo '<h5 class="text-right"><b>'.$data2['Type de vente'].'</b></h5>';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="col-sm-6">';
                  echo '<h6 class="text-left"><a onclick="Reenvoietonbiff('.$data['IDobjet'].')" id="Supp">Enchérir</a></h6>';
                  echo '</div>';
                  echo '<div class="col-sm-6">';
                  echo '<h5 class="text-right"><b>Mon offre :'.$dataMoneyyy2['Monoffre'].' €</b></h5>';
                  echo '<h5 class="text-right"><b>Le prix actuel : '.$dataMoneyyy['Prixactuel'].' €</b></h5>';
                  echo '</div>'; 
                  echo '</div>'; 
                  echo '</div>'; //ferme ma colonne 10
                echo '</div>'; //ferme ma colonne 12
              echo '</div><br>'; //ferme la ligne de l'item

              $totEnch += $dataMoneyyy['Prixactuel'];
            }

            //affichages négociations
            $result = connection("SELECT * FROM `offre` WHERE `offre`.`IDclient` = '$_COOKIE[IDhumain]'"); //récupère objets du panier de IDhumain connecté

            while($data = mysqli_fetch_assoc($result))
            {      
              $objet = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$data[IDobjet]'");
              $data2 = mysqli_fetch_assoc($objet);
              $cheminimage = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data2[Nimage]'");
              $chemin= mysqli_fetch_assoc($cheminimage);

              echo '<div class="row" id="Item">'; //ligne de l'item
                echo '<div class="col-sm-12">'; // Colonne 12 des items
                  echo '<div class="col-sm-2">'; //colonne de l'image
                  echo '<img src="'.$chemin['Chemin1'].'"  id="ImageItem">';
                  echo '</div>';
                  echo '<div class="col-sm-10">'; //colone 10 de la description
                  echo '<h4><b>'.$data2['Nom'].'</b></h4>';
                  echo '<div class="row">';
                  echo '<div class="col-sm-4">';
                  echo '<h5 class="text-left"><b>'.$data2['Categorie'].'</b></a></h5>';
                  echo '</div>';
                  echo '<div class="col-sm-4">';
                  echo '<h5 class="text-right"><b>'.$data2['Type de vente'].'</b></h5>';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="row">';
                  echo '<div class="col-sm-6">';
                  $Prixpro = connection("SELECT `Prixnouveau` FROM `offre` WHERE `IDobjet` = '$data[IDobjet]' AND `IDclient` = '$_COOKIE[IDhumain]'");
                  $Prixprop= mysqli_fetch_assoc($Prixpro);
                  if($data['NombreProposition'] == 5 && $data['statut'] == 'Vendeur')
                  {
                    echo '<h5 class="text-left">Votre proposition a été refusé vous ne pouvez plus négocier</h5>';
                    echo '</div>';
                    echo '<div class="col-sm-6">';
                    echo '<h6 class="text-left"><a href="../Back/Accepterdeclineroffreclient.php?statut=2&id='.$data['IDobjet'].'" id="Supp"> Archiver offre</a></h6>';                 
                   }
                  else
                  {


                    if($data['statut'] == 'Vendeur')
                    {
                     echo '<h6 class="text-left"><a onclick="Updatethemoney('.$data['IDobjet'].')" id="Supp">Proposer une nouvelle offre</a></h6>';
                     echo '<h6 class="text-left"><a href="../Back/Accepterdeclineroffreclient.php?statut=1&id='.$data['IDobjet'].'" id="Supp">Accepter offre</a></h6>';
                     echo '<h6 class="text-left"><a href="../Back/Accepterdeclineroffreclient.php?statut=2&id='.$data['IDobjet'].'" id="Supp">Abandonner offre</a></h6>';
                     echo '</div>';
                     echo '<div class="col-sm-6">';
                     echo '<h4 class="text-right"><b>On vous propose :'.$Prixprop['Prixnouveau'].' €</b></h4>';

                   }
                   else
                   {
                    echo '<h5 class="text-left">Votre proposition est en cours de traitement</h5>';
                    echo '</div>';
                    echo '<div class="col-sm-6">';
                    echo '<h4 class="text-right"><b>Vous proposez :'.$Prixprop['Prixnouveau'].' €</b></h4>';

                  }
                }
                
                echo '<h4 class="text-right"><b>Le prix est de :'.$data2['Prix'].' €</b></h4>';
                
                echo '</div>';
                echo '</div>'; 
                  echo '</div>'; //ferme ma colonne 10
                echo '</div>'; //ferme ma colonne 12
              echo '</div><br>'; //ferme la ligne de l'item

              $totNégo += $data2['Prix'];
            }

            echo '</div>';        // Fin de la liste des items             

            $portemonnaie = connection("SELECT `PorteMonnaie` FROM `client` WHERE `Humain` = '$_COOKIE[IDhumain]'");
            $dataPortemonnaie = mysqli_fetch_assoc($portemonnaie);

            $tot = $totAchat + $totNégo;

            echo '<div class="col-sm-5" id="fenetreCommande">';             // Colonne de la commande
            echo '<div class="row">';
            echo '<div class="col-sm-12">';
            echo '<h3 class="text-center">Total de la commande</h3><br>';
            echo '</div>';
            echo '</div>';


            echo '<div class="row">';
            echo '<div class="col-sm-9">';
            echo '<h5 class="text-left">Sous-total achats immédiats</h5>';  
            echo '</div>';
            echo '<div class="col-sm-3">';
            echo '<h5 class="text-right">'.$totAchat.' €</h5>';
            echo '</div>';
            echo '</div>';

            echo '<div class="row">';
            echo '<div class="col-sm-9">';
            echo '<h5 class="text-left">Sous-total négociations</h5>';  
            echo '</div>';
            echo '<div class="col-sm-3">';
            echo '<h5 class="text-right">'.$totNégo.' €</h5>';
            echo '</div>';
            echo '</div>';

            echo '<div class="row">';
            echo '<div class="col-sm-9">';
            echo '<h5 class="text-left">Sous-total enchères</h5>';  
            echo '</div>';
            echo '<div class="col-sm-3">';
            echo '<h5 class="text-right">'.$totEnch.' €</h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-sm-9">';
            echo '<h6 class="text-left">(Les enchères ne sont pas prises en compte car se règlent à la fin de l évènement.)</h6><br>';  
            echo '</div>';
            echo '</div>';

            echo '<div class="row">';
            echo '<div class="col-sm-9">';
            echo '<h5 class="text-left">Livraison </h5>';
            echo '</div>';
            echo '<div class="col-sm-3">';
            echo '<h5 class="text-right">0,00 €</h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-sm-12">';
            echo '<h5 class="text-center">_____________________________________________________________</h5>'; 
            echo '</div>';
            echo '<div class="col-sm-9">';
            echo '<h5 class="text-left">Total de la commande</h5>'; 
            echo '</div>';
            echo '<div class="col-sm-3">';
            echo '<h5 class="text-right">'.$tot.' €</h5><br><br>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col-sm-12" style="text-align: center;">';
            if($tot > $dataPortemonnaie['PorteMonnaie']){
              echo '<button id="Finaliser" onclick="PaiementImpossible()"><b>Passer au paiement</b></button>';
            }
            elseif($tot <= $dataPortemonnaie['PorteMonnaie']) {
              echo '<a href="Paiement.php?tot='.$tot.'"><button id="Finaliser"><b>Passer au paiement</b></button></a>';
            }
            echo '</div>';
            echo '</div>';  
            echo '</div>';  
            echo '</div>'; 
            echo '</div>';       
            echo '</div>';



            ?>

            <?php
            include("footer.php");
            ?>
          </body>
          </html>