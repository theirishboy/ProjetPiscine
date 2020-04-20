<?php 
function listobjet($categorie)
{
	$result = connection("SELECT * FROM `objet art` WHERE `objet art`.`categorie` = '$categorie'");
	$a = 0;//nb de colonne
	$b=0;
	while($data = mysqli_fetch_assoc($result))
	{
		$cheminimg = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data[Nimage]'");
		$cheminf= mysqli_fetch_assoc($cheminimg);
		if($a % 3 == 0)
		{
			echo '<div class="row">';
		}
		echo '<div class="col-xs-6 col-md-4">';
		echo '<div class="thumbnail">';
		echo '<div>';
		echo '<img id="imgItem" src="'.$cheminf['Chemin1'].'" class="thumbnail" alt="Article">';
		echo '</div>';
		echo '<div class="caption">';
		echo '<p>'.$data['Nom'].'</p>';
		echo '<p>'.$data['Description'].'</p>';
		echo '<p>Catégorie : '.$data['Categorie'].'</p>';
		if($data['Type de vente'] == "Enchere")
		{
			$result24 = connection("SELECT * FROM `enchere` WHERE `enchere`.`IDobjet` = '$data[ID]'");
			$data24= mysqli_fetch_assoc($result24);

			echo '<h4><b>Prix : </b>'.$data24['Prixactuel'].'€</h4><br>';

		}
		else
		{
			echo '<h4><b>Prix : </b>'.$data['Prix'].'€</h4><br>';

		}
		echo '<a href="Item.php?ID='.$data['ID'].'" id="VoirItem">Voir Item</a>';
		echo ' <br><br></div>';
		echo ' </div>';
		echo ' </div>';
		$b = $a+1;
		if($a % 3 == 2)
		{
			echo '</div>';
		}

		if($b== mysqli_num_rows($result)){
			if($a % 3 == 0 || $a % 3 == 1){
				for($i = 0; $i<3-($a % 3); $i++){
					echo '</div class="thumbnail">';
				}
			}
		}

		$a+=1;
	}
}


function objetsvendus($ID)
{
	$result = connection("SELECT * FROM 'objetvendu' WHERE 'objetvendu'.'Humain' = '$ID'");
	//$data = mysqli_fetch_assoc($result);
	while($data = mysqli_fetch_assoc($result))
	{
		
		echo '<div class="container">';
		echo '<div class="row">';
		echo '<div class="col-xs-4">';
		echo '<p>'.$data['Humain'].'</p>';
		echo '<p>Objet : '.$data['Objet'].'</p>';
		echo '<p>Prix : '.$data['Prix'].'€</p>';
		echo ' </div>';
		echo ' </div>';
		echo ' </div>';
	}
}

function listobjetpartype($Typedevente)
{
	$result = connection("SELECT * FROM `objet art` WHERE `objet art`.`Type de vente` = '$Typedevente'");
	$a = 0;//nb de colonne
	$b=0;
	while($data = mysqli_fetch_assoc($result))
	{
		$cheminimg = connection("SELECT `Chemin1` FROM `images` WHERE `images`.`ID` = '$data[Nimage]'");
		$cheminf= mysqli_fetch_assoc($cheminimg);
		if($a % 3 == 0)
		{
			echo '<div class="row">';
		}
		echo '<div class="col-xs-6 col-md-4">';
		echo '<div class="thumbnail">';
		echo '<div>';
		echo '<img id="imgItem" src="'.$cheminf['Chemin1'].'" class="thumbnail" alt="Article">';
		echo '</div>';
		echo '<div class="caption">';
		echo '<p>'.$data['Nom'].'</p>';
		echo '<p>'.$data['Description'].'</p>';
		echo '<p>Catégorie : '.$data['Categorie'].'</p>';
		if($data['Type de vente'] == "Enchere")
		{
			$result24 = connection("SELECT * FROM `enchere` WHERE `enchere`.`IDobjet` = '$data[ID]'");
			$data24= mysqli_fetch_assoc($result24);

			echo '<h4><b>Prix : </b>'.$data24['Prixactuel'].'€</h4><br>';

		}
		else
		{
			echo '<h4><b>Prix : </b>'.$data['Prix'].'€</h4><br>';

		}		
		echo '<a href="Item.php?ID='.$data['ID'].'" id="VoirItem">Voir Item</a>';
		echo ' <br><br></div>';
		echo ' </div>';
		echo ' </div>';
		$b = $a+1;
		if($a % 3 == 2)
		{
			echo '</div>';
		}

		if($b== mysqli_num_rows($result)){
			if($a % 3 == 0 || $a % 3 == 1){
				for($i = 0; $i<3-($a % 3); $i++){
					echo '</div class="thumbnail">';
				}
			}
		}

		$a+=1;
	}
}

?>