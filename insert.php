<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<link rel="stylesheet" href="css/btn.css">
</head>
<body background="..\les\images\abt.png">
<center>
<img src= "..\les\images\18.png" height="150" width="150">
<h1>Add Student</h1>
<form  method="GET" action="">
<table border="3" width="500" height="300">
<tr><th>Sr no.</th><th><input type="text" name='s_n' value="" required /></th></tr>
<tr><th>Student Id</th><th><input type="text" name='stud_id' value="" required /></th></tr>
<tr><th>Student Name</th><th><input type="text" name='s_name' value="" required /></th></tr>
<tr><th>Class</th><th><input type="text" name='class' value="" required /></th></tr>
<tr><th>Date Of Birth</th><th><input type="text" name='d_o_b' value="" required /></th></tr>
<tr><th>Sex</th><th><input type="text" name='sex' value="" required /></th></tr>
<tr><th>Mobile No</th><th><input type="text" name='mobile_no' value="" required /></th></tr>
</form>
</table>
<br/><br/><br/><br/>
<button type="submit" name="submit" value="Submit">Submit</button>
<button type="reset" name="reset" value="Reset">Reset</button>
<br/><br/>
<?php
if($_GET['submit'])
{   
    $sr = $_GET['s_n'];
	$sid = $_GET['stud_id'];
	$sn = $_GET['s_name'];
	$cl = $_GET['class'];
	$dob = $_GET['d_o_b'];
	$sex = $_GET['sex']; 
	$mob = $_GET['mobile_no'];

 
	if($sr!="" && $sid!="" && $sn!="" && $cl!="" && $dob!="" && $sex!="" && $mob!="" )
	{
	      $query = "INSERT INTO STUDENT VALUES ('$sr','$sid','$sn','$cl','$dob','$sex','$mob')";
		  $data = mysqli_query($conn, $query);
			
			
		 if($data)
		 {

?>
	       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/les/displayst.php">
<?php
		 }
		   
	}
	else
	{
		echo "<font color='red'><h5>! Record not inserted successfully</h5>";
	}
}
?>
</center>
</body>
</html>