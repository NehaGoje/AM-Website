<?php
if(isset( $_POST['defaultContactFormFullName']))
$name = $_POST['defaultContactFormFullName'];
if(isset( $_POST['defaultContactFormEmail']))
$email = $_POST['defaultContactFormEmail'];
if(isset( $_POST['defaultContactFormComments']))
$message = $_POST['defaultContactFormComments'];
if(isset( $_POST['defaultContactFormPhone']))
$phone = $_POST['defaultContactFormPhone'];
if ($name === ''){
echo "Name cannot be empty.";
die();
}
if ($email === ''){
echo "Email cannot be empty.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email format invalid.";
die();
}
}
if ($phone === ''){
echo "Phone cannot be empty.";
die();
}
if ($message === ''){
echo "Comments cannot be empty.";
die();
}
$content="From: $name \nEmail: $email \nPhone: $phone \nMessage: $message";
$recipient = "aashish.malve@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>