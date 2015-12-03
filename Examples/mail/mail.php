<?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com";

if(mail($to,$subject,$txt,$headers)){
	echo "Sending";
}
	else{
		echo "Error";
	}
?>