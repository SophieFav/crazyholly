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

if(isset($_POST['username']) && isset($_POST['password'])){
extract($_POST);

$db = mysqli_connect("localhost","sophie","Sophie21!","sophie");
$sql = "SELECT * FROM admin";
$result = mysqli_query($db,$sql);
if($data=mysqli_fetch_assoc($result)){
if($data['password']==$password AND $data['username']==$username){
$_SESSION['role'] = $data['role'];
header('location: management.php');
}else{
	header('location: connexionfailed.php');
echo "<a href='index.php'>Retry</a>";
}
}
}

?>
</body>
</html>