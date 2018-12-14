<!DOCTYPE html>
<html>
<head>
  <title>Crazy Holly Art</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.wmin.js"></script>

  <link rel="stylesheet" href="css3-animate-it-master/css/animations.css" type="text/css">
  	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="lightbox/dist/css/lightbox.min.css" rel="stylesheet">


<?php
include("bootstrap.php");
?>

<style>
/*carousel*/
  
  #myBanner {
    width: 100%;
}

.banner, .head-banner,.crazyhollybanner{
	margin:0px;
	padding:0px;
	width:100%;
	height:100%;
	background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
  }
  
  .banner{
	 background-image: url('img/banner2.png');
  }


  </style>
</head>

<body>

<div class="diagonav fixed-top">
<img src="img/diagonav.png">
</div>


<!-- Navbar -->

 <?php
$db = mysqli_connect("localhost","root","","favier_db");
$sql = "SELECT * FROM navigation ";
$result = mysqli_query($db, $sql);

while($data=mysqli_fetch_assoc($result)){
   $contenu = $data['navcontent'];
   echo $data['navcontent']; 
  }
  ?>
  
<!-- End Navbar -->

<!-- Banner -->
<div id="home" class="container-fluid banner bg header">
	<div id="myBanner">
	  <div class="head-banner">
		<div class="crazyhollybanner">
		</div>
	 </div>
	</div>
</div>
<!-- End Banner -->
  
<!-- Artwork -->
<div id="artwork" class="bg">
<div class="container ">
	<div class="row about">
			<div class="col-lg-12 col-xs-6 artwork">
				<h1>ARTWORK</h1>
			</div>
	</div>	

<div id="imageviewer" class="row image-item">

	
<script>
$(document).ready(function(){
	load_data();
	function load_data(page){
	$.ajax({
		url: "showmore.php",
		method: "POST",
		data:{page:page},
		success:function(data){
			$("#imageviewer").append(data);
		}
	})
	}
	   $(document).on('click', '.page-link', function(){  
           var page = $(this).attr("id");  
           $(this).hide();
           load_data(page);  
      });  
});
</script>
</div>
</div>
</div>


<!-- End Artwork -->

<!-- about -->
<div id="about" class="container-fluid bg">
<div class="container">
<div class="col-lg-12 aboutme">
			<h1>ABOUT</h1>
</div>
<?php

	
$db = mysqli_connect("localhost","root","","favier_db");
		$sql= "SELECT * FROM sections WHERE sectionname='about'";
		$result=mysqli_query($db,$sql);
			if($data=mysqli_fetch_assoc($result)){
				echo $data['sectioncontent'];	
			}else{
				echo "sorry, this section isn't exist";	
			}
		mysqli_close($db);

?>
    </div>
</div>
<!-- End about -->

<!-- contact -->
<div id="contact" class="container-fluid bg">
  <!--<h2 class="contact">Contact me</h1>-->
  <div class="container form">

      <div class="row">                
          <div class="col-lg-3 logoch">
              <img src ="img/logoshadow.png">
          </div>  
          <div class="col-lg-6">
            <form class='col-lg-12' method="post" action="mailaction.php" onsubmit="sendmail();return false;">
            <h4 class="title">Contact Me</h4>
                <div class="form-group">
                  <!--<label for="email">Email address:</label>-->
                  <input type="email" placeholder="ex: name@example.com" class="form-control" id="email"  style="border-radius:0px;">
                </div>
              <div class="form-group">
                <!--<label for="comment">Comment:</label>-->
                <textarea class="form-control" rows="3" id="message"  style="border-radius:0px;"></textarea>
              </div>
            <button type="submit" class="btn" style="border-radius:0px;" >Submit</button>
            <div id="ackmsg" class="col-8"></div>
          </form>
         </div>
         <!--<script>

function sendmail(){
$("#submit-btn").attr("disabled", "disabled");
//$("#ackmsg").php("<img src='img/loading.gif' style='width:40px;'>");

var email = $("#email").val();
var message = $("#message").val();
$.ajax({
	
                    type : "POST",
                    url: "mail.php",
                    data: '&email='+email+'&message='+message,
                    success: function(reponse) {
                    	console.log(reponse);
                    	if(reponse=="ok"){
                    		("#ackmsg").html("<span style='color:green'>Votre email a bien été envoyé</span>");
							$("#email").val("");
							$("#message").val("");
							$("#submit-btn").removeAttr("disabled", "disabled");
                    	}
                    },
                    error: function() {
                        ("#ackmsg").html(reponse);
                      header("Location: http://sophie.better-experience.be/crazyholly.php#section4");	
                      unset($_POST);
                    }
                });
}
</script>-->
          <div class="col-lg-3 hollyis">
              <h4 class="title">Holly is...</h4>
              <p class="text">#Crazy #Dirty #Bloody #Sexy<p>
          <h4 class="title">Follow Me</h4>
              <ul class=" socialnetwork">
                  <li><a href="http://www.instagram.com/crazy.holly.art/" target="_blank" ><img src='img/instalogo2.png'/></a></li>
                  <li><a href="http://www.crazy-holly.tumblr.com/" target="_blank" ><img src='img/tumblrlogo2.png'/></a></li>
                  <li><a href="https://www.pinterest.com/crazyh0lly/" target="_blank" ><img src='img/pinlogo2.png'/></a></li>
              </ul>   

              </div> 
              </div>

</div>

</div>
<div class='container-fluid copy'>
<div class="diagofooter fixed-bottom">
<p class='copyright fixed-bottom'>Copyright &copy Crazy Holly Art 2018</p>
<img src="img/diagofooter.png">
</div>
</div>

<script src='css3-animate-it-master/js/css3-animate-it.js'></script>
<script src="lightbox/dist/js/lightbox.min.js"></script>
<script src='scrollspy.js'></script>
</body>
</html>

