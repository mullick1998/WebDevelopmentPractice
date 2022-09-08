<?php
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$country=$_POST['country'];


$mailTo="mustakimmullick12345@gmail.com";
$subject="Contact Form";
$formcontent="From: $name \n Country: $country";
$header="From: $emailid";

mail($mailTo, $subject, $formcontent, $header) or die("Error!");
echo "THANK YOU!";

?>
