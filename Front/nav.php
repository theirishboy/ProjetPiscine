<style>
.navbar {
      margin-bottom: 0;
      border-radius: 0;
      background:rgb(49,49,49);
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
        <li class="active"><a href="Acceuil.php">
          <img src="Images/home.png" height="22"></a></li>
      </ul>
      <?php  

      ?>
      <?php if(isset($_COOKIE['statut']))
      {
       echo  $_COOKIE['statut'];
      } 
      else
      {
        
         echo '<ul class="nav navbar-nav navbar-right">';
      echo  ' <li><a href="../Back/Connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion </a></li>';
      echo '</ul>';
      }
     
      ?>
    </div>
  </div>
</nav>