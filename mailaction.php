<?php

$email = $_POST['email'];
$message = $_POST['message'];


     $to      = 'crazyholly.art@gmail.com';
     $subject = 'Message de votre site WEB';
     $headers = 'From: '.$email."\r\n".
     'Reply-To:' .$email."\r\n".
     'X-Mailer: PHP/' . phpversion();

     if (mail($to, $subject, $message, $headers)){
    	echo "<script> alert('Message envoyé');window.location.href='http://sophie.better-experience.be/crazyholly.php#contact';</script>";
     }else{
     	echo "<script> alert('Une erreur est survenue');window.location.href='http://sophie.better-experience.be/crazyholly.php';</script>";
     }
     


?>