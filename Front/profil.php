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
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="profil.html">Mon profil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion </a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
    include("nav.php");
?>

<div class="container-fluid text-center">
<div class="frame">
<img src="Images/profil.jpg" class ="display" alt="profil" height="200px" width="200px">
</div>
</div>

<h3 style="text-align: center">Prénom</h3>
<h3 style="text-align: center">Nom</h3>
<br>
<div class="container-fluid text-center">
	<input id="submit"
         type="button"
         value="Vendre un article"
         onclick=window.location.href='C:/Users/Rayan/Desktop/ProjetInfo/annonce.php'>
	   
	<input id="submit"
         type="button"
         value="Objets vendus"
         onclick=window.location.href='C:/Users/Rayan/Desktop/ProjetInfo/objets.php'>
       
	<input id="submit"
         type="button"
         value="Modifier mes informations"
         onclick=window.location.href='C:/Users/Rayan/Desktop/ProjetInfo/modif.php'>    
 </div>     

<br><br><br><br>

<?php
    include("footer.php");
?>

</body>
</html>