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
 
 #thanksbanner{	
		width:100%;
		height:100%; 
		background-size: cover;
		background-position:center;
		background-repeat: no-repeat;
}
 
  .crazyhollyban{
	  background: url('img/thankyou.png') no-repeat center center;
	  min-height:100%;
  }


</style>
<body>





	<!-- banner -->
<div class="container-fluid banner">
	<div id="thanksbanner">

		<div class="crazyhollyban">
			<!--<img class="img-fluid" src="img/crazyhollybananim.gif" srcset="img/crazyhollybananim.gif" >-->
		</div>
	</div>
</div>


    
	<div class="container return">    
        <p>Your message has been delivered.</p>
        <a class="buttonreturn" href="crazyholly.php">Return to the site</a>
	</div>

	<!-- End banner -->

</body>
</html>