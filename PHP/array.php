<?php

/*
Indexed Array
Associative Array
Multi-Dimensional Array
*/

#Indexed Array
$cars= array("Volvo","Toyota","Innova","Indigo");
echo "I like ". $cars[0]. " and " . $cars[3]."<br><br>";
	
#Associative Array
$age= array("amit"=>"35","vikas"=>"34","aayush"=>"25","aman"=>"23");
echo "amit is ".$age['amit']."<br>";
echo "aayush is ".$age['aayush']."<br>";

#Multi-Dimensional Array
$profit= array(
				array("maruti",22,23),
				array("indigo",32,21),
				array("volvo",31,26),
				);
echo "Profit of ". $profit[0][0]." on 2018 was " . $profit[0][1]."% and on 2019 was ". $profit[0][2]."% <br>";
echo "Profit of ". $profit[2][0]." on 2018 was " . $profit[2][1]."% and on 2019 was ". $profit[2][2]."% <br><br>";
?>