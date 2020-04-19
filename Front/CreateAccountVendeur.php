<!DOCTYPE html>
<html>

<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Connexion.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php
    include("nav.php");
    $statut = isset($_GET["statut"])? $_GET["statut"] : "";
?>

<! -- http://www.codeurjava.com/2016/12/formulaire-de-login-avec-html-css-php-et-mysql.html -->

<div id="fenetre">
       
  <form action="../Back/inscription.php?statut=<?php if(isset($statut)){echo "$statut"; }?>" method="POST">
    <div id="Coordo">
      <h5 class="text-center">Vous êtes nouveau !</h5>
      <h2 class="text-center">Créer votre compte</h2><br>

      <input  name="Type" type="hidden" value="Vendeur">

      <label><b>Prénom</b></label>
      <input type="text" placeholder="Prénom" name="Prenom" required>

      <label><b>Nom</b></label>
      <input type="text" placeholder="Nom" name="Nom" required>

      <label><b>Adresse mail</b></label>
      <input type="text" placeholder="Adresse mail" name="Mail" required>

      <label><b>Identifiant</b></label>
      <input type="text" placeholder="Identifiant" name="Login" required>

      <h5><b>Votre mot de passe équivaut à votre adresse mail</b></h5><br>
      <?php 
      if($statut==1)
      {

      }
      else
      {
         echo' <div>';
        echo'<input type="checkbox" id="Conditions" required="required">';
        echo'<label for="subscribeNews">En créant un compte vous accepter les <u>Conditions générales</u> et <u>Politique de confidentialité</u> de Ebay ECE.</label>';
     echo '</div>';
      }
          

       echo '<input type="submit" id="submit" value="Créer le compte vendeur"><br><br>';
      ?>
      <?php
      if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
          echo "<p style='color:red'>Certains champs sont incorrects</p>";
      }
      ?>

    </div>

  </form>

  <br>
  <br>
</div>

<?php
    include("footer.php");
?>

</body>
</html>
