<!DOCTYPE html>
<html>

<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CreateAccount.css">
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
    <form action="../Back/inscription.php" method="POST">
      <div id="Coordo">
        <h5 class="text-center">Vous êtes nouveau !</h5>
        <h2 class="text-center">Créer votre compte</h2><br>

        <label><h4><b>Coordonnées du compte</b></h4></label> <br>          
        <label><b>Prénom</b></label>
        <input  name="Type" type="hidden" value="Client">
        <input type="text" placeholder="Prénom" name="Prenom" required>

        <label><b>Nom</b></label>
        <input type="text" placeholder="Nom" name="Nom" required>

        <label><b>Adresse mail</b></label>
        <input type="text" placeholder="Adresse mail" name="Mail" required>

        <label><b>Identifiant</b></label>
        <input type="text" placeholder="Indentifiant" name="Login" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Mot de passe" name="Mot_de_passe" required>

        <label><b>Confirmation du mot de passe</b></label>
        <input type="password" placeholder="Confirmation du mot de passe" name="mdp" required>

        <! -- Informmations propores au client -->

        <br><br>
        <label><h4><b>Coordonnées de livraison</b></h4></label> <br>
        <label><b>Adresse 1</b></label>
        <input type="text" placeholder="Adresse 1" name="AdresseL1" required>

        <label><b>Adresse 2</b></label>
        <input type="text" placeholder="Adresse 2" name="AdresseL2">

        <label><b>Ville</b></label>
        <input type="text" placeholder="Ville" name="Ville" required>

        <label><b>Code postal</b></label>
        <input type="text" placeholder="Code Postal" name="Code_Postal" required>

        <label><b>Pays</b></label>
        <input type="text" placeholder="Pays" name="Pays" required>

        <label><b>N° de téléphone</b></label>
        <input type="text" placeholder="N° de téléphone" name="N_Telephone" required>
        <br><br>

        <label><h4><b>Informations de paiement</b></h4></label><br>
        <label><b>Type de carte</b></label>
        <tr>
          <td><label><b>Type Carte  </b></label></td>
          <td><SELECT size="1" name="Type_Carte" required="required">
            <OPTION>Visa
              <OPTION>MasterCard
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
              <input type="Date" placeholder="Date d'expiration" name="DateExpiration" required>
              <br><br>
              <label><b>Code de sécurité</b></label>
              <input type="password" placeholder="Code de sécurité" name="Code" required>

              <div>
                <input type="checkbox" id="Conditions" required="required">
                <label for="subscribeNews">En créant un compte vous accepter les <u>Conditions générales</u> et <u>Politique de confidentialité</u> de Ebay ECE.</label>
              </div>
              <div>
                <input type="checkbox" id="Conditions" required="required">
                <label for="subscribeNews">En créant un compte vous accepter la clause disant au client que s'il/elle fait une offre sur un article, il/elle est sous contrat légal pour l'acheter si le vendeur accepte l'offre.</label>
              </div>

              <input type="submit" id='submit' value='Créer le compte client'><br><br>

              <?php
              if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                  echo "<p style='color:red'>Certains champs sont incorrects</p>";
              }
              ?>

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
