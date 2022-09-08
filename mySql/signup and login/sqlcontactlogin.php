<?php
	if (array_key_exists('email', $_POST) AND array_key_exists('password', $_POST))
	{
		$link = mysqli_connect("localhost","root","200298","signup");
		if(mysqli_connect_error())
		{
			echo "There is error in establishing connection";	
		}
		
		if($_POST['email'] == '')
		{
			echo "<h5> *EMAIL ID IS REQUIRED!! </h5>";
		}
		if($_POST['password'] == '')
		{
			echo "<h5> *PASSWORD IS REQUIRED!! </h5>";
		}
		else
		{
			$query = "SELECT * FROM infodata WHERE email = '" .mysqli_real_escape_string($link, $_POST['email']). "'";
			$result = mysqli_query($link, $query);
			$row = mysqli_num_rows($result);
			
			if(mysqli_real_escape_string($link, $_POST['password']) == $row['password'])
			{
				echo "<h5 style='color:green'> You've been successfuly signed up...redirecting you to Google.</h5>";
				header("refresh:3; url=https://www.google.com/");
			}
				
			else
			{
				echo "<h5> *EmailId or Password mismatched. Please enter correct ID or Password. </h5>";
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
	<h1 style="text-align:center">LOG IN</h1>
	<p> (enter your registered EmailID and password) </p>
  <form method="POST">
    
    <label for="email">Email ID</label>
    <input type="email" id="email" name="email" placeholder="Enter your Email Id">
	<label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter Your Password">
    <button type="submit"> LOG IN </button>
	<a href="sqlcontactsignup.php"> &gt;&gt;Go to Signup page. </a>
  </form>
</div>

</body>
</html>
