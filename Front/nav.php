<style>
.navbar {
      margin-bottom: 0;
      border-radius: 0;
      background:rgb(49,49,49);
}

.dropdown-menu{
  background-color: grey;
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Ferraille.php">Ferraille ou Trésor</a></li>
          <li><a href="#">Bon pour le musée</a></li>
          <li><a href="#">Accessoires VIP</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Type d'achat
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Enchère</a></li>
          <li><a href="#">Négociation</a></li>
          <li><a href="#">Achat immédiat</a></li>
        </ul>
      </li>
    </ul>
      <?php  

      ?>
      <?php if(isset($_COOKIE['statut']))
      {
          if($_COOKIE['statut']=='client'){
            echo  $_COOKIE['statut'];
            echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="MonPanier.php"><img src="Images/panier.png" height="25"></a></li>';
            echo  ' <li><a href="../Deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>';
            echo '</ul>';
          }

          if($_COOKIE['statut']=='vendeur'){
            echo  $_COOKIE['statut'];
            echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li><a href="MonPanier.php"><img src="Images/mesVentes.png" height="30"></a></li>';
            echo  ' <li><a href="../Deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>';
            echo '</ul>';
          }

          if($_COOKIE['statut']=='admin'){
            echo  $_COOKIE['statut'];
            echo '<ul class="nav navbar-nav navbar-right">';
            echo  ' <li><a href="../Deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>';
            echo '</ul>';
          }
      }  
      else
      {
        
        echo '<ul class="nav navbar-nav navbar-right">';
        echo '<li><a href="../Connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion </a></li>';
        echo '</ul>';
      }
     
      ?>
    </div>
  </div>
</nav>