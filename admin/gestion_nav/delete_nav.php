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

if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){
if(isset($_GET['id']) && isset($_GET['id'])!=""){
 extract($_GET);

$db = mysqli_connect("localhost","sophie","Sophie21!","sophie");
$sql ="DELETE FROM navigation WHERE id=".$id;
$result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
	header('location:nav_man.php');
}else{
	echo "la suppression à échouée";
}

mysqli_close($db);
}
}else{
	echo "Vous n'êtes pas identifié ";
	echo "<p><a href='index.php'>Retour au formulaire</a></p>";
}


?>

</body>
</html>