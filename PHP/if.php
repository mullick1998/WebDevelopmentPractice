
<?php
/* if, if-esle, if elseif else switch*/
$a=18;
$b=25;
$c=20;
if( $a > $b && $a > $c)
	echo "A is greater";
elseif ( $b > $a && $b > $c)
	echo "B is greater";
else
	echo "C is greater";

$d=10;
switch( $d) {
				case 0: echo "Gotcha at case 0"; break;
				case 1: echo "Gotcha at case 1"; break;
				case 2: echo "Gotcha at case 2"; break;
				case 3: echo "Gotcha at case 3"; break;
				default: echo "Don't able to find";
	
			}
?>