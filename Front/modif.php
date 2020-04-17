<!DOCTYPE html>
<html>
<head>
  <title>Modifier votre profil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="modif.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php
    include("nav.php");
?>


<h1 style="text-align: center">Modifier votre profil</h1>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      <br>
      <h5 class="inline">Prénom</h5>
      <form method="post">
      <p><input type="text" name="adresse" /></p>
      </form>
      
      <h5 class="inline">Nom</h5>
      <form method="post">
      <p><input type="text" name="adresse" /></p>
      </form>

      <br>

      <h5 class="inline">Pseudo</h5>
      <form method="post">
      <p><input type="text" name="pseudo" /></p>
      </form>

      <br>

      <h5 class="inline">Adresse e-mail</h5>
      <form method="post">
      <p><input type="text" name="adresse" /></p>
      </form>

      <br>

      <h5 class="inline">Mot de passe</h5>
      <form method="post">
      <p><input type="text" name="mdp" /></p>
      </form>
      

</div>

      <div class="col-lg-offset-7 col-lg-3">
        <div class="frame">
        <img src="Images/profil.jpg" class="display" alt="profil" height="70px" width="70px">
        </div>
        <input id="submit"
               type="button"
               value="Modifier la photo de profil">

       <br><br>

       <input id="submit"
              type="button"
              value="Modifier l'image de fond">

       <br><br><br>

       <input id="submit"
              type="button"
              value="Enregistrer les modifications">

       <br>

       <input id="submit"
              type="button"
              value="Retour au profil"
              onclick=window.location.href='C:/Users/Rayan/Desktop/ProjetInfo/profil.php'>

</div>
</div>
</div>


<?php
    include("footer.php");
?>

</body>
</html>