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
$db = mysqli_connect("localhost","sophie","Sophie21!","sophie");
extract($_GET);
$sectioncontent = addslashes($sectioncontent);
$sql = "UPDATE sections SET sectionname = '$sectionname', sectioncontent = '$sectioncontent' WHERE id = ".$id;
$result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
	header('location:content_man.php');
}else{
	echo $sql; //"Error...";
}
mysqli_close($db);

}else{
	echo "Identification <a href='../index.php'>here</a>!";
}
?>

</body>
</html>