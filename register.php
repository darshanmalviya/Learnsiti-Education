<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>Sign Up page</title>
<link rel="stylesheet" href="../les/css/log.css">
</head>
<body background="..\les\images\1.jpg">
<center>
<br/><br/>
<h1>Register</h1>
<br/><br/><br/>
<form  method="POST" action="">
	<label>Username</label><br/>
	<input type="text" placeholder="enter your username"  name="username" value="" required><br/><br/>
    <label>Email</label><br/>
	<input type="text" placeholder="enter your email" name="email" value=""  required><br/><br/>
	<label>Password</label><br/>
	<input type="text" placeholder="enter the password" name="password_1" value=""  required><br/><br/>
	<label>Confirm Password</label><br/>
	<input type="text" placeholder="re-enter the password" name="password_2" value=""  required><br/><br/>
<br/><br/>
<button type="submit" name="submit" value="Submit">Register</button>
<button type="reset" name="reset" value="reset">Cancle</button>
	 <p>
		Already a member? <a href="http://localhost/les/Log.php">Log in</a>
	</p>
</form>
</center>
</body>
</html>

<?php
if($_POST['submit'])
{   
    $user = $_POST['username'];
	$eml = $_POST['email'];
	$psw_1 = $_POST['password_1'];
	$psw_2 = $_POST['password_2'];


 
	if($user!="" && $eml!="" && $psw_1!="" && $psw_2!="")
	{
	      $query = "INSERT INTO LOG VALUES ('$user','$eml','$psw_1','$psw_2')";
		  $data = mysqli_query($conn, $query);
		  
		 if($data)
		 {
			echo "<font color='green'><h1>Yor Are Successfully Registered</h1>";
		 }
		   
	}
	else
	{
		echo "<font color='red'><h3>!! Not Successfully Registered</h3>";
	}
}
?>

</center>
</body>
</html>













