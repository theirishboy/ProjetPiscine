<!DOCTYPE html>
<html>
<head>
  <title>Déposer une annonce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="annonce.css">
  <link href="img/Logo_EbayECE.ico" rel="icon" type="images/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
 
<h1 style="text-align: center">Déposer votre annonce</h1>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      <h5>Nom de l'article</h5>
      <form method="post">
      <p><input type="text" name="article" /></p>
      </form>

<br><br>

      <h5>Catégorie</h5>
    <FORM>
      <SELECT name="catégorie" size="1">
      <OPTION>Ferraille ou Trésor
      <OPTION>Bon pour le musée
      <OPTION>Accessoire VIP
      </SELECT>
    </FORM>

<br><br>

    <h5>Descrpition</h5>
    <textarea id="description" name="description" rows="6" cols="33">
    </textarea>

    </div>
    
    <div class="col-lg-offset-7 col-lg-3">
      
      <h5>Choix de vente</h5>
      <td><input type="radio" name="vente" value="achat">
      <label for="achat">Achat immédiat</label><br>
      <input type="radio" name="vente" value="offre">
      <label for="offre">Meilleure Offre</label><br>
      <input type="radio" name="vente" value="enchère">
      <label for="enchère">Enchère</label></td>


<br><br><br><br>

      <label for="avatar">Importer une photo</label>
      <p align="right"><input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"></p>

<br><br>

       <h5>Prix</h5>
      <form method="post">
      <p><input type="text" name="article"/></p>
      </form>

    </div>
  </div>
</div>

<br><br><br>

<div class="container-fluid text-center">
<input id="submit"
       type="button"
       value="Déposer l'annonce">
</div>
<br>

 <footer class="page-footer">   
        <div class="container">    
            <div class="row">       
                <div class="col-lg-5 col-md-8 col-sm-12">       
                    <h5 class="text-uppercase font-weight-bold text-center">Information additionnelle</h5>       
                    <h5 class="text-center"><br>Avec Ebay ECE achetez aux enchères, négociez vos prix, payez immédiatement sans frais. </h5>
                    <h5 class="text-center">N°1 du site d'e-commerce en France. Plus de 200 commissaires-priseurs garantissent les objets en ventes.</h5>
                    <h5 class="text-center">Des offres s'ajoutent quotidiennement avec les meilleures promotions. Soyez l'heureux propriétaire d'une oeuvre d'art en un clic !</h5>   
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">       
                    <h5 class="text-uppercase font-weight-bold text-center">Contact</h5>       
                    <h5 class="text-center"><br> 37, quai de Grenelle, 75015 Paris, France <br>             
                        info@webDynamique.ece.fr <br>             
                        +33 01 02 03 04 05 <br>             
                        +33 01 03 02 05 04       
                    </h5>     
                </div>  
                <div class="col-lg-3 col-md-5 col-sm-12">       
                    <h5 class="text-uppercase font-weight-bold">Suivez-nous !</h5>       
                    <a aria-label="Twitter" title="Twitter" href="https://twitter.com">
                      <img src="img/twitter.png" alt="Twitter" height="55">
                    </a>
                    <a aria-label="Facebook" title="Facebook" href="https://facebook.com">
                      <img src="img/facebook.png" alt="Facebook" height="72">
                    </a>
                    <a aria-label="Instagram" title="Instagram" href="https://instagram.com">
                      <img src="img/instagram.png" alt="Instagram" height="60">
                    </a>
                    <a aria-label="Youtube" title="Youtube" href="https://youtube.com">
                      <img src="img/youtube.png" alt="Youtube" height="70">
                    </a>
                    <p></p>    
                </div>  
            </div>   
            <div class="footer-copyright text-center"><h4><br>&copy; 2020 Copyright | Droit d'auteur: webDynamique.ece.fr</h4></div> 
        </footer>

</body>
</html>