<!DOCTYPE html>
<html>
<head>
  <title>Mes ventes en cours</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="ventes.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Enchere.js"> </script>


</head>
<body>

    <?php
        include("nav.php");
    ?>
    <?php 


session_start();
$sql = connection("SELECT * FROM `enchere` WHERE IDvendeur ='$_COOKIE[IDhumain]'");
 echo' <h1 style="text-align: center">Mes ventes en cours</h1>';
 echo' <h2 style="text-align: center">Enchères</h2>';

  echo' <br>';
 echo' <div class="card-list">';
while($data = mysqli_fetch_assoc($sql))
{
  $result = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$data[IDobjet]'");
  $dataobj = mysqli_fetch_assoc($result);
  $cheminimg = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$dataobj[Nimage]'");
  $cheminf= mysqli_fetch_assoc($cheminimg);


   echo' <div class="object-card">';
     echo'<img src="'.$cheminf['Chemin1'].'"" alt="tableau" height="90%" width="40%">';
      echo'<div class="description-card">';
      echo'  <h3>'.$dataobj['Nom'].'</h3>';
       echo' <h4>'.$dataobj['Description'].'</h4>';
       echo' <h5>Catégorie : '.$dataobj['Categorie'].'</h5>';
       echo' <h5>Prix Initial :'.$dataobj['Prix'].'€</h5>';
       echo' <h5>Plus haut prix proposé :'.$data['Prixactuel'].'</h5>';
       echo'<h5>Fin de l enchère :'.$data['Finenchere'].'</h5>';
     echo'</div>';
    echo'</div>';
}

   


    


echo '</div>';
$sql = connection("SELECT * FROM `offre` WHERE IDvendeur ='$_COOKIE[IDhumain]' AND NOT IDclient = 0 ");
 echo' <h2 style="text-align: center">Négociation</h2>';

  echo' <br>';
 echo' <div class="card-list">';
while($data = mysqli_fetch_assoc($sql))
{
  $result = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$data[IDobjet]'");
  $dataobj = mysqli_fetch_assoc($result);
  $cheminimg = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$dataobj[Nimage]'");
  $cheminf= mysqli_fetch_assoc($cheminimg);


   echo' <div class="object-card">';
     echo'<img src="'.$cheminf['Chemin1'].'"" alt="tableau" height="90%" width="40%">';
      echo'<div class="description-card">';
      echo'  <h3>'.$dataobj['Nom'].'</h3>';
       echo' <h4>'.$dataobj['Description'].'</h4>';
       echo' <h5>Catégorie : '.$dataobj['Categorie'].'</h5>';
       echo' <h5>Prix Proposé :'.$data['Prixnouveau'].'€</h5>';
       echo' <h5>Statut :'.$data['statut'].'</h5>';
        if($data['statut']=="Acheteur")
        {
          echo '<input type="button" id="submit" onclick="accepternontheoffre('.$dataobj['ID'].',1,'.$data[IDclient].')" value="Accepter offre">';
          echo '<input type="button" id="submit" onclick="Updatetheoffre('.$dataobj['ID'].')" value="Faire une offre">';
          echo '<input type="button" id="submit" onclick="accepternontheoffre('.$dataobj['ID'].',2)" value="Décliner offre">';
        }
        
     echo'</div>';
    echo'</div>';
}

   
 ?>

        
      </div>
    </div>

    
  </div>

    <br>
    <br>

    <?php
        include("footer.php");
    ?>

</body>
</html>