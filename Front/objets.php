<!DOCTYPE html>
<html>
<head>
  <title>Objets Vendus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="objets.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php
    include("nav.php");
?>

<h1 style="text-align: center">Liste de vos objets vendus</h1>

<br>

<div class="container">
  <div class="row">
    <div class="col-xs-4">
    	<h2>Bon pour le musée</h2>
    	<br>
		<div style="width: 800px; height: 150px;  padding-top:10px; padding-bottom:10px;border: 3px solid #A0A0A0; text-align: center;">
		<img src="Images/tableau2.jpg" class="display" alt="tableau" height="100px" width="100px">
		<div class="caption">
		<p>Henri MARTIN (1860 - 1943) <br> Le port de Collioure <br> Huile sur panneau 65 x 55 cm <br> Signé en bas à gauche Henri Martin 
		<br><br>70 000€</p></div>
		</div>
		<br>
		<div style="width: 800px; height: 150px;  padding-top:10px; padding-bottom:10px;border: 3px solid #A0A0A0; text-align: center;">
		<img src="Images/tableau3.jpg" class="display" alt="tableau" height="100px" width="100px"> 
		<div class="caption">
		<p>Claude MONET (1840 - 1926) <br> Coucher de soleil sur la mer <br> Pastel 25 x 25 cm <br> Signé en bas à droite Claude Monet 
		<br><br>200 000€</p></div>
		</div>

	</div>
  </div>
</div>


<br><br>

<?php
    include("footer.php");
?>

</body>
</html>