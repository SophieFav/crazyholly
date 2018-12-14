


<?php
 if(isset($_POST["page"]))  
 {  
      $imagepage = $_POST["page"];  
 }  
 else  
 {  
      $imagepage = 1;  
 }  
$dir = "img/imgnb";//répertoire images
$typefile = array('.', '..');//liste des éléments à éviter
$file = scandir($dir);//scan du dossier, fonction php
$index = array_search('.', $file);//fonction 'array_search', qui retourne l'index ici '0' de l'élément recherché
$index1 = array_search('..', $file);//fonction 'array_search', qui retourne l'index ici '1' de l'élément recherché
unset($file[$index]);//Effacement de l'élément '.' dans la variable $file
unset($file[$index1]);//Effacement de l'élément '..' dans la variable $file
$total = sizeof($file);
//echo "Nombre d'images :".$total."<br>\n";
$elementsParPage = 24;
$pagination = ceil($total/$elementsParPage);
//echo "Nombre de pages (pagination) : ".$pagination."<br>\n";
//print_r($file);

$imagestart = ($imagepage-1) * $elementsParPage;
//echo $imagestart;
foreach(array_slice($file,$imagestart, $elementsParPage) as $fileToView){    //boucle foreach
	//$path_parts = pathinfo($fileToView);//fonction pathinfo pour stocker le nom du fichier
	//$path_extension .= $path_parts['extension']; //fonction permettant de récupérer uniquement l'extension


		$output= "<div class='col-xs-6 col-md-3 col-lg-2'>\n";
		$output.= "<a class='link' href='".$dir."/".$fileToView."' data-lightbox='image-set'>";
		$output.= "	<img class='rounded-circle' src='".$dir."/".$fileToView."'>\n";
		$output.= "</a>";
		$output.= "</div>\n";
		$output.= "</div>";
	    echo $output;
}

?>
<div class="container">
<ul class="pagination flex-wrap justify-content-center">
<?php

$imagepage++;
if($imagepage<=$pagination){
$showmore = '<span class="page-link" id="'.$imagepage.'">Show More</span> ';
echo $showmore;
}

?>
