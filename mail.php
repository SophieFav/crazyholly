<!DOCTYPE html>
<html>
<head>
  <title>Crazy Holly Art</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
<body>



<?php
$emailError = false;
$messageError = false;
$mailok = true;
extract($_POST);
//SI UN CHAMP EST VIDE, ON RENVOIE TRUE DANS LA VARIABLE LE CONCERNANT
if($email==""){
	$emailError = true;
	
	$mailok = false;
}

if($message==""){
	$messageError = true;
	$mailok = false;

}
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailok = false;//si le filter_var n'a pas fonctionné, $emailOk est à false
			
	}
$message = htmlspecialchars($message);
$messageGlobal = "Bonjour, Ceci est un email de votre site Internet\n";
$messageGlobal .="Email de l'expéditeur : ".$email."\n";
$messageGlobal .="Message :\n";
$messageGlobal .=$_POST['message'];

$sujet = "Message de votre site WEB";
$to = 'crazyholly.art@gmail.com';

	if(mail($to, $sujet, $messageGlobal)){
		echo "<script> alert('message envoyé');widow.location.href='/';</script>";
	}else{
		echo "<script> alert('Une erreur est survenue');widow.location.href='http://sophie.better-experience.be/crazyholly.php#section4';<script>";	
	}

?>

</body>
</html>