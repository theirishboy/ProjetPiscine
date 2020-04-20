<?php
  session_start();
  include("Fonction.php");
?>


<!DOCTYPE html>
<html>

<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Acceuil.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php
    include("nav.php");
?>

<div class="container">    
  <h2>Promotions exceptionnelles</h2><br></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img id="imageCarrousel" src="Images/Musee3.1.jpg" alt="Vase1">
        <div class="carousel-caption">
          <h2>Economisez 100 € !</h2>
        </div>      
      </div>

      <div class="item">
        <img src="Images/tableau1.jpg" alt="Tableau1">
        <div class="carousel-caption">
          <h2>-5%</h2>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<!------------------ Articles du jour ---------------------->
<div class="container">  
  <br><h2>Ces articles pourraient vous intéresser</h2><br>
    <?php


        $rand1 = random_int(1, 20);
        $rand2=$rand1;
        while ($rand2 == $rand1){
          $rand2 = random_int(1, 20);
        }
        $rand3=$rand2;
        while ($rand3 == $rand2 || $rand3 == $rand1){
          $rand3 =random_int(1, 20);
        }
      
        $ArticleJour1 = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$rand1'");
        $data1 = mysqli_fetch_assoc($ArticleJour1);
        $cheminimg1 = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data1[Nimage]'");
        $chemin1= mysqli_fetch_assoc($cheminimg1);

          echo '<div class="col-xs-6 col-md-4">';
            echo '<div class="thumbnail">';
              echo '<img src="'.$chemin1['Chemin1'].'" alt="Article">';
              echo '<div class="caption">';
              echo '<h4><b>'.$data1['Nom'].'</b></h4>';
              echo '<p><b>Catégorie : </b>'.$data1['Categorie'].'</p>';
              echo '<p><b>Type de vente : </b>'.$data1['Type de vente'].'</p>';
              echo '<p><b>Prix : </b>'.$data1['Prix'].' €</p><br>';
              echo '<a href="Item.php?ID='.$data1['ID'].'" id="VoirItem">Voir Item</a><br><br>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
          
        $ArticleJour2 = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$rand2'");
        $data2 = mysqli_fetch_assoc($ArticleJour2);
        $cheminimg2 = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data2[Nimage]'");
        $chemin2= mysqli_fetch_assoc($cheminimg2);

          echo '<div class="col-xs-6 col-md-4">';
            echo '<div class="thumbnail">';
              echo '<img src="'.$chemin2['Chemin1'].'" alt="Article">';
              echo '<div class="caption">';
              echo '<h4><b>'.$data2['Nom'].'</b></h4>';
              echo '<p><b>Catégorie : </b>'.$data2['Categorie'].'</p>';
              echo '<p><b>Type de vente : </b>'.$data2['Type de vente'].'</p>';
              echo '<p><b>Prix : </b>'.$data2['Prix'].' €</p><br>';
              echo '<a href="Item.php?ID='.$data2['ID'].'" id="VoirItem">Voir Item</a><br><br>';
              echo '</div>';
            echo '</div>';
          echo '</div>';

        $ArticleJour3 = connection("SELECT * FROM `objet art` WHERE `objet art`.`ID` = '$rand3'");
        $data3 = mysqli_fetch_assoc($ArticleJour3);
        $cheminimg3 = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data3[Nimage]'");
        $chemin3= mysqli_fetch_assoc($cheminimg3);

          echo '<div class="col-xs-6 col-md-4">';
            echo '<div class="thumbnail">';
              echo '<img src="'.$chemin3['Chemin1'].'" alt="Article">';
              echo '<div class="caption">';
              echo '<h4><b>'.$data3['Nom'].'</b></h4>';
              echo '<p><b>Catégorie : </b>'.$data3['Categorie'].'</p>';
              echo '<p><b>Type de vente : </b>'.$data3['Type de vente'].'</p>';
              echo '<p><b>Prix : </b>'.$data3['Prix'].' €</p><br>';
              echo '<a href="Item.php?ID='.$data3['ID'].'" id="VoirItem">Voir Item</a><br><br>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        
?>
</div><br>

<?php
    include("footer.php");
?>

</body>
</html>
