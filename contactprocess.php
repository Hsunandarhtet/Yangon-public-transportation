<?php 
	$name=$_POST['username'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	ini_set("SMTP","ssl://smtp.gmail.com");

	if(mail("suhtet1375@gmail.com","Contact from website user",$comment,"From: ".$email."\r\n")){
		echo "Thanks for Contacting Me";
	}
	else{
		echo "don't work or You need to ";
	}

 ?>