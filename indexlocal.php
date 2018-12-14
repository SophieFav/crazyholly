<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">


	<title>Crazy Holly</title>
	
<?php
include("bootstrap.php");
?>
	<link rel="stylesheet" href="css/indexstyle.css">
</head>

<style>

html, body{
	margin:0px;
	padding:0px;
	width:100%;
	height:100%;
	background-color:#000;
	}


 .banner{
	 	margin:0px;
		padding:0px;
		height:100%;

 }
 
 #animbanner{	
		width:100%;
		height:100%; 
		background-size: cover;
		background-position:center;
		background-repeat: no-repeat;
}
 
  .crazyhollybananim{
	  background: url('img/banneranim.gif') no-repeat center center;
	  min-height:100%;
  }

 @media (max-width: 640px){
	.crazyhollybananim{

 	
 }

</style>
<body>





	<!-- banner -->
<div class="container-fluid banner">
	<div id="animbanner">

		<div class="crazyhollybananim">
			<!--<img class="img-fluid" src="img/crazyhollybananim.gif" srcset="img/crazyhollybananim.gif" >-->
		</div>
		</a>
	</div>
</div>



	<div class="container boutons">
	<a class="buttonenter" href="crazyhollylocal.php"><img src="img/bouton-enter.png" onmouseover="this.src='img/bouton-enter-hover.png'" onmouseout="this.src='img/bouton-enter.png'" width="120px">
	</div>

	<!-- End banner -->

</body>
</html>