<?php
  session_start();
  include("../Back/ConnexionServeur.php");
  include("Fonction.php");
?>


<!DOCTYPE html>
<html>

<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Ferraille.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php
    include("nav.php");
?>
<div class="container text-center">  
<h2>Catégorie : Bon pour le musée</h2><br>
<?php 
listobjet("Ferraille ou Tresor");

 ?>
</div>
<?php
    include("footer.php");
?>

</body>
</html>
