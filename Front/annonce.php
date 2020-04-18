<!DOCTYPE html>
<html>
<head>
  <title>Déposer une annonce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="annonce.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php
    include("nav.php");
?>
 
<h1 style="text-align: center">Déposer votre annonce</h1>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      <h5>Nom de l'article</h5>
      <form method="post">
      <p><input type="text" name="article" /></p>
      </form>

<br><br>

      <h5>Catégorie</h5>
    <FORM>
      <SELECT name="catégorie" size="1">
      <OPTION>Ferraille ou Trésor
      <OPTION>Bon pour le musée
      <OPTION>Accessoire VIP
      </SELECT>
    </FORM>

<br><br>

    <h5>Descrpition</h5>
    <textarea id="description" name="description" rows="6" cols="33">
    </textarea>

    </div>


    <br><div class="col-lg-offset-3 col-lg-2">
      <img src="" alt="image" width="160px">
     <br> <img src="" alt="image" width="160px">
    </div>

    
    <div class="col-lg-offset-2 col-lg-3">
      
      <h5>Choix de vente</h5>
      <td><input type="radio" name="vente" value="achat">
      <label for="achat">Achat immédiat</label><br>
      <input type="radio" name="vente" value="offre">
      <label for="offre">Meilleure Offre</label><br>
      <input type="radio" name="vente" value="enchère">
      <label for="enchère">Enchère</label></td>


<br><br><br><br>

      <label for="avatar">Importer une image</label>
      <p align="right"><input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"></p>

<br><br>

       <h5>Prix</h5>
      <form method="post">
      <p><input type="text" name="article"/></p>
      </form>

    </div>
  </div>
</div>

<br><br><br>

<div class="container-fluid text-center">
<input id="submit"
       type="button"
       value="Déposer l'annonce">
</div>
<br>

<?php
    include("footer.php");
?> 

</body>
</html>