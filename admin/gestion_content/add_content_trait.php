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
if(isset($_POST['sectionname']) && isset ($_POST['sectioncontent']) && $_POST['sectionname']!="" && $_POST['sectioncontent']!=""){
	extract($_POST);
	include("../dbconn.php");
	$content = addslashes($content);
	$sql = "INSERT INTO sections(sectionname, sectioncontent) values ('$sectionname', '$sectioncontent')";
	if (mysqli_query($db, $sql)){
	header('location:content_man.php');
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