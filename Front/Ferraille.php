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

<div class="container text-center">  
  <br><h2>Articles du jour</h2><br>

  <div class="col-xs-6 col-md-4">
    <div class="thumbnail">
      <a href="CavalierBronze.jpg" title="">
          <img src="Images/CavalierBronze.jpg" class="thumbnail" alt="Cavalier" height="250" width="140">
      </a>
      <div class="caption">
         <p>Pièce Unique - Grande Cavalière Africaine en Bronze - Burkina Faso - Signe Daouda Derme</p>
         <p>Catégorie : Ferraille ou Trésor</p>
         <p>Prix : 210 €</p>
     </div>
    </div>
  </div>

  <div class="col-xs-6 col-md-4">
    <div class="thumbnail">
      <a href="VaseAsie.jpg" title="">
          <img src="Images/VaseAsie.jpg" class="thumbnail" alt="Vase1" height="230" width="135">
      </a>
      <div class="caption">
         <p>Petit vase en cuivre et émaux cloisonnés, Japon, époque Meiji, fin du XIXe siècle</p>
         <p>Catégorie : Bon pour le Musée</p>
         <p>Prix : 195 €</p>
     </div>
    </div>
  </div>

  <div class="col-xs-6 col-md-4">
    <div class="thumbnail">
      <a href="tableau1.jpg" title="">
          <img src="Images/tableau1.jpg" class="thumbnail" alt="Tableau1" height="550" width="300">
      </a>
      <div class="caption">
         <p>Très belle toile "Le coin du Parc Monceau", 45x55cm, signé Charles Angrand, époque du pointillisme.</p>
         <p>Catégorie : Bon pour le Musée</p>
         <p>Prix : 1 820 €</p>
     </div>
    </div>
  </div>

</div><br>


<?php
    include("footer.php");
?>

</body>
</html>
