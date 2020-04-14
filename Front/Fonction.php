<?php 
function listobjet($categorie)
{
	$result = connection("SELECT * FROM `objet d'art` WHERE `objet d'art`.`categorie` = '$categorie'");
	$a = 0;
	while($data = mysqli_fetch_assoc($result))
	{
		if($a % 3 == 0)
		{
			echo '<div class="row">';
		}
		echo '<div class="col-xs-6 col-md-4">';
		echo '<div class="thumbnail">';
		
		echo '<img src="'.$data['Cheminimg'].'" class="thumbnail" alt="Pieces1">';

		echo '<div class="caption">';
		echo '<p>'.$data['Nom'].'</p>';
		echo '<p>'.$data['Description'].'</p>';
		echo '<p>Catégorie : '.$data['Categorie'].'</p>';
		echo ' <p>Prix : '.$data['Prix'].'€</p>';
		echo ' </div>';
		echo ' </div>';
		echo ' </div>';
		if($a % 3 == 2)
		{
			echo '</div>';
		}
		$a+=1;
	}
}

?>