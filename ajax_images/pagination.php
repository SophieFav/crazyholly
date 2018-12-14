<?php
 if(isset($_POST["page"]))  
 {  
      $imagepage = $_POST["page"];  
 }  
 else  
 {  
      $imagepage = 1;  
 }  
$dir = "imagesPagination";//répertoire images
$typefile = array('.', '..');//liste des éléments à éviter
$file = scandir($dir);//scan du dossier, fonction php
$index = array_search('.', $file);//fonction 'array_search', qui retourne l'index ici '0' de l'élément recherché
$index1 = array_search('..', $file);//fonction 'array_search', qui retourne l'index ici '1' de l'élément recherché
unset($file[$index]);//Effacement de l'élément '.' dans la variable $file
unset($file[$index1]);//Effacement de l'élément '..' dans la variable $file
$total = sizeof($file);
//echo "Nombre d'images :".$total."<br>\n";
$elementsParPage = 6;
$pagination = ceil($total/$elementsParPage);
//echo "Nombre de pages (pagination) : ".$pagination."<br>\n";
//print_r($file);

$imagestart = ($imagepage-1) * $elementsParPage;
//echo $imagestart;
foreach(array_slice($file,$imagestart, $elementsParPage) as $fileToView){    //boucle foreach
	$path_parts = pathinfo($fileToView);//fonction pathinfo pour stocker le nom du fichier
	$path_extension .= $path_parts['extension']; //fonction permettant de récupérer uniquement l'extension


		$output= "<div class='col-lg-4' style='margin-bottom:10px;'>\n";
		$output.= "	<img src='".$dir."/".$fileToView."' style='width:100%; background-color: #eee;'>\n";
		$output.= "</div>\n";
	echo $output;
}

?>
<div class="container">
<ul class="pagination flex-wrap justify-content-center">
<?php
//création de la barre de pagination

/*for($i=1; $i<=$pagination; $i++){
	if($i==$imagepage){
	$output.= "<li class='page-item active'>\n";
	}else{
		$output.= "<li class='page-item'>\n";
		}
	$output.= "<span class='page-link' id=".$i."'>".$i."</span>\n";
	$output.= "</li>\n";
 } 
echo $output;*/


$imagepage++;
if($imagepage<=$pagination){
$showmore = '<span class="page-link" id="'.$imagepage.'">Show more</span>';
echo $showmore;
}
//echo $imagepage."/".$pagination;


?>
</ul>
</div>