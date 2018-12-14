<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crazy Holly Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.wmin.js"></script>

  <link rel="stylesheet" href="css3-animate-it-master/css/animations.css" type="text/css">
	<link href="lightbox/dist/css/lightbox.min.css" rel="stylesheet">

	<link rel="stylesheet" href="/css/formboot.css">

<?php
include("../../bootstrap.php");
?>

</head>

<body>

<header>


<div class="diagonav fixed-top">
<img src="/img/diagonav.png">
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-md bg navbar-dark fixed-top" id="myNavbar">
<div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"> 
  <img src="/img/crazyhollylogo3.png" onmouseover="this.src='/img/crazyhollylogo3hover.png'" onmouseout="this.src='/img/crazyhollylogo3.png'" style="width:150px">
  </a>

  <!-- Menu Hamburger -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Menu Liens -->
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
		<li class="nav-item">
		  <a class="nav-link" href="http://sophie.better-experience.be/" target="_blank">Website</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="../management.php">Management</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="../disconnect.php">Disconnect</a>
		</li>
    </ul>
  </div>  
  </div>
</nav>
</header>

<form method="POST" class="upload" action="image_upload.php" enctype="multipart/form-data">
<div class='container'>
   <h4> Add image:</h4></div>
   
	<div id="file-button">
    <input type="file"  name="fileToUpload" id="fileToUpload">
	<input type="hidden" name="MAX_FILE_SIZE" value="100000">
    <input type="submit" value="Upload Image" name="submit">
	
	</div>
</div>
</form>


<?php

//Petit fichier PHP permettant de voir les images contenues dans le dossier "images" du site.
   
    $dir	= '../../img/imgnb';//Dossier dans lequel se trouvent les images (On suppose donc que ce fichier est dans le dossier admin) (../)
    $files1 = scandir($dir);//Fonction PHP (scandir) ajoutant le contenu du dossier dans une variable de type array
    $fileArray = array(".", "..", "@eaDir");//variable de type array qui servira   iter d'afficher ce qui s'y trouve
    echo "<div class='container' ; margin-top: 100px;'>";
	    //echo "<br><br><h5>Images:</h5>";
    echo "<div class='row galery'>";
	    
	foreach($files1 as $fileToView){//Pour chaque information se trouvant dans la variable $file1 on assigne la valeur dans $fileToView (boucle)
	if(!in_array($fileToView, $fileArray)){//Si $fileToView n'est pas une valeur se trouvant dans la variable $fileArray
		echo "<div class='col-md-3'>";
		echo "<div style='height:110px; text-align:center;'>";	
		echo "<div style='height: 60px'>";
		echo "<img class='img-fluid' src='".$dir."/".$fileToView."' title='".$fileToView."' style='height: 80%;'/>";//On crꥠ une balise image avec la variable, ce qui donnerait (dossier/image)
		echo "<a href='delete_image.php?filename=".$fileToView."'class='deletebutton'>DELETE</a>";
		echo "<input type=\"hidden\" name=\"filename\" value='" .$fileToView."'/>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
	    }
	}
		
    echo "</div>";
?>

<div class='container-fluid copy'>
<div class="diagofooter fixed-bottom">
<p class='copyright fixed-bottom'>Copyright &copy Crazy Holly Art 2018</p>
<img src="/img/diagofooter.png">
</div>
</div>
</body>
</html>