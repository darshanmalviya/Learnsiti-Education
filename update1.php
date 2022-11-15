<?php
include("connection.php");
error_reporting(0);
 $_GET['tid'];
 $_GET['tn'];
 $_GET['cl'];
 $_GET['sub'];
 $_GET['jn'];
 $_GET['sex'];
 $_GET['mob'];
 $_GET['eml'];
?>
<html>
<head>
<link rel="stylesheet" href="css/btn.css">
</head>
<body background="..\les\images\abt.png">
<center>
<img src= "..\les\images\18.png" height="150" width="150">
<h1>Update Teacher</h1>
<form  method="GET" action="">
<table border="3" width="600" height="400">

<tr><th>Teacher ID</th><th><input type="text" name='teacher_id' value="<?php echo $_GET['tid']; ?>"/></th></tr>
<tr><th>Teacher Name</th><th><input type="text" name='teacher_name' value="<?php echo $_GET['tn']; ?>"/></th></tr>
<tr><th>Class</th><th><input type="text" name='class' value="<?php echo $_GET['cl']; ?>"/></th></tr>
<tr><th>Subject</th><th><input type="text" name='subject' value="<?php echo $_GET['sub']; ?>"/></th></tr>
<tr><th>Joining</th><th><input type="text" name='joining' value="<?php echo $_GET['jn']; ?>"/></th></tr>
<tr><th>Sex</th><th><input type="text" name='sex' value="<?php echo $_GET['sex']; ?>"/></th></tr>
<tr><th>Mobile No</th><th><input type="text" name='mobile_no' value="<?php echo $_GET['mob']; ?>"/></th></tr>
<tr><th>Email</th><th><input type="text" name='email' value="<?php echo $_GET['eml']; ?>"/></th></tr>

</form>
</table>
<br/><br/><br/><br/>
<button type="submit" name="submit" value="update">Update</button>
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
    $query = " UPDATE TEACHER SET teacher_name='$tn', class='$cl', subject='$sub', joining='$jn', sex='$sex', mobile_no='$mob', email='$eml' WHERE teacher_id ='$tid'";
	$data = mysqli_query($conn, $query);
	
		 if($data)
		 {
        	echo "<font color='green'><h3>Record Successfully Updated</h3>";
		?>
	       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/les/displaytr.php">
		   
		<?php		
		 }
		   
	else
	{
		echo "<font color='red'><h4>!! Record Not Updated !!</h4>";
	}
}

?>
</center>
</body>
</html>