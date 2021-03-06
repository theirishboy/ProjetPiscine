<?php
  session_start();
  include("Fonction.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Admin.css">
  <link href="Images/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php
    include("nav.php");
?>
<?php
  $item = connection("SELECT * FROM `objet art`");

  echo '<div class="text-center">'; 
    echo '<div class="row">'; 
      echo '<h2 style="font-family:Comic Sans MS"><b>Liste des items disponibles sur le site</b></h2><br><br>';
    echo '</div>';
    echo '<div class="row">'; 
      echo '<a href="annonce.php?Bonjour=1" id="Add">Ajouter un item</a><br><br><br>';
    echo '</div>';
    echo '<div class="row">';
      echo '<div class="col-sm-12">';            
        echo '<table class="table table-striped">';
          echo '<thead>';
            echo '<tr class="bg-danger">';
              echo '<th scope="col-sm-2" class="titre">Image</th>';
              echo '<th scope="col-sm-1" class="titre">Nom</th>';
              echo '<th scope="col-sm-4" class="titre">Description</th>';
              echo '<th scope="col-sm-2" class="titre">Catégorie</th>';
              echo '<th scope="col-sm-1" class="titre">Type d achat</th>';
              echo '<th scope="col-sm-1" class="titre">Prix</th>';
              echo '<th scope="col-sm-1" class="titre">Supprimer ?</th>';
            echo '</tr>';
          echo '</thead>';
          echo '<tbody>';


  while($data = mysqli_fetch_assoc($item))
  {
      $cheminimage = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data[Nimage]'");
      $chemin= mysqli_fetch_assoc($cheminimage);

          echo '<tr>';
            echo '<td><img id="imgItem" src="'.$chemin['Chemin1'].'" class="thumbnail" alt="Item"></td>';
            echo '<td>'.$data['Nom'].'</td>';
            echo '<td>'.$data['Description'].'</td>';
            echo '<td>'.$data['Categorie'].'</td>';
            echo '<td>'.$data['Type de vente'].'</td>';
            echo '<td>'.$data['Prix'].' €</td>';
            echo '<td><a href="../Back/Backadmin.php?ID='.$data['ID'].'" id="Supp">Supprimer</a></td>';
          echo '</tr>';
  }

        echo '</tbody>';
        echo '<thead>';
            echo '<tr class="bg-danger">';
              echo '<th scope="col-sm-2" class="titre"> </th>';
              echo '<th scope="col-sm-1" class="titre"> </th>';
              echo '<th scope="col-sm-4" class="titre"> </th>';
              echo '<th scope="col-sm-2" class="titre"> </th>';
              echo '<th scope="col-sm-1" class="titre"> </th>';
              echo '<th scope="col-sm-1" class="titre"> </th>';
              echo '<th scope="col-sm-1" class="titre"> </th>';
            echo '</tr>';
          echo '</thead>';
      echo '</table>';    
    echo '</div>';
  echo '</div>';
echo '</div>';

?>

<?php
    include("footer.php");
?>
</body>
</html>
