<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
	<title>Crazy Holly</title>
	
<?php
include("../bootstrap.php");
?>
	<link rel="stylesheet" href="../css/connexionfailed.css">
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
	  background: url('../img/youfailed.gif') no-repeat center center;
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
		</div>
		</a>
	</div>
</div>


<div class="trybutton">
<p><a href='index.php'>Try Again</a></p>
</div>





	<!-- End banner -->

</body>
</html>