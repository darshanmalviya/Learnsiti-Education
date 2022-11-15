<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM REG";
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
<h1>Registered Student</h1>
	<table border="3">
		<tr>
			<th><h3>Enrollment No.</h3></th>
			<th><h3>Name</b></th>
			<th><h3>Father's Name</h3></th>
			<th><h3>Date Of Birth</h3></th>
			<th><h3>Sex</h3></th>
			<th><h3>Address</h3></th>
			<th><h3>City</h3></th>
			<th><h3>Postal Code</h3></th>
			<th><h3>State</h3></th>
			<th><h3>Mobile No.</h3></th>
			<th><h3>Email ID</h3></th>
			<th><h3>Hobbies</h3></th>
			<th><h3>Previous School</h3></th>
			<th><h3>Class</h3></th>
			<th><h3>Board</h3></th>
			<th><h3>Stream</h3></th>
			<th><h3>Transport</h3></th>
		</tr>
	
<?php
	
	while($result = mysqli_fetch_assoc($data))
	
	{
	
		echo "<tr>
					<td>".$result['en']."</td>
					<td>".$result['name']."</td>              
					<td>".$result['fname']."</td>
					<td>".$result['dob']."</td>
					<td>".$result['sex']."</td>
					<td>".$result['address']."</td>
					<td>".$result['city']."</td>
                   	<td>".$result['pscode']."</td>
					<td>".$result['state']."</td>
					<td>".$result['mobile']."</td>
					<td>".$result['email']."</td>
					<td>".$result['hobby']."</td>
					<td>".$result['pre_school']."</td>
					<td>".$result['class']."</td>
					<td>".$result['board']."</td>
                   	<td>".$result['stream']."</td>
					<td>".$result['transport']."</td>
					
					
			 </tr>";
	
	}
	
}

else

{
	echo"No Record Found";
}
?>
</table>
<br/><br/>
<a href="home.html"><button type="back">Back</button></a>
<br/><br/>
</center>
</Body>
</html>
