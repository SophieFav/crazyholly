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


	<link rel="stylesheet" href="../../css/formboot.css">



</head>

<body>

<header>


<div class="diagonav fixed-top">
<img src="../../img/diagonav.png">
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-md bg navbar-dark fixed-top" id="myNavbar">
<div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"> 
  <img src="../../img/crazyhollylogo3.png" onmouseover="this.src='../../img/crazyhollylogo3hover.png'" onmouseout="this.src='../../img/crazyhollylogo3.png'" style="width:150px">
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

<?php
//if(isset($_SESSION['role']) && $_SESSION['role']=="Admin"){
$db = mysqli_connect("localhost","sophie","Sophie21!","sophie");
$sql = "SELECT * FROM navigation";
$result = mysqli_query($db, $sql);
echo "<div class='container'>";
echo"<h4>Nav Management:</h4>";
	//echo"<a href='add_nav.php'><img class='addnav' src='/img/addplus.png'></a>";
echo "</div>";
echo "<table class='navman'>";
echo"<form method='get' action='modify_nav.php'>";

while($data=mysqli_fetch_assoc($result)){
echo"<tr>";
echo"<td><a href='add_nav.php'><img class='addnav' src='/img/addplus.png'></a></td>";
echo"<td class='sectionname'>".$data['navname']."</td>";
echo "<td><a href='modify_nav.php?id=".$data['id']."'class='modifybutton'>Modify</a></td>";
echo "<td><a href='delete_nav.php?id=".$data['id']."'class='deletebutton'>Delete</a></td>";
echo "<td><input type=\"hidden\" name=\"id\" value='" .$data['id'] ."'/></td>";
echo"</tr>";
}


//}else{
//echo "Vous n'êtes pas authentifié!!!! <a href='../index.php'>connection</a>";
//}
?>

</form>
</table>
</div>

<div class='container-fluid copy'>
<div class="diagofooter fixed-bottom">
<p class='copyright fixed-bottom'>Copyright &copy Crazy Holly Art 2018</p>
<img src="../../img/diagofooter.png">
</div>
</div>
</body>
</html>