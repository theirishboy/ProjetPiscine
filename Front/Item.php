<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Item.css">
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

  $id=$_GET['ID'];
  $result = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$id'");
  $data = mysqli_fetch_assoc($result);
  $cheminimg = connection("SELECT * FROM `images` WHERE `images`.`ID` = '$data[Nimage]'");
  $cheminf= mysqli_fetch_assoc($cheminimg);
  echo '<div class="row ligne"  id="Top">';
  echo '<div class="row">';
  echo '<div class="col-sm-offset-1 col-sm-3">';
  echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">';
  echo '<!-- Indicators -->';
  echo '<ol class="carousel-indicators">';
  echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
  echo '</ol>';

  echo '<!-- Wrapper for slides -->';
  echo '<div class="carousel-inner">';
  echo '<div class="item active">';
  echo '<img src="'.$cheminf['Chemin1'].'" alt="Aticle">';
  echo '<div class="carousel-caption">';
  echo '</div>';
  echo '</div>';
  if($cheminf['Chemin2'] != "")
  {
   echo ' <div class="item">';
   echo ' <img src="'.$cheminf['Chemin2'].'" >';
   echo '<div class="carousel-caption">';
   echo ' </div>      ';
   echo '  </div>';
 }
 if($cheminf['Chemin3'] != "")
 {
   echo ' <div class="item">';
   echo ' <img src="'.$cheminf['Chemin3'].'" >';
   echo '<div class="carousel-caption">';
   echo ' </div>      ';
   echo '  </div>';
 }

 echo '</div>';

 echo '<!-- Left and right controls -->';
 echo '<a class="left carousel-control" href="#myCarousel" data-slide="prev">';
 echo '<span class="glyphicon glyphicon-chevron-left"></span>';
 echo '<span class="sr-only">Previous</span>';
 echo '</a>';
 echo '<a class="right carousel-control" href="#myCarousel" data-slide="next">';
 echo '<span class="glyphicon glyphicon-chevron-right"></span>';
 echo '<span class="sr-only">Next</span>';
 echo '</a>';
 echo '</div>';
 echo '<div id="Titre">';
 echo '<h3 style="text-align:center"><u>'.$data['Nom'].'</u></h3>';
 echo '<h4 style="text-align:center"><b>Lot n°'.$data['ID'].'</b></h4><br>';
 echo '</div>';
 echo '</div>';

 echo '<div class="col-sm-offset-2 col-sm-3" id="Description">';

 echo '<h4><b>Description : </b>'.$data['Description'].'</h4><br>';
 echo '<h4><b>Catégorie : </b>'.$data['Categorie'].'</h4>'; 
 echo '<h4><b>Type d achat : </b>'.$data['Type de vente'].'</h4>';
 if($data['Type de vente'] == "Enchere")
{
  $result24 = connection("SELECT * FROM `enchere` WHERE `enchere`.`IDobjet` = '$id'");
  $data24= mysqli_fetch_assoc($result);
   echo '<h4><b>Prix : </b>'.$data24['Prixactuel'].'€</h4><br>';

}
else
{
     echo '<h4><b>Prix : </b>'.$data['Prix'].'€</h4><br>';

}

 echo '<div class="row">';
 echo '<div class="col-sm-3"><h4><b>Paiement :</b></h4></div>';
 echo '<div class="row">';
 echo '<div class="col-offset-1 col-sm-1"><img src="Images/visa.png" height="35"></div>';
 echo '<div class="col-sm-offset-1 col-sm-1"><img src="Images/mastercard.png" height="35" width="60"></div>';
 echo '<div class="col-sm-offset-1 col-sm-1"><img src="Images/paypal.png" height="35" width="55"></div>';
 echo '<div class="col-sm-offset-1 col-sm-1"><img src="Images/americanexpress.png" height="35" width="55"></div>';
 echo '</div>';
 echo '</div><br>';
  $a = $data['ID'];
  
  {
    if($data['Type de vente'] != "Enchere")
    {
      $verificationpaspannier=connection("SELECT `Humain` FROM `panier`WHERE `panier`.`Objet`='$data[ID]'");
      $verificationpasoffre=connection("SELECT `IDclient` FROM `offre`WHERE `offre`.`IDobjet`='$data[ID]' AND `offre`.`IDclient` = '$_COOKIE[IDhumain]'");
      if(mysqli_num_rows($verificationpaspannier)==0 && mysqli_num_rows($verificationpasoffre)==0 )
      {
        echo '<a href="../back/Addobjetpanier.php?ID='.$data['ID'].'" target="_blank"> <input type="submit" id="Item" value="Ajouter au panier"></a><br>';

        echo '<input type="button" id="Offre" onclick="Combienargent('.$a.')" value="Faire une offre"><br><br>';
      }


    }
    else
    {
      $verificationpasenchère=connection("SELECT `IDclient` FROM `enchere`WHERE `enchere`.`IDobjet`='$data[ID]' AND `enchere`.`IDclient` = '$_COOKIE[IDhumain]'");
      if(mysqli_num_rows($verificationpasenchère)==0 )
      {
              echo '<input type="button" id="Offre" onclick="Envoietonbiff('.$a.')" value="Faire une enchère"><br><br>';

      }

    }
  }


 echo '</div>';
 echo '</div>';

 ?>

 <?php
 include("footer.php");
 ?>

</body>
</html>
