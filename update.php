<?php
include("connection.php");
error_reporting(0);
 $_GET['sr'];
 $_GET['sid'];
 $_GET['sn'];
 $_GET['cl'];
 $_GET['dob'];
 $_GET['sex'];
 $_GET['mob'];
?>
<html>
<head>
<link rel="stylesheet" href="css/btn.css">
</head>
<body background="..\les\images\abt.png">
<center>
<img src= "..\les\images\18.png" height="150" width="150">
<h1>Update Student</h1>
<form  method="GET" action="">
<table border="3" width="500" height="300">
<tr><th>Sr.No</th><th><input type="text" name="s_n" value="<?php echo $_GET['sr']; ?>"/></th></tr>
<tr><th>Student_ID</th><th><input type="text" name="stud_id" value="<?php echo $_GET['sid']; ?>"/></th></tr>
<tr><th>Student Name</th><th><input type="text" name="s_name" value="<?php echo $_GET['sn']; ?>"/></th></tr>
<tr><th>Class</th><th><input type="text" name="class" value="<?php echo $_GET['cl']; ?>"/></th></tr>
<tr><th>Date Of Birth</th><th><input type="text" name="d_o_b" value="<?php echo $_GET['dob']; ?>"/></th></tr>
<tr><th>Sex</th><th><input type="text" name="sex" value="<?php echo $_GET['sex']; ?>"/></th></tr>
<tr><th>Mobile No</th><th><input type="text" name="mobile_no" value="<?php echo $_GET['mob']; ?>"/></th></tr>
</form>
</table>
<br/><br/><br/><br/>
<button type="submit" name="submit" value="update">Update</button>
<br/><br/>
<?php
if($_GET['submit'])
{   
    $sn = $_GET['s_n'];
	$id = $_GET['stud_id'];
	$n = $_GET['s_name'];
	$c = $_GET['class'];
	$d = $_GET['d_o_b'];
	$sex = $_GET['sex'];
	$mob = $_GET['mobile_no'];
    $query = " UPDATE STUDENT SET s_n='$sn', s_name='$n', class='$c', d_o_b='$d', sex='$sex', mobile_no='$mob' WHERE stud_id ='$id'";
	$data = mysqli_query($conn, $query);
	
		 if($data)
		 {
        	echo "<font color='green'><h3>Record Successfully Updated</h3>";
?>
	       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/les/displayst.php">
<?php
		 }
		   
	else
	{
		echo "<font color='red'><h4>! Record Not Updated</h4>";
	}
}

?>
</center>
</body>
</html>