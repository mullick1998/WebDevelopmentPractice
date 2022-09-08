<!DOCTYPE html>
<html>
<style>
*		
{
	margin: 0;
	padding: 0;	
		
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
input[type=email], select {
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
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Employee Data Management</h3>

<div>
  <form action="email.php" method="POST">
  <label for="empid">Employee ID</label>
    <input type="text" id="empid" name="empid" placeholder="Enter Your employee ID">
	
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter Your Name">

    <label for="emailid">Email ID</label>
    <input type="email" id="emailid" name="emailid" placeholder="Enter your Email Id">

    <label for="phone">Phone number</label>
    <input type="tel" id="phone" name="phone" placeholder="Enter your Phone Number">
  
    <input type="submit" value="Submit">
	<input type="submit" value="Convert into Doc File">
  </form>
</div>

</body>
</html>
