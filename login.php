<?php
session_start();
include("connection.php");
?>


<html>
<head>
<title>
LOGIN PAGE
</title>
</head>
<style type="text/css">
  body{
       background-color:none;
      }
   button {
  background-color: #4CAF50;
  color: white;
  padding: 20px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
   }
.cancel{
        background-color:red;
        width:10%;
        }

</style>
<body background="none">
<form action="" method="POST">
<a href="registration.php">Click here for registration</a>
<h1><center>WELCOME TO LOGIN PAGE</center></h1><center>
<br/>
<br/>
<br/><br/>
<img src="a.png" alt="image not found"> 
<p>USERNAME</p>
<input type="text" type="text" name="name" value=""><br/><br/>
<p>PASSWORD</p>
<input type="text" name="password" value=""><br/><br/>

<input type="checkbox">Remember me 
<br/><br/>
&nbsp&nbsp&nbsp<a href="a.html">Forgot password?</a><br>
<button type="submit" class="submit" value="Login">Login</button>
<button type="submit" class="cancel">Cancel</button>

</center>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$user= $_POST['name'];
	$pwd= $_POST['password'];
	$query="SELECT * FROM student WHERE name='$user' && password='$pwd'";
	
	$data = mysqli_query($conn , $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location:sdashboard.php');
	}
	else
	{
		echo "<script type='text/javascript'>alert('incorrect password')</script>";
	}
}
?>