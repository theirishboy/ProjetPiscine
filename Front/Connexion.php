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
?>

<! -- http://www.codeurjava.com/2016/12/formulaire-de-login-avec-html-css-php-et-mysql.html -->
<div id="fenetre">       
  <form action="../Back/Connexion.php" method="POST">
    <div >
      <h2 class="text-center">
      <img class="align-center" src="Images/IconeLogin.png" height="75">
      <br>CONNECTEZ-VOUS</h2><br>
                
      <label><b>Identifiant</b></label>
      <input type="text" placeholder="Entrer votre identifiant" name="login" required>

      <label><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="mdp" required><br><br>

      <input type="submit" id='submit' value='Se Connecter'><br><br>

      <?php
      if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
          echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
      }
      ?>

    </div>
    <br>
    <h5 class="text-center">_____________________________________________</h5>
    <h5 class="text-center">Vous êtes nouveau ?</h5><br>
    <div>
    <a href="CreateAccountVendeur.php" type="submit" id="CreateAccount">Créer un compte vendeur</a>
    <a href="CreateAccountClient.php" type="submit" id="CreateAccount">Créer un compte client</a>
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
