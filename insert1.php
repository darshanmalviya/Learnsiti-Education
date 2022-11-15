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
<h1>Add Teacher</h1>
<form  method="GET" action="">
<table border="3" width="600" height="400">
<tr><th>Teacher ID</th><th><input type="text" name='teacher_id' value="" required /></th></tr>
<tr><th>Teacher Name</th><th><input type="text" name='teacher_name' value="" required /></th></tr>
<tr><th>Class</th><th><input type="text" name='class' value="" required  /></th></tr>
<tr><th>Subject</th><th><input type="text" name='subject' value="" required /></th></tr>
<tr><th>Joining</th><th><input type="text" name='joining' value="" required /></th></tr>
<tr><th>Sex</th><th><input type="text" name='sex' value="" required /></th></tr>
<tr><th>Mobile No</th><th><input type="text" name='mobile_no' value="" required /></th></tr>
<tr><th>Email</th><th><input type="text" name='email' value="" required /></th></tr>
</form>
</table>
<br/><br/><br/><br/>
<button type="submit" name="submit" value="Submit">Submit</button>
<br/><br/>
<?php
if($_GET['submit'])
{   
   
	$tid = $_GET['teacher_id'];
	$tn = $_GET['teacher_name'];
	$cl = $_GET['class'];
	$sub = $_GET['subject'];
	$jn = $_GET['joining'];
	$sex = $_GET['sex'];
	$mob = $_GET['mobile_no'];
	$eml = $_GET['email'];

 
	if($tid!="" && $tn!="" && $cl!="" &&$sub!="" && $jn!="" && $sex!="" && $mob!="" && $eml!="")
	{
	      $query = "INSERT INTO TEACHER VALUES ('$tid','$tn','$cl','$sub','$jn','$sex','$mob','$eml')";
		  $data = mysqli_query($conn, $query);
			
			
		 if($data)
		 {
			echo "<font color='Green'><h4> Record successfully inserted</h4>";
			
			
		?>
			<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/les/displaytr.php">
		<?php
		 }
		   
	}

	else

	{
		echo "<font color='red'><h5>!! Record inserted failed !!</h5>";
	}
}
?>
</center>
</body>
</html>