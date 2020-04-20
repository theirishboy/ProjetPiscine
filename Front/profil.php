<!DOCTYPE html>
<html>
<head>
  <title>Mon profil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="profil.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<?php 
  include "nav.php";
  session_start();
$sql = connection("SELECT * FROM `vendeur` WHERE `Humain`='$_COOKIE[IDhumain]' ");
$data2=mysqli_fetch_assoc($sql);
$photo= $data2['Imagesback'];

 ?>
<body style=" background-image: url(<?php echo $photo;?>  ">


<br><br>
<div class="container-fluid text-center">
<div class="frame">
<img src=" <?php echo $data2['Imagesback'] ?>" class ="display" alt="profil" height="200px" width="200px">
</div>
</div>

<h3 style="text-align: center">Prénom</h3>
<h3 style="text-align: center">Nom</h3>
<br>
<div class="container-fluid text-center">
	<input id="submit"
         type="button"
         value="Vendre un article"
         onclick=window.location.href='annonce.php'>
	   
	<input id="submit"
         type="button"
         value="Objets vendus"
         onclick=window.location.href='objets.php'>
       
	<input id="submit"
         type="button"
         value="Modifier mes informations"
         onclick=window.location.href='modif.php'>    
 </div>     

<br><br><br><br>
<?php
    include("footer.php");
?>

</body>
</html>