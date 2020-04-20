<style>
.navbar {
      margin-bottom: 0;
      border-radius: 0;
      background:rgb(49,49,49);
}

.dropdown-menu{
  background-color: grey;
}
#title{
  color:grey;
}

}
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Ebay ECE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav">
      <li><a href="Acceuil.php"><img src="Images/home.png" height="25"></a></li>
      <li class="dropdown">
    <?php 
    include("../Back/ConnexionServeur.php");

      include("../Back/Finenchere.php");
    if(isset($_COOKIE['statut']))
      {
          if($_COOKIE['statut']=='client')
          {
                echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories';
                echo '<span class="caret"></span></a>';
               echo '<ul class="dropdown-menu">';
                 echo '<li><a href="Ferraille.php?ID=Ferraille ou Tresor">Ferraille ou Trésor</a></li>';
                  echo '<li><a href="Ferraille.php?ID=Bon pour le musee">Bon pour le musée</a></li>';
                  echo '<li><a href="Ferraille.php?ID=Accessoire VIP">Accessoire VIP</a></li>';
          echo '</ul>';
          echo '</li>';
                echo '<li class="dropdown">';
                echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Type d achat';
                echo '<span class="caret"></span></a>';
                echo '<ul class="dropdown-menu">';
                echo '<li><a href="Typeaffichage.php?ID=Enchere">Enchère</a></li>';
                echo '<li><a href="Typeaffichage.php?ID=Negociation">Négociation</a></li>';
                echo '<li><a href="Typeaffichage.php?ID=Achat immediat">Achat immédiat</a></li>';
          echo '</ul>';
          echo '</li>';
          echo '</ul>';
          }
    
          if($_COOKIE['statut']=='vendeur')
          {
                echo '<span class="caret"></span></a>';
                echo '<ul class="dropdown-menu">';
                
          echo '</ul>';
          echo '</li>';
                echo '<li class="dropdown">';
                echo '<span class="caret"></span></a>';
                echo '<ul class="dropdown-menu">';
       
          echo '</ul>';
          echo '</li>';
          echo '</ul>';
          }

          if($_COOKIE['statut']=='admin')
          {
                 echo  $_COOKIE['statut'];
                 echo '</ul>';
                
          }
      }  
        else
        {
          
                  echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories';
                  echo '<span class="caret"></span></a>';
                  echo '<ul class="dropdown-menu">';
                    echo '<li><a href="Ferraille.php">Ferraille ou Trésor</a></li>';
                    echo '<li><a href="#">Bon pour le musée</a></li>';
                    echo '<li><a href="#">Accessoires VIP</a></li>';
            echo '</ul>';
            echo '</li>';
                  echo '<li class="dropdown">';
                  echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Type d achat';
                  echo '<span class="caret"></span></a>';
                  echo '<ul class="dropdown-menu">';
                  echo '<li><a href="#">Enchère</a></li>';
                  echo '<li><a href="#">Négociation</a></li>';
                  echo '<li><a href="#">Achat immédiat</a></li>';
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
        }
     
      ?>

      <?php if(isset($_COOKIE['statut']))
      {
          if($_COOKIE['statut']=='client'){

            $portemonnaie = connection("SELECT `PorteMonnaie` FROM `client` WHERE `Humain` = '$_COOKIE[IDhumain]'");
            $dataPortemonnaie = mysqli_fetch_assoc($portemonnaie);

            echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="#" id="title"><img src="Images/PorteMonnaie.png" height="30">'.$dataPortemonnaie['PorteMonnaie'].' €</a></li>';
            echo '<li><a href="MonPanier.php"><img src="Images/panier.png" height="25"></a></li>';
            echo  ' <li><a href="../Deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>';
            echo '</ul>';
          }

          if($_COOKIE['statut']=='vendeur'){
            echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="annonce.php" id="title"><img src="Images/ListeItem.png" height="30">  Ajouter un item</a></li>';
            echo '<li><a href="ventes.php" id="title"><img src="Images/mesVentes.png" height="30">  Mes ventes en cours</a></li>';
            echo '<li><a href="objets.php" id="title"><img src="Images/Liste.png" height="28">  Mes items vendus</a></li>';
            echo '<li><a href="profil.php" id="title"><img src="Images/profil.png" height="32"></a></li>';
            echo  ' <li><a href="../Deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>';
            echo '</ul>';
          }

          if($_COOKIE['statut']=='admin'){
            echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="AdminVendeur.php" id="title"><img src="Images/Liste.png" height="28">  Liste Vendeurs</a></li>';
            echo '<li><a href="AdminItem.php" id="title"><img src="Images/ListeItem.png" height="30">  Liste Items</a></li>';
            echo  ' <li><a href="../Deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>';
            echo '</ul>';
          }
      }  
      else
      {
        
        echo '<ul class="nav navbar-nav navbar-right">';
        echo '<li><a href="../Front/Connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion </a></li>';
        echo '</ul>';
      }
     
      ?>
    </div>
  </div>
</nav>