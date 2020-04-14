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

    <div>
    <a href="ferraille.php" type="submit" id="CreateAccount">Créer un compte</a>
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
