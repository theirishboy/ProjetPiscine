<!DOCTYPE html>
<html>
<head>
  <title>Objets Vendus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="objets.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php
  include("nav.php");
?>

    <!--<h1 style="text-align: center">Liste de vos objets vendus</h1>
    <br>
    <h2>Bon Pour le musée</h2>
    <div class="object-card">
        <img src="Images/tableau2.jpg" alt="tableau" width="160px">
        <div class="description-card">
            <h3>Le port de Collioure</h3>
            <h5>Henri MARTIN</h5>
            <h6>Valeur : 70 000€</h6>
            <h6>Type de vente : Enchère</h6>
        </div>
    </div>

    <br><br>-->


<?php
  
  if($_COOKIE['statut'] == "vendeur")
  {
      echo '<h1 style="text-align: center">Liste de vos objets vendus</h1><br>';

      $result = connection("SELECT * FROM `objetvendu` WHERE `objetvendu`.`IDvendeur` = '$_COOKIE[IDhumain]'");
   }
  else
  {
          echo '<h1 style="text-align: center">Liste de vos objets achetés</h1><br>';

      $result = connection("SELECT * FROM `objetvendu` WHERE `objetvendu`.`IDclient` = '$_COOKIE[IDhumain]'");

  }
  $a = 0;//nb de colonne
  $b=0;
  while($data = mysqli_fetch_assoc($result))
  {
    $cheminimg = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data[Nimage]'");
    $cheminf= mysqli_fetch_assoc($cheminimg);
    if($a % 3 == 0)
    {
      echo '<div class="row">';
    }
    echo '<div class="col-xs-6 col-md-4">';
    echo '<div class="thumbnail">';
    echo '<div>';
    echo '<img id="object-card" src="'.$cheminf['Chemin1'].' " 

  width="350"
 height="350"


class="thumbnail" alt="Article">';
    echo '</div>';
    echo '<div class="caption">';
    

    echo ' <p>Prix : '.$data['Prix'].'€</p><br>';
    echo ' <br><br></div>';
    echo ' </div>';
    echo ' </div>';
    $b = $a+1;
    if($a % 3 == 2)
    {
      echo '</div>';
    }

    if($b== mysqli_num_rows($result)){
      if($a % 3 == 0 || $a % 3 == 1){
      for($i = 0; $i<3-($a % 3); $i++){
        echo '</div class="thumbnail">';
      }
    }
  }

    $a+=1;
}
?>

<?php
  include("footer.php");
?>

</body>
</html>