<?php
	session_start();
	session_destroy();
	
	setcookie('login', NULL, -1);
	setcookie('mdp', NULL, -1);
	setcookie('statut', NULL, -1);

	session_start();
	
	
	header("Location: Front/Acceuil.php"); 

?>
