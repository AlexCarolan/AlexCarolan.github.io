<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mailto = 'AlexCarolanWork@Gmail.com';
	$headers = "From: ".$email;
	$txt = "Email recived from ".$name.".\n\n".$message;


	mail($mailto, $subject, $txt, $headers);
}

?>