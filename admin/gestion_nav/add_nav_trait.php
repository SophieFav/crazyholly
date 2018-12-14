<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php

if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){
if(isset($_POST['navname']) && isset ($_POST['navcontent']) && $_POST['navname']!="" && $_POST['navcontent']!=""){
	extract($_POST);
	include("../dbconn.php");
	$content = addslashes($content);
	$sql = "INSERT INTO navigation(navname, navcontent) values ('$navname', '$navcontent')";
	if (mysqli_query($db, $sql)){
	header('location:nav_man.php');
}else{
echo "une erreur est survenue!".$sql;
}
}
}else {
echo "Vous n'êtes pas authentifié!!!! <a href='index.php'>Par ici pour le login</a>";
}
?>

</body>
</html>