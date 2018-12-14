<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>
<body>

	<?php
//Petit code permettant d'effacer un fichier grâce à la méthode GET

//Ne pas oublier d'ajouter la vérification de session, sinon un hacker en herbe pourrait (s'il tombe sur le fichier) effacer les fichiers.
		
			if(isset($_GET['filename']) && $_GET['filename']!=""){//On vérifie si les paramètres sont entrés dans l'url
				$fileToDel = "../../img/".$_GET['filename'];//On assigne le chemin complet dans la variable $fileToDel
				if(unlink($fileToDel)){//La fonction "unlink" permet d'effacer un fichier d'un répertoire (ici "../images/NomDeLimage")
					header("location: image_man.php");//Retour à la page d'accueil
					}else{
						echo "Une erreur est survenue pour l'effacement de ".$fileToDel;	
					}
			}
		
	?>

</body>
</html>