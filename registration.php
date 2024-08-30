<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>REGISTRATION FORM</title>
<center><body background="none">
<table border="10" height="90%" width="50%" align="center">
<form method="POST" action="">
<!-- we will create registration.php after registration.html -->
<center><h3>REGISTRATION</h3></center>
<tr>
<th>NAME:</th>
<td><input type="text" name="name" value=""></br></td>
</tr>

<tr>
<th>FATHER NAME:</th>
<td><input type="text" name="fathername" value=""></br></td>
</tr>
<tr>
<th>DOB:</th>
<td><input type="text" name="dob" value=""></br></td>
</tr>
<tr>
<th>PICKUP</th>
<td><input type="text" name="pickup" value=""></br></td>
</tr>

<tr>
<th>PASSWORD</th>
<td><input type="text" name="password" value=""></br></td>
</tr>
<tr>
<th>RE-PASSWORD</th>
<td><input type="text" name="rpassword" value=""></br></td>
</tr>

<tr>
<th>CHOOSE</th>
<td><select name="choose">
<option>FACULTY</option>
<option>STUDENT</option>
</select></td>
</tr>

<tr>
<th><input type="submit" name="submit" value="submit"></th>
<td><a href="login.php">Click here for login</a></td>
</tr>
</form>

</table>
</body>
</center>
</head>
</html>


<?php
if($_POST['submit'])
{
	$fn = $_POST['name'];
	$fnm = $_POST['fathername'];
	$db = $_POST['dob'];
	$pkup = $_POST['pickup'];
	$dop = $_POST['drop1'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpassword'];
	$ch = $_POST['choose'];
	$query=mysqli_query($conn,"insert into student(name,fathername,dob,pickup,drop1,password,rpassword,choose) values('$fn','$fnm','$db','$pkup','$dop','$pass','$rpass','$ch')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	
}
}
?>



