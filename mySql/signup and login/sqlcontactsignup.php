<?php
	if (array_key_exists('name', $_POST) AND array_key_exists('email', $_POST) AND array_key_exists('phone', $_POST) AND array_key_exists('password', $_POST) )
	{
		$link = mysqli_connect("localhost","root","200298","signup");
		if(mysqli_connect_error())
		{
			echo "There is error in establishing connection";	
		}
		if($_POST['name'] == '')
		{
			echo "<h5> *NAME IS REQUIRED!! </h5>";
		}
		
		if($_POST['email'] == '')
		{
			echo "<h5> *EMAIL ID IS REQUIRED!! </h5>";
		}
		if($_POST['phone'] == '')
		{
			echo "<h5> *PHONE NUMBER IS REQUIRED!! </h5>";
		}
		if($_POST['password'] == '')
		{
			echo "<h5> *PASSWORD IS REQUIRED!! </h5>";
		}
		else
		{
			$query = "SELECT id FROM infodata WHERE email = '" .mysqli_real_escape_string($link, $_POST['email']). "'";
			$result = mysqli_query($link, $query);
			if(mysqli_num_rows($result) > 0)
			{
				echo "<h5 style='color:blue'> *That email has aready been taken. </h5>";
			}		
			else
			{
				$query = "INSERT INTO infodata (name, email, phone, password) VALUES ('" .mysqli_real_escape_string($link,$_POST['name']). "','" .mysqli_real_escape_string($link,$_POST['email']). "','" .mysqli_real_escape_string($link,$_POST['phone']). "','" .mysqli_real_escape_string($link,$_POST['password']). "')";
				if(mysqli_query($link, $query))
				{
					echo "<h5 style='color:green'> You've been successfuly signed up...redirecting you to LOGIN page.</h5>";
					header("refresh:3; url=sqlcontactlogin.php");
				}
				else
				{
					echo "<h5> *There is some problem signing you up. PLEASE TRY AGAIN LATER. </h5>";
				}
			}
		}
	}


?>
<html>
<style>
body
{
	font-family: helvetica;
}

input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=tel], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

div {

  margin: auto;
  width:450px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
h5
{
	color: red;
}
a
{
text-decoration:none; 
color:green;
float: right;
}
.container
{
	margin-top:90px;
}
p
{
	text-align:center;
	font-size:10px;
	color: grey;
}
</style>
<body>

<div class="container">
	<h1 style="text-align:center">SIGN UP FORM</h1>
	<p> (Get registered with a valid EmailID) </p>
  <form method="POST">
  
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your Name">
    <label for="email">Email ID</label>
    <input type="email" id="email" name="email" placeholder="Enter your Email Id">
	<label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" placeholder="Enter your 10-digit Phone no.">
	<label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter Your Password">
    <button type="submit"> SIGN UP </button>
	<a href="sqlcontactlogin.php"> &lt;&lt;Go to Login page. </a>
  </form>
</div>

</body>
</html>

