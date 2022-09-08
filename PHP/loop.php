<?php

/*
for loop
while loop
do while loop
for each loop
*/

#while loop
$a=1;
while($a<=10)
   {echo "The number is ".$a. "<br>";
   $a=$a+1;}
   echo "<br><br>";
   
   
#do while loop
$a=1;
do
   {echo "The number is ".$a. "<br>";
    $a=$a+1;}
 while($a<=10);
   echo "<br><br>";
   
   
#for loop
for($a=1;$a<=10;$a++)
   {echo "The number is ".$a. "<br>";}
   echo "<br><br>";
   
   
#for each loop
$cars= array("Volvo","Toyota","Innova","Indigo");
foreach($cars as $c)
       {echo "$c.<br>";}
?>