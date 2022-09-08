<?php
//database connection

$link = mysqli_connect("localhost","root","200298", "signup");
	if(mysqli_connect_error())
	{
		die ("There is error in establishing connection");	
	}
	
$query = "INSERT INTO infodata (email, password) VALUES ('ijkl12345@gmail.com', 'USA')";
//$query = "UPDATE userdata SET country = 'INDIA' WHERE email = 'efg12345@gmail.com' ";
//$query = "DELETE FROM userdata WHERE email = 'efg12345@gmail.com' ";

if(mysqli_query($link, $query))
{
	echo "Data Inserted successfully!";
	//echo "Data Updated successfully!";
	//echo "Data DELETED successfully!";
}


?>