<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Paiement.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="CommandeImpossible.js"></script>
  <script type="text/javascript" src="validationCommande.js"></script>

</head>

<body>

  <?php
  include("nav.php");
  $prix=$_GET['tot'];
  ?>

  <div id="fenetre"> 
        <div id="Coordo">     
          <label><h4 class="align-center"><b>Informations de paiement</b></h4></label><br>
          <?php echo '<form method="post" action="VerifPaiement.php?prix='.$prix.'">';?>         
          <tr>
            <td><label><b>Type Carte  </b></label></td>
            <td><SELECT size="1" name="Type_Carte" required="required">
              <OPTION>Visa
                <OPTION>Mastercard
                  <OPTION>American Express
                    <OPTION>PayPal
                    </SELECT> 
                  </td>
                </tr><br><br>

                <label><b>N° de carte</b></label>
                <input type="text" placeholder="N° de carte" name="N_Carte" required>

                <label><b>Nom propriétaire de la carte</b></label>
                <input type="text" placeholder="Nom propriétaire de la carte" name="NomCarte" required>

                <label><b>Date d'expiration</b></label>
                <br>
                <input type="date" placeholder="AAA-MM-JJ" name="Date" required>
                <br><br>
                <label><b>Code de sécurité</b></label>
                <input type="password" placeholder="Code de sécurité" name="Code" required><br><br>

                <input type="submit" id="Finaliser" value="Valider la commande" >
                </form>

        </div>
        <br><br>
      </div>

      <?php
      include("footer.php");
      ?>

    </body>
    </html>
