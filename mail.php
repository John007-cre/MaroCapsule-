

<?php 

$name = $_POST['userName'];

$email = $_POST["userEmail"];

$phone = $_POST["userPhone"];

$content = $_POST["content"];

$formcontent="From: $name \n Message: $content";

$recipient = "MaroCapsule@gmail.com";

$mailheader = "From: $email \r\n";

mail($recipient, $phone, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>


