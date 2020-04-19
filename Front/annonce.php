<!DOCTYPE html>
<html>
<head>
  <title>Déposer une annonce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="annonce.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

  <?php
  include("nav.php");
  ?>

  <h1 style="text-align: center">Déposer votre annonce</h1>

      <div class="container">
  <form method="post" action="../Back/Deposeannonce.php">

        <div class="row">

          <div class="col-lg-2">

            <h5>Nom de l'article</h5>

            <input type="text" name="article" >



            <br><br>

            <h5>Catégorie</h5>
            <SELECT name="catégorie" size="1">
              <OPTION>Ferraille ou Tresor
                <OPTION>Bon pour le musee
                  <OPTION>Accessoire VIP
                  </SELECT>

                  <br><br>

                  <h5>Descrpition</h5>
                  <textarea id="description" name="description" rows="6" cols="33">
                  </textarea>


                </div>


                <div class="col-lg-offset-7 col-lg-3">

                  <h5>Choix de vente</h5>
                  <td><input type="radio" name="vente" value="Achat immediat">
                    <label for="achat">Achat immédiat</label><br>
                    <input type="radio" name="vente" value="Negociation">
                    <label for="offre">Meilleure Offre</label><br>
                    <input type="radio" name="vente" value="Enchere">
                    <label for="enchère">Enchère</label></td>

          
                    <br>
                    <label for="avatar">Importer une photo</label>
                    <p align="right"><input type="file"
                     id="avatar" name="avatar"
                     accept="image/png, image/jpeg"></p>
                      <br>
      
                     <h5>Si enchère indiquer la date de fin</h5>
                     <p><input type="date" name="date"></p>


                     <h5>Si enchère indiquer l'heure de fin</h5>
                     <p><input type="Time" name="time"></p>




                     <br>
      
                     <h5>Prix</h5>
                     <p><input type="text" name="Prix"></p>

                   </div>
                 </div>

               </div>
   
                         

               <br><br><br>

               <div class="container-fluid text-center">
                  <input id = "submit" type="submit"  value="Déposer l'annonce">

              </div>    

              </form>    


          <br>

          <?php
          include("footer.php");
          ?> 

        </body>
        </html>