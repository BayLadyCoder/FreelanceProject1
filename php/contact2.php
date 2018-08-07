<?php

// $nameErr = $emailErr = "";
// $fromname = $emailfrom = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $fromname = test_input($_POST["name"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z ]*$/",$fromname)) {
//       $nameErr = "Only letters and white space allowed"; 
//     }
//   }

//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $emailfrom = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($emailfrom, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format"; 
//     }
//   }



$emailto = 'info@healthcarebaltimore.com';
$toname = 'TO NAME';
$emailfrom = $_POST['email'];
$fromname = $_POST['name'];
$message = $_POST['message'];
$phoneNumber = $_POST['phone'];
$subject = "Message from Healthcare Baltimore Website";
$messagebody = "You have received an e-mail from ".$fromname.".\n\n".$message."\n\nPhone Number: ".$phoneNumber."\n\nEmail: ".$emailfrom;
$headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;
$test = mail($emailto, $subject, $messagebody, $headers, $params);
// $test should be TRUE if the mail function is called correctly
header("Location:https://www.healthcarebaltimore.com/thankyou.html");



?>