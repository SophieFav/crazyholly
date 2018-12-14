<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
       <script src="highlight/highlight.pack.js"></script>

    <link href="highlight/styles/default.css" rel="stylesheet">
    <link href="highlight/styles/solarized-dark.css" rel="stylesheet">

  <script>hljs.initHighlightingOnLoad()</script>
<style class="for-code">
.container {
	font-family: sans-serif;	
}

.logo {
	margin-right: 10px;
	padding-left: 10px;
	padding-right: 10px;
	color: #fff;
	background-color: purple;
	border: 2px solid #fff;
	border-radius: 5px;
}
.jumbotron {
	background-color: #855888;
	color: #fff;
}

</style>
<style>
.hljs {
	height: 500px;
	
}
</style>
</head>
<body>
<div id="view-code">
<div class="container-fluid">
	<div class="container top-margin">
		<div class="jumbotron">
			<h1 class="titre1"><span class="logo">B</span>Bootstrap 4 Pagination</h1>
			<p>Exemple de pagination bootstrap, en fonction du contenu d'un dossier 'images'</p>
		</div>
	</div>
</div>

<div class="container">


	<div id="imageviewer" class="row">
	
	</div>
	
<script>
$(document).ready(function(){
	load_data();
	function load_data(page){
	$.ajax({
		url: "pagination.php",
		method: "POST",
		data:{page:page},
		success:function(data){
			$("#imageviewer").append(data);
		}
	})
	}
	   $(document).on('click', '.page-link', function(){  
           var page = $(this).attr("id");  
           $(this).hide();
           load_data(page);  
      });  
});
</script>




</div>


</div>
<div class="container" style="margin-top:20px;">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="html-tab" data-toggle="tab" href="#codehtml" role="tab" aria-controls="html-code" aria-selected="true">HTML</a>
  </li>

   <li class="nav-item">
    <a class="nav-link" id="php-tab" data-toggle="tab" href="#codephp" role="tab" aria-controls="php-code" aria-selected="false">PHP</a>
  </li>
 </ul>
</div>
<div class="container code-container">
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="codehtml" role="tabpanel" aria-labelledby="html-tab">...</div>
  <div class="tab-pane fade" id="codephp" role="tabpanel" aria-labelledby="php-tab"></div>
</div>
</div>

</body>
<div id="php-demo">
<div class="row">
<!--

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
if(!isset($_GET['imagepage'])){
	$imagepage = 1;	
}else{
	extract($_GET);	
}
$imagestart = ($imagepage-1) * $elementsParPage;
//echo $imagestart;
foreach(array_slice($file,$imagestart, $elementsParPage) as $fileToView){    //boucle foreach
	$path_parts = pathinfo($fileToView);//fonction pathinfo pour stocker le nom du fichier
	$path_extension .= $path_parts['extension']; //fonction permettant de récupérer uniquement l'extension


		echo "<div class='col-lg-4' style='margin-bottom:10px;'>";
		echo "<img src='".$dir."/".$fileToView."' style='width:100%; background-color: #eee;'>";
		echo "</div>";
	
}




</div>

<div class="container">
<ul class="pagination justify-content-center">

//création de la barre de pagination
if($imagepage>1){
	echo "<li class='page-item'>";
}else{
	echo "<li class='page-item disabled'>";
}
	echo "<a class='page-link' href='images_view.php?imagepage=".($imagepage-1)."'>Previous</a>";

	echo "</li>";
for($i=1; $i<=$pagination; $i++){
	if($i==$imagepage){
	echo "<li class='page-item active'>";
	}else{
		echo "<li class='page-item'>";
		}
	echo "<a class='page-link' href='images_view.php?imagepage=".$i."'>".$i."</a>";
	echo "</li>";
 } 
 if($imagepage==$pagination){
	echo "<li class='page-item disabled'>";
 }else{
	echo "<li class='page-item'>";
 }
	echo "<a class='page-link' href='images_view.php?imagepage=".($imagepage+1)."'>Next</a>";
	echo "</li>";



</ul>
-->
</div>
</div>
<script>

mycode = $("#view-code").html();
phpcode = $("#php-demo").html();
$("#codehtml").html("<pre><code class='html'></code></pre>");
$("#codephp").html("<pre><code class='php'></code></pre>");
$(".html").text(mycode);
$(".php").text(phpcode);
</script>

</html>