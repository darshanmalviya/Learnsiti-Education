<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head><title>Registration Form </title>
<link rel="stylesheet" href="css/btn.css">
</head>
<body background="..\les\images\abt.png">
<center>
<img src= "..\les\images\18.png" height="150" width="150">
<h1>Student Registration Form</h1>
<form  method="GET" action="">
<table border="5" width="900" height="700">
<tr><td align='center'><b>Enrollment No.</b></td><td><input type="text" name='en' value="" required></td></tr>
<tr><td align='center'><b>Name</b></td><td><input type="text" name='name'  value="" required></td></tr>
<tr><td align='center'><b>Father's Name</b></td><td><input type="text" name='fname' value="" required></td></tr>
<tr><td align='center'><b>Date of Birth</b></td><td><input type="text" name='dob' value="" required></td></tr>
<tr><td align='center'><b>Sex</b></td><td> <input type="text" name='sex' value="" required>
<tr><td align='center'><b>Address</b></td><td><input type="text" name='address' value="" required></td></tr>
<tr><td align='center'><b>City</b></td><td><input type="text" name='city' value="" required></td></tr>
<tr><td align='center'><b>Postal Code</b></td><td><input type="text" name='pscode' value="" required></td></tr>
<tr><td align='center'><b>State</b></td><td><input type="text" name='state' value="" required></td></tr>
<tr><td align='center'><b>Mobile No.</b></td><td><input type="text" name='mobile' value="" required></td></tr>
<tr><td align='center'><b>Email ID</b></td><td><input type="text" name='email' value="" required></td></tr>
<td align='center'><b>Hobbies</b></td><td><input type="text" name='hobby' value=""></td></tr>
<tr><td align='center'><b>Previous School</b></td><td><input type="text" name='pre_school' value="" required></td></tr>
<tr><td align='center'><b>Class</b></td><td><input type="text" name='class'  value="" required></td></tr>
<tr><td align='center'><b>Board</b></td><td><input type="text" name='board'  value=""></td></tr>
<tr><td align='center'><b>Stream</b></td><td><input type="text" name='stream'  value=""></td></tr>
<tr><td align='center'><b>TRANSPORT</b></td><td><input type="Text" name='transport' value="" required></td></tr>
<tr><td colspan="2" align="center">
<button type="submit" name="submit" value="Submit">Submit</button>
<button type="reset" value="Reset">Reset</button>
</td></tr>
</table>
</form>
<br/><br/>
<a href="home.html"><button type="back">Back</button></a>
<br/><br/><br/>
</body>
</html>


<?php
if($_GET['submit'])
{   
    $enr = $_GET['en'];
	$name = $_GET['name'];
    $f_n = $_GET['fname'];
	$dob = $_GET['dob'];
	$sex = $_GET['sex'];
    $adrs = $_GET['address'];
    $city = $_GET['city'];
	$psc = $_GET['pscode'];
	$s_t = $_GET['state'];
    $mob = $_GET['mobile'];
	$eml = $_GET['email'];
    $hby = $_GET['hobby'];
	$p_s = $_GET['pre_school'];
    $cl = $_GET['class'];
	$brd = $_GET['board'];
    $str = $_GET['stream'];
	$tr = $_GET['transport'];
 
if($enr!="" && $name!="" && $f_n!="" && $dob!="" && $sex!="" && $adrs!="" && $city!="" && $psc!="" && $s_t!=""  && $mob!="" && $eml!="" && $hby!="" && $p_s!="" && $cl!="" && $brd!="" && $str!=""  && $tr!="")
	{
		$query = "INSERT INTO REG VALUES ('$enr','$name','$f_n','$dob','$sex','$adrs','$city','$psc','$s_t','$mob','$eml','$hby','$p_s','$cl','$brd','$str','$tr')";
		$data = mysqli_query($conn, $query);
			
			
			if($data)
			{
			 echo "<font color='green'><h5>You Are Registered</h5>";
			}
		   
	}
	else
	{
		echo "<font color='red'><h5>!! You Are Not Registered !!</h5>";
	}
}
?>