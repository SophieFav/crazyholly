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


if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
if(isset($_GET['id']) && $_GET['navname']!="" && $_GET['navcontent']!=""){
extract($_GET);

$db = mysqli_connect("localhost","sophie","Sophie21!","sophie");
$sql = "UPDATE navigation SET navname = '$navname', navcontent = '$navcontent' WHERE id = ".$id;
$result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
	header('location: nav_man.php');
}else{
	echo "Error...";
}
mysqli_close($db);
}
}else{
	echo "Identification <a href='../index.php'>here</a>!";
}
?>

</body>
</html>