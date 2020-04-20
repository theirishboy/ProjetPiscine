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
  session_start();
include("../Back/ConnexionServeur.php");
$sql = connection("SELECT * FROM `vendeur` WHERE `Humain`='$_COOKIE[IDhumain]' ");
$data2=mysqli_fetch_assoc($sql);




  ?>


  <h1 style="text-align: center">Modifier votre profil</h1>
  <FORM Method="post" Action="../Back/modif.php">

    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <br>
          <h5 class="inline">Prénom</h5>
          <p><input type="text" name="prénom" /></p>

          <h5 class="inline">Nom</h5>
          <p><input type="text" name="Nom" /></p>

          <br>

          <h5 class="inline">Pseudo</h5>
          <p><input type="text" name="Pseudo" /></p>

          <br>

          <h5 class="inline">Adresse e-mail</h5>
          <p><input type="text" name="Mail" /></p>

          <br>

          <h5 class="inline">Mot de passe</h5>
          <p><input type="text" name="mdp" /></p>


        </div>

  


    <div class="col-lg-offset-0 col-lg-3">
      <div class="frame">

        <img src="<?php echo $data2['Imagesback']; ?>" class="display" alt="profil" height="70px" width="70px">
      </div>

      <label for="avatar">Modifier photo de profil</label>
      <p align="right"><input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"></p>

       <label for="avatar">Modifier photo de background</label>
       <p align="right"><input type="file"
         id="avatar2" name="avatar2"
         accept="image/png, image/jpeg"></p>

        <input id="submit"
         type="submit"
         value="Valider les modifications">
         
         <br>

         <input id="submit"
         type="button"
         value="Retour au profil"
         onclick=window.location.href='profil.php'>

       </div>
     </div>
   </div>




 </FORM>


 <br>

 <?php
 include("footer.php");
 ?>

</body>
</html>