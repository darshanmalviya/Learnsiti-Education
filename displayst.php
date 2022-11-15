<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !=0)
{
?>
<html>
<head>
<link rel="stylesheet" href="css/btn.css">
</head>
<body background ="..\les\images\abt.png">
<center>
<img src= "..\les\images\18.png" height="150" width="150">
<h1>Student List</h1>
	<table border="5" width="900" height="700">
		<tr>
			<th><h3>Sr no.</h3></th>
			<th><h3>Student ID</b></th>
			<th><h3>Student Name</h3></th>
			<th><h3>Class</h3></th>
			<th><h3>Date Of Birth</h3></th>
			<th><h3>Sex</h3></th>
			<th><h3>Mobile No</h3></th>
			<th colspan='2'><h3>Operations</h3></th>
		</tr>
	
<?php
	
	while($result = mysqli_fetch_assoc($data))
	
	{
	
		echo "<tr>
					<th>".$result['s_n']."</th>
					<th>".$result['stud_id']."</th> 
					<th>".$result['s_name']."</th>
					<th>".$result['class']."</th>
					<th>".$result['d_o_b']."</th>
					<th>".$result['sex']."</th>
					<th>".$result['mobile_no']."</th>
					<th><a href ='update.php?sr=$result[s_n]&sid=$result[stud_id]&sn=$result[s_name]&cl=$result[class]&dob=$result[d_o_b]&sex=$result[sex]&mob=$result[mobile_no]'>Update</a></th>
					<th><a href ='delete.php?sid=$result[stud_id]' onclick=' return checkdelete()'>Delete<a></th>
					
			 </tr>";
	
	}
	
}

else

{
	echo"No Record Found";
}
?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sue you want to delete data???');
}
</script>
<br/><br/>
<a href="http://localhost/les/insert.php"><button type="Add">Add</button></a>
<a href="home.html"><button type="Back">Back</button></a>
<br/><br/>
</center>
</Body>
</html>
