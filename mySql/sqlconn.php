<?php

	mysqli_connect("localhost","root","200298");
	if(mysqli_connect_error())
	{
		echo "There is error in establishing connection";	
	}
	else
	{
		echo "Connection established";	
	}
	
?>