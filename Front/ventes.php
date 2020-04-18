<!DOCTYPE html>
<html>
<head>
  <title>Mes ventes en cours</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="ventes.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    <?php
        include("nav.php");
    ?>

    <h1 style="text-align: center">Mes ventes en cours</h1>
    <h2>Enchères</h2>
    <div class="object-card">
        <img src="Images/tableau2.jpg" alt="tableau" width="160px">
        <div class="description-card">
            <h3>Le port de Collioure</h3>
            <h4>Henri MARTIN (1860 - 1943)</h4>
            <h5>Catégorie : Bon pour le musée</h5>
            <h5>Valeur : 70 000€</h5>
            <h5>Plus haut prix proposé : 132 000€</h5>
            <input id="submit"
              type="button"
              value="Vendre maintenant">
        </div>
    </div>

    <div class="object-card">
        <img src="Images/tableau2.jpg" alt="tableau" width="160px">
        <div class="description-card">
            <h3>Le port de Collioure</h3>
            <h4>Henri MARTIN (1860 - 1943)</h4>
            <h5>Catégorie : Bon pour le musée</h5>
            <h5>Valeur : 70 000€</h5>
            <h5>Plus haut prix proposé : 32 000€</h5>
            <input id="submit"
              type="button"
              value="Vendre maintenant">
        </div>
    </div>

    <br>

    <h2>Meilleures offres</h2>
    <div class="object-card">
        <img src="Images/piecefoot.jpg" alt="tableau" height ="200px" width="200px">
        <div class="description-card">
            <h3>Pièce 2€ commémorative UEFA EURO 2016</h3>
            <h5>Catégorie : Feraille ou trésor</h5>
            <h5>Valeur : 100€</h5>
            <h5>Prix proposé par le client : 75€</h5>
            <input id="submit"
              type="button"
              value="Accepter le prix proposé">

              <input id="submit"
              type="button"
              value="Decliner l'offre">
        </div>
    </div>

    <br>
    <br>

    <?php
        include("footer.php");
    ?>

</body>
</html>