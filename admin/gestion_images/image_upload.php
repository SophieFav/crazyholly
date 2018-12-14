<?php

SESSION_START();

?>

<!doctype html>
<html>
<head>
</head>
<body>
<?php





?>
<?php
// if(isset($_SESSION['role']) && $_SESSION['role']=="admin"){
	
	// if(isset($_POST['fileToUpload'])&& $_POST['fileToUpload']!=""){
	// extract($_POST);
	// include("../dbconn.php");
	// $sql = "INSERT INTO img(nom,extension,lien) values ('$fileToUpload')";
	// if (mysqli_query($db, $sql)){
// echo"l'image a été ajoutée";
// }else{
// echo "une erreur est survenue!".$sql;
// }
// }
	
// $target_dir = "../../img/";			
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
    // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        // $uploadOk = 1;
    // } else {
        // echo "File is not an image.";
        // $uploadOk = 0;
    // }
// }

// if (file_exists($target_file)) {
    // echo "Sorry, file already exists.";
    // $uploadOk = 0;
// }

// if ($_FILES["fileToUpload"]["size"] > 500000) {
    // echo "Sorry, your file is too large.";
    // $uploadOk = 0;
// }

// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    // $uploadOk = 0;
// }

// if ($uploadOk == 0) {
    // echo "Sorry, your file was not uploaded.";

// } else {
    // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
// $db = mysqli_connect("localhost","root","","crazyholly_db");
	// mysql_select_db("favier_db"); 
	// mysql_query("INSERT INTO img(name) VALUES('$target_file')");
	// mysql_close();
        // header('Location:image_man.php'); 
        
    // } else {
        // echo "Sorry, there was an error uploading your file.";
    // }
// }
// } else {
// echo "Vous n'êtes pas authentifié!!!! <a href='../index.php'>Par ici pour le login</a>";

// }
	
?>



<?php
$dossier = '/img/imgnb/';
$fichier = basename($_FILES['fileToUpload']['name']);
$taille_maxi = 500000;
$taille = filesize($_FILES['fileToUpload']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['fileToUpload']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     /*$fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {*/
          header('Location:image_man.php');
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }

?>








</body>
</html>

	
</form>
</body> 
</html>