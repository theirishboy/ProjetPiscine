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
  <div class="row">       
    <div  id="catégories"class="col-lg-2">
      <p><br>Catégories</p>
    </div>
    <div class="col-lg-offset-9 col-lg-1">
      <form>
        <br>
        <div id="barre_recherche">
          <input id="texte_recherche" type="text" value="Rechercher" />
          <input id="bouton" type="image" src="Images/recherche.png" height="25" alt="Rechercher" />
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-10">
      <p><a href="Ferraille.php" name="categorie" value="ferraille">Ferraille ou Trésor</a> |
      <a href="annonces.html" name="categorie" value="musee">Bon pour le musée</a> | 
      <a href="financing.html" name="categorie" value="accessoire">Accessoire VIP</a> </p>
    </div>
  </div>
</div>

<div class="container text-center">    
  <h2>Promotions exceptionnelles</h2><br></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Images/VaseAsie.jpg" alt="Vase1">
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
  
<div class="container text-center">  
  <br><h2>Articles du jour</h2><br>

  <div class="col-xs-6 col-md-4">
    <div class="thumbnail">
      <a href="Images/CavalierBronze.jpg" title="Cavalier">
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
      <a href="Images/VaseAsie.jpg" title="Vase1">
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
      <a href="Images/tableau1.jpg" title="Tableau1">
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
