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
    <h2>Bon Pour le musée</h2>
    <div class="object-card">
        <img src="Images/tableau2.jpg" alt="tableau" width="160px">
        <div class="description-card">
            <h3>Le port de Collioure</h3>
            <h5>Henri MARTIN</h5>
            <h6>Valeur : 70 000€</h6>
            <h6>Type de vente : Enchère</h6>
        </div>
    </div>

    <br><br>

    <?php
        include("footer.php");
    ?>

</body>
</html>