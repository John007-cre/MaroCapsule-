<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","587");

if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = $_POST["userPhone"];
	$content = $_POST["content"];

	$toEmail = "nadia.aitmouh@ensem.ac.ma";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $phone, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact.php";
?>
