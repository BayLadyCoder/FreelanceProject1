<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "rachada_32@hotmail.com"
	$headers = "From: ".$mailFrom;
	$text = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $text, $geaders);
	header("Location: index.php?mailsend");

}



?>