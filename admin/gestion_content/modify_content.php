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
<?php
include("../../bootstrap.php");
?>
	<link rel="stylesheet" href="../../css/formboot.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' ,
document_base_url: "http://sophie.better-experience.be/",
plugins:'print preview powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template code codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help', 
toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',});
</script>

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
//if(isset($_SESSION['role'])&&$_SESSION['role']=="admin"){
if(isset($_GET['id']) && $_GET['id']!=""){
extract($_GET);
$db = mysqli_connect("localhost","sophie","Sophie21!","sophie");
$sql = "SELECT * FROM sections WHERE id = ".$id;
$result = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($result);

echo "<div class='container'>";
echo "<div id='comment'>";
echo '<form method="get" action="modify_content_trait.php">';
echo "<input name='sectionname' type='text' value='" .$data['sectionname']. "'/>";
echo "<textarea name='sectioncontent' value=" .$data['sectioncontent']. " </textarea>";
echo "<input type=\"hidden\" name=\"id\" value='" .$data['id'] ."'/>";
echo "<input type='submit' value='submit'/>";
echo "</form>";
echo "</div>";
echo "</div>";
}
//}else{
//echo "Identification<a href='../index.php'>Here</a>!!!";
//}


?>


<div class='container-fluid copy'>
<div class="diagofooter fixed-bottom">
<p class='copyright fixed-bottom'>Copyright &copy Crazy Holly Art 2018</p>
<img src="../../img/diagofooter.png">
</div>
</div>
</body>
</html>