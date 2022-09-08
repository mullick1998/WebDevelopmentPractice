<?php
//database connection

$link = mysqli_connect("localhost","root","200298", "contact");
	if(mysqli_connect_error())
	{
		die ("There is error in establishing connection");	
	}
$query = "SELECT * FROM userdata ";
/*if($result = mysqli_query($link, $query))
{
	while($row = mysqli_fetch_array($result))
	{
		echo "Your name is ".$row["name"]."Your email is ".$row["email"]."Your country is ".$row["country"].".<br>";
	}
}
*/

if($result = mysqli_query($link, $query))
{
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table>";
			echo "<tr>";
				echo "<th> name </th>";
				echo "<th> email </th>";
				echo "<th> country </th>";
			echo "</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
				echo "<td>" .$row['name']. "</td>";
				echo "<td>" .$row['email']. "</td>";
				echo "<td>" .$row['country']. "</td>";
			echo "</tr>";
		}
		echo "</table>";
		//free result set
		mysqli_free_result($result);
	}
	else
	{
		echo "NO RESULT FOUND!";
	} 
}
else
{
	echo "ERROR" . mysqli_error($link);
}
//close connection
mysqli_close($link);

?>



