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
      <p><input type="text" name="prénom" /></p>
      </form>
      
      <h5 class="inline">Nom</h5>
      <form method="post">
      <p><input type="text" name="nom" /></p>
      </form>

      <br>

      <h5 class="inline">Pseudo</h5>
      <form method="post">
      <p><input type="text" name="pseudo" /></p>
      </form>

      <br>

      <h5 class="inline">Adresse e-mail</h5>
      <form method="post">
      <p><input type="text" name="mail" /></p>
      </form>

      <br>

      <h5 class="inline">Mot de passe</h5>
      <form method="post">
      <p><input type="text" name="mdp" /></p>
      </form>
      

</div>

      <div class="col-lg-offset-3 col-lg-4">
      <br>
      <h5 class="inline">Adresse 1</h5>
      <form method="post">
      <p><input type="text" name="adresse1" /></p>
      </form>
      
      <h5 class="inline">Adresse 2</h5>
      <form method="post">
      <p><input type="text" name="adresse2" /></p>
      </form>

      <br>

      <h5 class="inline">Ville</h5>
      <form method="post">
      <p><input type="text" name="ville"></p>
     </form>

      <br>

      <h5 class="inline">Code Postal</h5>
      <form method="post">
      <p><input type="text" name="codepostal"></p>
      </form>

      <br>

      <h5 class="inline">Pays</h5>
      <form method="post">
      <p><input type="text" name="pays"></p>
      </form>

      <br>

      <h5 class="inline">N° de téléphone</h5>
      <form method="post">
      <p><input type="text" name="téléphone"></p>
      </form>

      <input id="submit"
              type="button"
              value="Modifier les données bancaires">        

    </div>


      <div class="col-lg-offset-0 col-lg-3">
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
              onclick=window.location.href='profil.php'>

</div>
</div>
</div>

<FORM Method="post" Action="modif.php">

  Prénom : <INPUT type=text size=20 name=prénom><br>
  Nom : <INPUT type=text size=20 name=nom><br>
  Pseudo : <INPUT type=text size=20 name=pseudo><br>
  Adresse e-mail : <INPUT type=text size=30 name=mail><br>
  Mot de passe : <INPUT type=text size=30 name=mdp><br>
  Adresse 1 : <INPUT type=text size=20 name=adresse1><br>
  Adresse 2 : <INPUT type=text size=20 name=adresse2><br>
  Ville : <INPUT type=text size=20 name=ville><br>
  Code Postal : <INPUT type=text size=20 name=codepostal><br>
  Pays : <INPUT type=text size=20 name=pays><br>
  N° de téléphone : <INPUT type=text size=10 name=téléphone><br>
  <INPUT type=submit value=envoyer>
  <INPUT type=hidden name=afficher value=ok>

</FORM>


<br>

<?php
    include("footer.php");
?>

</body>
</html>