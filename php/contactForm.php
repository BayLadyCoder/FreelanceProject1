<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	// $subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$subject = "Message from Healthcare Baltimore Website";
	$mailTo = "info@healthcarebaltimore.com";
	$headers = "From: ".$mailFrom;
	$text = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $text, $headers);
	header("Location: index.php?mailsend");

}



?>