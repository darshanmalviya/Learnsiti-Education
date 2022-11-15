<?php
include("connection.php")
?>
<html>                           
<head>
<title>Login Web Page</title>
<link rel="stylesheet" href= "../les/css/log.css"/>
</head>
<body background= "../les/images/1.jpg">
<center>
<img src= "../les/images/18.png" height="150" width="150"/>
<h1>Login</h1>
<form  method="POST" action="">
	 <br/><br/><br/>
     Admin<input type="radio" name="User" value="" required> Teacher<input type="radio" name="User" value="" required> Student<input type="radio" name="User" value="" required><br/><br/><br/>
     <b>Username :</b>&nbsp;&nbsp;<input type="text" placeholder="enter your username" name="username" value="" required><br/><br/>
	 <b>Password :</b>&nbsp;&nbsp;<input type="password" placeholder="enter your password" name="password_1" value="" id="myInput" required><br><br/>
	 <input type="checkbox" onclick="myFunction()">Show Password
     </form>
	 
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<center>
<br/><br/>
	 <button type="submit" name="submit">Login</button>
     <button type="reset" name="reset">Reset</button>
<br>
</center>
<a href="http://localhost/les/register.php">Register Here</a>
</center>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pwd = $_POST['password_1'];
	$query = "SELECT * FROM log WHERE username='$user' && password_1='$pwd'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
		if($total==1)
	{
		header('location:wlcm.html');
	}
	else
	{
		header('location:invalid.html');
	}
}
?>

