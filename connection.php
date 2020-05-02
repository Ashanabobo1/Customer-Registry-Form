<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<center><body background="chapada">
	<h2>Register Here!</h2>
	<form action="connection.php" method="post">
	<table border="1" width="300" height="150">
	<tr>	<td>Name:</td>
			<td><input type="text" name="name"></td>
	</tr>
	<tr>	<td>Password</td>
			<td><input type="Password" name="Password"></td>
	</tr>
	<tr>	<td>Email Id:</td>
			<td><input type="text" name="Email"></td>
	</tr>
	<tr>	<td colspan="5" align="center"> <input type="submit" name="signup" value="signup"></td></tr>
	</table>
</head>


</form>
</body></center>
</html>

<?php




mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db("customers") or die (mysql_error());
if(isset($_POST ['signup']))
{
	$name = $_POST['name'];
	$Pass = $_POST['password'];
	$emailid = $_POST['email'];
	if($name=='')
	{
		echo "<script>alert('Please enter your name')</script>";
			exit();
	}
if($pass=='')
	{
		echo "<script>alert('Please enter your password')</script>";
			exit();
	}
if($emailid=='')
	{
		echo "<script>alert('Please enter your email')</script>";
			exit();
	}
	else{

	$query ="insert into CustomerDirectory (name,password,email) values ('$name', '$pass', '$emailid')";
	if(mysql_query($query)) {
		echo "<h3>You have registered successfully!!!</h3>";
	}	
	}
}
?>